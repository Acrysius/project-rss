drop database if exists krompir;
create schema if not exists krompir;
use krompir;

create table if not exists KROMPIR_VRSTA(
	ID_krompir_v INT NOT NULL auto_increment primary key,
    naziv varchar(45) not null
);

create table if not exists NAROCNIK (
	ID_narocnik int not null auto_increment primary key,
    ime varchar(45) not null,
    priimek varchar(45) not null,
    spol bool,
    datum_rojstva date,
    eposta varchar(45),
    TK_naslov int not null
);

create table if not exists NASLOV (
	ID_naslov int not null auto_increment primary key,
    kraj varchar(60) not null,
    hisna_st varchar(5) not null,
    TK_mesto INT NOT NULL
);

create table if not exists MESTO (
	ID_mesto int not null auto_increment primary key,
    mesto varchar(45),
    postna_stevilka char(4)
);

create table if not exists NAROCILO (
	ID_narocilo int not null auto_increment primary key,
    TK_krompir_v int not null,
    TK_narocnik int not null,
    teza int not null,
    sporocilo mediumtext
);

alter table NAROCILO add constraint narocilo_krompir foreign key (TK_krompir_v) references KROMPIR_VRSTA(ID_krompir_v) on update no action on delete cascade;
alter table NAROCILO add constraint narocilo_narocnik foreign key (TK_narocnik) references NAROCNIK(ID_narocnik) on update no action on delete cascade;
alter table NAROCNIK add constraint narocnik_naslov foreign key (TK_naslov) references NASLOV(ID_naslov) on update no action on delete cascade;
alter table NASLOV add constraint naslov_mesto foreign key (TK_mesto) references MESTO(ID_mesto) on update no action on delete cascade;

insert into KROMPIR_VRSTA (naziv) values
	('sladki'),
    ('beli'),
    ('russet'),
    ('rumeni'),
    ('mladi');
    
insert into MESTO (mesto, postna_stevilka) values
	('Radomlje', 3559),
    ('Radenci', 9252),
    ('Lemerje', 6942),
    ('Tišina', 9233),
    ('Celje', 3000),
    ('Maribor', 2000);
    
insert into NASLOV (kraj, hisna_st, TK_mesto) values
	('Ženeva', '13a', 1),
    ('Hribovje', '211', 2),
    ('Tišina', '309b', 4),
    ('Doljna vas', '1c', 3),
    ('Višnja vas', '42', 5),
    ('Klem', '17', 6);
    
insert into NAROCNIK (ime, priimek, eposta, TK_naslov) values
	('Tomaž', 'Strahov', 'tomazstrah@dmail.de', 1),
    ('Janez', 'Jančar', 'jj@mail.de', 2),
    ('Friderik', 'Golar', 'ferdogol@dmail.de', 3),
    ('Domen', 'Hanžekovič', 'hando@mail.uk', 4),
    ('Henrik', 'Kralj', 'kraljevic@mail.de', 5),
    ('Lara', 'Vos', 'lara.vos@mail.um.si', 6);
    
insert into NAROCILO (TK_krompir_v, TK_narocnik, teza, sporocilo) values
	(3, 1, 8, 'Kak dolgo bom pa čakal na to ah?'),
    (5, 2, 1, 'Lahko odložite pri psu?'),
    (1, 3, 10, 'Lačen sem, to bom se nažrl praženga krompira ej.'),
    (3, 4, 9, NULL),
    (2, 5, 10, 'Če bo kak črviv, zahtevam reklamacijo!'),
    (4, 6, 5, NULL);