<?php
// INSERT INTO table_name (column1, column2, column3,...)
// VALUES (value1, value2, value3,...)

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

//change firstname, lastname, email to you your given task
$sql = "INSERT INTO Library (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
