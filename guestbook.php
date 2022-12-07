<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nytt_test";
$conn = new mysqli($servername, $username, $password, $dbname);

$lösenord = $_POST["lösenord"];
$namn = $_POST["namn"];
$email = $_POST["email"];
$comment = $_POST["comment"];

// echo $lösenord . $namn . $email . $comment . $email;

if($lösenord == "stol"){

    $sql = "INSERT INTO guestbook (name, email, comment, time) VALUES ('$namn', '$email', '$comment', now())";
    $conn->query($sql);

}

else{
    echo "Fel Lösenord";
}

header("Location: index.php");
