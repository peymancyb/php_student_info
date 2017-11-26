<?php


$sName = 'localhost';
$uName = 'root';
$pWord = '';
$dbName = 'project';


$getConnected = new mysqli($sName,$uName,$pWord,$dbName);
if(!$getConnected){
    echo "Connection failed: ". $getConnected->connection_error;
}



global $firstName , $sureName , $birthDay , $gender , $mark , $passGrade ;

if(isset($_POST['firstName']) and $_POST['firstName'] != '')
    $firstName = $_POST["firstName"];
if(isset($_POST['sureName']) and $_POST['sureName'] != '')
    $sureName = $_POST["sureName"];
if(isset($_POST['birthDay']) and $_POST['birthDay'] != '')
    $birthDay = $_POST["birthDay"];
if(isset($_POST['gender']) and $_POST['gender'] != '')
    $gender = $_POST["gender"];
if(isset($_POST['mark']) and $_POST['mark'] != '')
    $mark = $_POST["mark"];
if(isset($_POST['passGrade']) and $_POST['passGrade'] != '')
    $passGrade = $_POST["passGrade"];


$selectEligible = "SELECT * FROM library WHERE first_name = '$firstName' or surname = '$sureName' or birthday = '$birthDay' or gender = '$gender' or marks = '$mark' or passing_grade = '$passGrade' ";
$search_resualt = $getConnected->query($selectEligible);
// functionallity
if($search_resualt->num_rows > 0 ){
        while($row = $search_resualt->fetch_assoc()){
             echo "<table style='width:900px;'><tr>"
             ."<td>"."id: ".$row['ID']."</td><td>"
             ."First name: ".$row['first_name']."</td><td>"
             ."Surname: ".$row["surname"]."</td><td>"
             ."Birthday: ".$row["birthday"]."</td><td>"
             ."Gender: ".$row["gender"]."</td><td>"
             ."Mark: ".$row["marks"]."</td><td>"
             ."Passing grade: ".$row["passing_grade"].
             "</td></tr></table>";
        }
    }
else{
    echo "no results found! ";
}


$getConnected -> close();
?>