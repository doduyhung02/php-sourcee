<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "productdb";

$conn = new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error){
    die("Connection failed: ".$conn->connect_error);
}
$sql = "INSERT INTO MyGuest (firstname,lastname,email)
VALUES('John','Doe','john@example.com')";
if ($conn->query($sql)===TRUE){
    echo "New record created successfully";
}else{
    echo "Error: ".$sql . "<br>".$conn->error;
}
$conn->close();
?>