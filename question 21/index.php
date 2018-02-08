<!-- 23./40/Create in database table with information about library.
In table have to include information about :
books, authors, name of books, date of publishing, number of pages.

Create PHP program, which allow search, select book by family name of author or
date of publishing or both of that  and present result in site. -->



<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>library</title>
  </head>
  <body>
    <form class="" action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
      <h3>Author: </h3>
      <input type = 'text' name = 'author' >
      <h3>Name of book: </h3>
      <input type = 'text' name = 'name' >
      <h3>publish date: </h3>
      <input type = 'date' name = 'date' >
      <h3>Number of pages: </h3>
      <input type = 'number' name = 'number' >
      <br><br>
      <input type = 'submit' name = 'submit' value = 'Submit'>
      <input type = 'submit' name = 'delete' value = 'Delete'>
    </form>
  </body>
</html>
<?php
  //creating table
  $servername = "localhost";
  $username = "root";
  $password = "";
  //database name here(Make database and insert name here)
  $dbname = "Library";
  if (isset($_POST['submit'])){
      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);
      // Check connection
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }

      global $author,$name,$date,$number;
      if(isset($_POST['author'])){
          $author=$_POST['author'];
      }
      if(isset($_POST['name'])){
          $name=$_POST['name'];
      }
      if(isset($_POST['date'])){
          $date=$_POST['date'];
      }
      if(isset($_POST['number'])){
          $number=$_POST['number'];
      }
      $sql = "INSERT INTO lib (author, nameOfBook, publishDate,numberOfPages)
      VALUES ('$author', '$name', '$date','$number')";
      if ($conn->query($sql) === TRUE) {
          echo "New record created successfully";
      } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
      }
      $conn->close();
  }



  if (isset($_POST['delete'])){
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    global $author,$name,$date,$number;
    if(isset($_POST['author'])){
        $author=$_POST['author'];
    }
    if(isset($_POST['name'])){
        $name=$_POST['name'];
    }
    if(isset($_POST['date'])){
        $date=$_POST['date'];
    }
    if(isset($_POST['number'])){
        $number=$_POST['number'];
    }

    $sql = "DELETE FROM lib WHERE  `publishDate`='$date' OR `numberOfPages`='$number' OR `author`='$author' OR `nameOfBook`='$name' ";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $conn->close();
  }

?>
