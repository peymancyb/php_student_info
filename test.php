<html>
<head>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<h3>Name: </h3>
<input type = 'text' name = 'Name' >
<h3>Age: </h3>
<input type = 'number' name = 'Age' >
<br><br>
<input type = 'submit' name = 'submit' value = 'Submit'>
<?php
  if (isset($_POST['submit']))
  {
  $zz=mysqli_connect("localhost","root","");
  if (!$zz)
  {
  	exit();
  }
  if(!mysqli_select_db($zz,"library"))
  {
  	exit();
  }
  global $Name , $Age;
  if (isset($_POST['Name']))
  {
  	$Name = $_POST['Name'];
  }
  if (isset($_POST['Age']))
  {
  	$Age = $_POST['Age'];
  }
  $query = ("SELECT * FROM emp  WHERE name = '$Name' OR age=$Age ");
  $result = mysqli_query($zz,$query);
  $rowcount=mysqli_num_rows($result);

  if ($rowcount > 0) {
    while ($row = mysqli_fetch_array($result,MYSQLI_BOTH))
    {
      echo $row["id"] . " ";
      echo $row["name"] . " ";
      echo $row["age"] . "<br>";
    }
  }

  mysqli_close($zz);
  }
?>
