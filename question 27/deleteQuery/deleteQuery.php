<?php
// DELETE FROM table_name
// WHERE some_column = some_value

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

// sql to delete a record
$sql = "DELETE FROM Library WHERE id=1";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
