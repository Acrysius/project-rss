-- Active: 1739964578118@@127.0.0.1@3307
DROP schema if exists rss_projekti_2024;
CREATE SCHEMA rss_projekti_2024;

use rss_projekti_2024;

create table student (
    ID_student int PRIMARY KEY auto_increment,
    ime varchar(45) not null,
    priimek varchar (60) not null,
    smer tinyint(1)
);

create table projekt (
    ID_projekt int primary key auto_increment,
    naziv varchar(45) not null,
    opis mediumtext
);

create table skupina (
    ID_skupina int primary key auto_increment,
    TK_clan1 int not null,
    TK_clan2 int not null,
    TK_clan3 int,
    TK_projekt int not null,
    foreign key (TK_clan1) references student(ID_student),
    foreign key (TK_clan2) references student(ID_student),
    foreign key (TK_clan3) references student(ID_student),
    foreign key (TK_projekt) references projekt(ID_projekt)
);

insert into student(ime, priimek, smer) values
("Ognena", "Aleksandrova Luka", 0),
("Anđela", "Balaban", 0),
("Lara", "Bosnar", 0),
("Urška", "Brecl", 0),
("Nataša", "Butolen", 0),
("Lavra", "Cigan", 0),
("Ana", "Cizej", 0),
("Aleš", "Felkner", 0),
("Nik", "Gajšek", 0),
("Julija", "Gaube", 0),
("Bina", "Habjanič", 0),
("Ema", "Hauc", 0),
("Alja", "Kampuš", 0),
("Petja", "Kljočnik", 0),
("Tadej", "Kljočnik", 0),
("Gaja", "Kolenc", 0),
("Vesna Zarja", "Kožuh", 0),
("Lara", "Kralj", 0),
("Moisha Mei", "Macanović", 0),
("Kaja", "Mikša", 0),
("Anja", "Polanič", 0),
("Kaja", "Potočnik", 0),
("Neja", "Prša", 0),
("Lena", "Rimele", 0),
("Andraž", "Rudolf", 0),
("Ema", "Savanović", 0),
("Vuk", "Stojanović", 0),
("Liza", "Stupar", 0),
("Janina", "Škrinjar", 0),
("Maša", "Vantur", 0),
("Anika", "Zadravec", 0),
("Urška", "Zemljič", 0),
("Nella", "Žolek", 0),
("Tristan", "Berlak", 1),
("Živa", "Brvar", 1),
("Lara", "Čeh", 1),
("Jure", "Furman", 1),
("Hana", "Gavrić", 1),
("Gašper", "Haložan", 1),
("Eva", "Hlade", 1),
("Danica", "Icić", 1),
("Dejan", "Jevšnik", 1),
("Veronika", "Kocjančič", 1),
("Jan", "Kuhelnik", 1),
("Erih Anton", "Partljič", 1),
("Tina", "Pratnekar", 1),
("Nina", "Repič", 1),
("Nina", "Savić", 1),
("Tilen", "Sotlar", 1),
("Matic", "Turičnik", 1),
("Lucija", "Turnšek", 1),
("Žiga Aleksander", "Virant", 1);

insert into projekt (naziv, opis) values
("Mizarstvo", null),
("Lesene skulpture", null),
("Kuhinjski pripomočki", null),
("Kmetija z alpakami", null),
("Kmetija z ovcami", null),
("Kmetija s konji", null),
("Buče in bučni izdelki", null),
("Oljka in oljčni izdelki", null),
("Gojenje vrtne zelenjave in sadik", null),
("Pekoče paprike in omake", null),
("Mlečni proizvodi iz kravjega mleka", null),
("Mlečni proizvodi iz kozjega mleka", null),
("Čebelarstvo", null),
("Domača pivovarna", null),
("Sredozemsko vinogradništvo", null),
("Jeruzalemsko vinogradništvo", null),
("Domača pekarna z drožmi", null),
("Jabolka in izdelki iz jabolk", null),
("Jagode in izdelki iz jagod", null),
("Borovnice in izdelki iz borovnic", null),
("Češnje in višnje ter njihovi izdelki", null),
("Turistična kmetija na Gorenjskem", null),
("Turistična kmetija v Prekmurju", null),
("Kmetija z zelišči in zdravilnimi rastlinami", null),
("Splošna in popolnoma legalna žganjarna", null);