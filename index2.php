<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>User interface</title>
  </head>
  <body>
    <form class="createTable" action="<?php echo $_SERVER["PHP_SELF"]?>" method="post">
      <input type="submit" name="table" value="Create table"/>
    </form>

    <form class="createTable" action="createTable/createTable.php" method="post">
      <input type="submit" name="insert" value="insert"/>
    </form>

    <form class="createTable" action="createTable/createTable.php" method="post">
      <input type="submit" name="update" value="update"/>
    </form>

    <form class="createTable" action="createTable/createTable.php" method="post">
      <input type="submit" name="delete" value="delete"/>
    </form>

  </body>


  <?php

    if(isset($_POST['table'])){

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

    }
    if(isset($_POST['insert'])){
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

    }
    if(isset($_POST['update'])){
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

    }
    if(isset($_POST['delete'])){
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

    }

   ?>
</html>


<!-- Create interface, that allow to enter different query such as ‘create table …”, ‘insert
into…’,
‘update table_name….”, “delete from…” and send query to database. -->
