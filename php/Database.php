<?php
    $conn=mysqli_connect("localhost","root","","solmedi");
   
    // PHP Data Objects(PDO) Sample Code:
    //try {
      //  $conn = new PDO("sqlsrv:server = tcp:server-web-bd.database.windows.net,1433; Database = Solmedi Web", "killerbean", "C0mp3ns4r564**");
        //$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //}
    //catch (PDOException $e) {
      //  print("Error connecting to SQL Server.");
    //    die(print_r($e));
    //}
    
    //SQL Server Extension Sample Code:
    //$connectionInfo = array("UID" => "killerbean", "pwd" => "{C0mp3ns4r564**}", "Database" => "Solmedi Web", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
    //$serverName = "tcp:server-web-bd.database.windows.net,1433";
    //$conn = sqlsrv_connect($serverName, $connectionInfo);
// Parámetros de conexión a la base de datos en Azure
?>
