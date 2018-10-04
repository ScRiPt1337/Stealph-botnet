<?php
	include_once 'sql.php';


$sql = "SELECT id,ip FROM hack";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result))  
{

    $name = $row['id'];
    $ip = $row['ip'];
    echo $name . " ";
    echo $ip . "<br>";

}

?> 
