<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header><h1>Gästlista</h1></header>
    <main><form action="guestbook.php" method="post">
    <input type="password" name="lösenord" placeholder="Lösenord">
    <input type="text" name="namn" placeholder="namn">
    <input type="text" name="email" placeholder="email">
    <input type="text" name="comment" placeholder="comment">
    <input type="submit" value="submit"></form>

    
</main>
</body>

</html>
<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nytt_test";
$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT * FROM guestbook";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> Namn: ". $row["name"]. " - email: ". $row["email"]. "Tid " . $row["time"] . "comment " . $row["comment"] . "<br>";
    }
} else {
    echo "0 results";
}
?>