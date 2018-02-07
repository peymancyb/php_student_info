<?php
// UPDATE table_name
// SET column1=value, column2=value2,...
// WHERE some_column=some_value

$servername = "localhost";
$username = "root";
$password = "";
//database name here(Make database and insert name here)
$dbname = "Library";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE Library SET lastname='Doe' WHERE id=2";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();

?>
