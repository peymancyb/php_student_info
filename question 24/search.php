<!--  select book by title or number of pages or both of that  and present result in site. -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>search</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <form>
        <p>Title:</p>
        <input type="text" name="titleBook"/>
        <p>Number of pages:</p>
        <input type="number" name="numOfpage"/>
        <input type="submit" value="submit" name="submit"/>
    </form>
    <?php
    function callSql(){
        if(isset($_POST['submit'])){
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
                global $titleBook,$numOfBook;
                if(isset($_POST['titleBook'])){
                    $titleBook=$_POST['titleBook'];
                }
                if(isset($_POST['numOfpage'])){
                    $numOfBook=$_POST['numOfpage'];
                }

                $sql = "SELECT numberOfPage=$numOfBook || bookName='$titleBook' FROM Library";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "id: " . $row["id"]. " - Book name: " . $row["bookName"]. " " . " - Number of pages: ".$row["numberOfPage"]. "<br>";
                    }
                } else {
                    echo "0 results";
                }
            
        }
    }
    ?>
</body>
</html>