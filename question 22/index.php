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


      $sql = "SELECT * FROM lib WHERE author='$author' OR nameOfBook='$name' OR publishDate='$date' OR numberOfPages='$number'  ";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
              echo "id: " . $row["id"]. " - Book name: " . $row["nameOfBook"]. " " . " - Number of pages: ".$row["numberOfPages"]." ". $row["publishDate"]. " ". $row["author"]. " "."<br>";
          }
      } else {
          echo "0 results";
      }

      $conn->close();
  }

?>
