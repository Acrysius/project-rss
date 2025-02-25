<?php
$streznik = "127.0.0.1:3307";
$usn = "root";
$geslo = "";
$baza = "rss_projekti_2024";

try {
    $conn = new PDO("mysql:host=mysql;dbname=$baza", $usn, $geslo);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch(PDOException $e) {
    echo "Povezava neuspešna: ".$e->getMessage();
}

?>