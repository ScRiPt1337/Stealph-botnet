<?php
  include_once 'sql.php';

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if($_GET["command"])
$command = $_GET["command"];
{
    $sql = "UPDATE text SET text = '$command'";
}

if ($conn->query($sql) === TRUE) {
    echo "command send successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();

?>