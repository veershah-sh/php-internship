<?php
// include "utils/errors.php";
include "config.php";

$conn = mysqli_connect($host, $username, $password, $db);

if($conn){
    echo "DB Connected: " . $db;
}
else{
    die("Error connecting DB " . mysqli_connect_error());
}

$sql = "
    CREATE TABLE IF NOT EXISTS users(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50)
)";

$query = mysqli_query($conn, $sql);

if($query){
    echo "Table Created: users";
}
else{
    die("Error Creating Table: " . mysqli_error($conn));
}







// OOP
// $conn = new mysqli($host, $username, $password, $db);

// if($conn->connect_error){
//     die("Error: " . $conn->connect_error);
// }
// else{
//     echo "DB Connected: " . $db;
// }


?>