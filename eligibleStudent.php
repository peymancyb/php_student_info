<?php
$sName = 'localhost';
$uName = 'root';
$pWord = '';
$dbName = 'project';


$getConnected = new mysqli($sName,$uName,$pWord,$dbName);
if(!$getConnected){
    echo "Connection failed: ". $getConnected->connection_error;
}

$selectEligible = "SELECT * FROM library WHERE marks > passing_grade";
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
    echo "no results";
}
$getConnected -> close();

?>