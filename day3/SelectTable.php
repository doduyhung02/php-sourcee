<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "productdb";

$conn = new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error){
    die("Connection failed: ".$conn->connect_error);
}
$sql = "SELECT id, firstname,lastname FROM MyGuest";
$result = $conn->query($sql);
if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo $row ["id"]."-".$row["firstname"]." ". $row["lastname"]."<br>";
    }
}
else{
    echo "0 results";
}
$conn->close();
?>