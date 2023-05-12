<?php
header("Access-Control-Allow-Origin: *");
$servername = "localhost";
$username = "id20735256_htmonitor";
$password = "Sachin!0";
$dbname = "id20735256_htmonitor";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if(isset($_GET['hum1'])){
    $hum1= $_GET['hum1'];
    
    $sql = "UPDATE DHT11 SET hum1= $hum1";
    $result = $conn->query($sql);
}
if(isset($_GET['temp1'])){
    $temp1 = $_GET['temp1'];
    
    $sql = "UPDATE DHT11 SET temp1= $temp1";
    $result = $conn->query($sql);
}
if(isset($_GET['hum2'])){
    $hum2= $_GET['hum2'];
    
    $sql = "UPDATE DHT11 SET hum2= $hum2";
    $result = $conn->query($sql);
}
if(isset($_GET['temp2'])){
    $temp2 = $_GET['temp2'];
    
    $sql = "UPDATE DHT11 SET temp2= $temp2";
    $result = $conn->query($sql);
}
if(isset($_GET['hum3'])){
    $hum3= $_GET['hum3'];
    
    $sql = "UPDATE DHT11 SET hum3= $hum3";
    $result = $conn->query($sql);
}
if(isset($_GET['temp3'])){
    $temp3 = $_GET['temp3'];
    
    $sql = "UPDATE DHT11 SET temp3= $temp3";
    $result = $conn->query($sql);
}
if(isset($_GET['hum4'])){
    $hum4= $_GET['hum4'];
    
    $sql = "UPDATE DHT11 SET hum4= $hum4";
    $result = $conn->query($sql);
}
if(isset($_GET['temp4'])){
    $temp4 = $_GET['temp4'];
    
    $sql = "UPDATE DHT11 SET temp4= $temp4";
    $result = $conn->query($sql);
}
if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>