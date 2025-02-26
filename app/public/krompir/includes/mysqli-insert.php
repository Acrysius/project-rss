<?php
require 'mysql-connect.php';

if($_SERVER['REQUEST_METHOD']==='POST'){
    if(isset($_POST['krompir'])){
        $ime = $_POST['ime'];
        $priimek = $_POST['priimek'];
        $kraj = $_POST['naslov'];
        $hisnaSt = $_POST['hisna-st'];
        $mesto = $_POST['mesto'];
        $postna = $_POST['postna'];
        $vrsta = $_POST['vrsta'];
        $teza = $_POST['teza'];
        $eposta = $_POST['eposta'];
        $sporocilo = $_POST['vsebina'];

        $queryMesto = "INSERT INTO MESTO(mesto, postna_stevilka) 
        VALUES('$mesto','$postna')";
        $conn->exec($queryMesto);


        $lastIdMesto = $conn->lastInsertId();
        $queryNaslov = "INSERT INTO NASLOV(kraj, hisna_st, TK_mesto) VALUES('$kraj','$hisnaSt','$lastIdMesto')";
        $conn->exec($queryNaslov);

        $lastIdNaslov = $conn->lastInsertId();
        $queryUporabnik = "INSERT INTO NAROCNIK(ime, priimek, eposta, TK_naslov)
        VALUES('$ime', '$priimek','$eposta','$lastIdNaslov')";
        $conn->exec($queryUporabnik);

        $lastIdUporabnik = $conn->lastInsertId();
        $queryKrompir = $conn->prepare("SELECT ID_krompir_v as id FROM KROMPIR_VRSTA WHERE naziv='$vrsta'");
        $queryKrompir -> execute();
        $result = $queryKrompir->fetch(PDO::FETCH_ASSOC);
        $idVrsta=$result['id'];
        
        $queryNarocilo = "INSERT INTO NAROCILO(TK_krompir_v, TK_narocnik, teza, sporocilo)
        VALUES('$idVrsta','$lastIdUporabnik','$teza','$sporocilo')";
        $conn->exec($queryNarocilo);

        $conn=null;

    }
    

}
?>