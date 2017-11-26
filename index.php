<?php
$servername = "localhost";
$username = "root";
$password = "";
$databaseName = "project";

//form datas
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


$conn = new mysqli($servername, $username , $password, $databaseName);

if($conn->connect_error){
    die ("connection failed: " . $conn->connect_error) ;
}

$sql = "INSERT INTO library(ID,first_name,surname,birthday,gender,marks,passing_grade)VALUES ('','$firstName','$sureName','$birthDay','$gender','$mark','$passGrade')";

$sql_search = "SELECT ID,first_name,surname,birthday,gender,marks,passing_grade FROM library";
$search_resualt = $conn->query($sql_search);

if (mysqli_query($conn, $sql)) {
        echo "<p style='text-align:center;'>". "Student has been added successfully" . "</p>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

$conn -> close();
?>

