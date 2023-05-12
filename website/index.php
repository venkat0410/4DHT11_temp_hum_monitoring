<?php
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

// Get the latest temperature and humidity values from the database
$sql = "SELECT * FROM DHT11 ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $temp1 = $row['temp1'];
    $hum1 = $row['hum1'];
    $temp2 = $row['temp2'];
    $hum2 = $row['hum2'];
    $temp3 = $row['temp3'];
    $hum3 = $row['hum3'];
    $temp4 = $row['temp4'];
    $hum4 = $row['hum4'];
  }
} else {
  echo "0 results";
}
$conn->close();
?>

<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <link rel="stylesheet" href="./contstyle.css">  
</head>
<body>
    <div class="header">
        <h1>Solar Temperature Monitoring</h1>
    </div>
    <div class="container">
        <div class="monitor">
            <div class="values">
                <h2>Temperature:1</h2>
                <p> <?php echo $temp1; ?></p>
            </div class="container">
            </div>
            <div class="values">
                <h2>Humidity:1</h2>
                <p> <?php echo $hum1; ?> </p>
            </div>
            <div class="monitor">
                <div class="values">
                    <h2>Temperature:2</h2>
                    <p> <?php echo $temp2; ?></p>
                </div>
            </div class="container">
                <div class="values">
                    <h2>Humidity:2</h2>
                    <p> <?php echo $hum2; ?> </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">

        <div class="monitor">
            <div class="values">
                <h2>Temperature:3</h2>
                <p> <?php echo $temp3; ?></p>
            </div>
        </div class="container">
            <div class="values">
                <h2>Humidity:3</h2>
                <p> <?php echo $hum3; ?> </p>
            </div>
            <div class="monitor">
                <div class="values">
                    <h2>Temperature:4</h2>
                    <p> <?php echo $temp4; ?></p>
                </div>
            </div class="container">
                <div class="values">
                    <h2>Humidity:4</h2>
                    <p> <?php echo $hum4; ?> </p>
                </div>
            </div>
