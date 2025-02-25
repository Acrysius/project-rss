<?php
require 'mysqli-connect.php';

if($_SERVER['REQUEST_METHOD']==='POST'){
    if(isset($_POST['loterija'])){
        $clan1=$_POST['clan1'];
        $clan2=$_POST['clan2'];     
        $clan1p=$_POST['clan1p'];
        $clan2p=$_POST['clan2p'];
        if(!empty($_POST['clan3p'])){
            $clan3=$_POST['clan3'];
            $clan3p=$_POST['clan3p'];
        }
        print($_POST['clan3p']."hello".$clan3);

        //Ta segment kode preveri za dostopnost projekta in nato izbere naključnega.
        $queryVsiProjekti = $conn -> prepare("SELECT TK_projekt FROM skupina");
        $queryVsiProjekti -> execute();
        $resultProjekt = $queryVsiProjekti -> fetchAll(PDO::FETCH_ASSOC);
        /*foreach(new TableRows(new RecursiveArrayIterator($queryVsiProjekti->fetchAll())) as $k=>$v){

        }*/

        function assignProject($takenP){
            if ($takenP == null){
                $randomProject = rand(1,25);
                return $randomProject;
            } else {
                $control = 0;
            
                while ($control == 0){
                $randomProject = rand(1,25);
                foreach($takenP as $p){
                    if($p != $randomProject){
                        $control = 1;
                    } else {
                        $control = 0;
                        break;
                    }
                }
            }
            return $randomProject;
            }
            
            
        }
        
        

        $queryClan1 = $conn->prepare("SELECT ID_student, ime, priimek FROM student WHERE ime='$clan1' AND priimek='$clan1p'");
        $queryClan1 -> execute();
        $result = $queryClan1 -> fetch(PDO::FETCH_ASSOC);
        $studentID = [];
        array_push($studentID, $result['ID_student']);

        $queryClan2 = $conn->prepare("SELECT ID_student, ime, priimek FROM student WHERE ime='$clan2' AND priimek='$clan2p'");
        $queryClan2 -> execute();
        $result = $queryClan2 -> fetch(PDO::FETCH_ASSOC);
        array_push($studentID, $result['ID_student']);

        if(isset($clan3)){
            $queryClan3 = $conn->prepare("SELECT ID_student, ime, priimek FROM student WHERE ime='$clan3' AND priimek='$clan3p'");
            $queryClan3 -> execute();
            $result = $queryClan3 -> fetch(PDO::FETCH_ASSOC);
            array_push($studentID, $result['ID_student']);
        }
        printf(sizeof($studentID));
        $assignProject = assignProject($resultProjekt);
        print("/n".$assignProject);
        
        if (sizeof($studentID)==3) {
            $projectInsert = "INSERT INTO skupina (TK_clan1, TK_clan2, TK_clan3, TK_projekt) VALUES ('$studentID[0]', '$studentID[1]', '$studentID[2]', '$assignProject');";
        } else {
            $projectInsert = "INSERT INTO skupina (TK_clan1, TK_clan2, TK_projekt) VALUES ('$studentID[0]', '$studentID[1]', '$assignProject');";
        }
        $conn->exec($projectInsert);


        $conn=null;

    }
    

}
?>