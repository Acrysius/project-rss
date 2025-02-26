<?php
include 'mysql-connect.php';

$queryAll = "SELECT ime, priimek, eposta, kraj, hisna_st, mesto, postna_stevilka, teza, sporocilo, KROMPIR_VRSTA.naziv as vrsta
            FROM NAROCNIK, NASLOV, MESTO, NAROCILO, KROMPIR_VRSTA 
            WHERE TK_krompir_v = ID_krompir_v AND TK_naslov = ID_naslov AND TK_mesto = ID_mesto AND TK_narocnik = ID_narocnik";

$stmt = $conn->prepare($queryAll);
$stmt -> execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach($rows as $izpis){
    include 'vzorec.php';
}

$conn=null;
?>