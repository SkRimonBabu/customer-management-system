
<html>
    <head>
        <title>title</title>
    </head>
    <body>
        <a href="form.php">new customer</a>
    </body>
</html>

<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'customer_management_system';


$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    exit('databas connection error!');
}

//$select = "SELECT * FROM identitly";
//$data = $conn->query($select);
//echo '<pre>';
//print_r($data);
//echo '</pre>';
//exit;


$sql = "INSERT INTO `identitly` (`id`, `name`, `email`, `number`, `district`, `url`)"
        . " VALUES (NULL, '$_POST[name]', '$_POST[email]', '$_POST[number]', '$_POST[district]', '$_POST[url]')";

$result = $conn->query($sql);

if ($result === FALSE) {
    echo 'failed to listed the customer!';
}
echo 'customer is listed';
//$servername = "localhost";
//$username = "root";
//$password = "";
//$dbname = "myDB";
//
//// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);
//// Check connection
//if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
//}
//
//// sql to create table
//$sql = "CREATE TABLE MyGuests (
//id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//firstname VARCHAR(30) NOT NULL,
//lastname VARCHAR(30) NOT NULL,
//email VARCHAR(50),
//reg_date TIMESTAMP
//)";
//
//if ($conn->query($sql) === TRUE) {
//    echo "Table MyGuests created successfully";
//} else {
//    echo "Error creating table: " . $conn->error;
//}
//
//$conn->close();
//
?>

<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
<script type="text/javascript" src="assets/js/jquery.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.js"></script>