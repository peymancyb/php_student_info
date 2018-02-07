<?php

// The data type specifies what type of data the column can hold.
// For a complete reference of all the available data types, go to our Data Types reference.
//
// After the data type, you can specify other optional attributes for each column:
//
// NOT NULL - Each row must contain a value for that column, null values are not allowed
// DEFAULT value - Set a default value that is added when no other value is passed
// UNSIGNED - Used for number types, limits the stored data to positive numbers and zero
// AUTO INCREMENT - MySQL automatically increases the value of the field by 1 each time a new record is added
// PRIMARY KEY - Used to uniquely identify the rows in a table. The column with PRIMARY KEY setting is often an ID number, and is often used with AUTO_INCREMENT
// Each table should have a primary key column (in this case: the "id" column). Its value must be unique for each record in the table.
//
// The following examples shows how to create the table in PHP:



  //creating table
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

  // sql to create table (Library is the name of table)
  $sql = "CREATE TABLE Library (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  firstname VARCHAR(30) NOT NULL,
  lastname VARCHAR(30) NOT NULL,
  email VARCHAR(50),
  reg_date TIMESTAMP
  )";

  if ($conn->query($sql) === TRUE) {
      echo "Table Library created successfully";
  } else {
      echo "Error creating table: " . $conn->error;
  }

  $conn->close();
?>
