<?php

// mysql 

//connect with database   
// try {
//     $dbc=new PDO("mysql:host=localhost;dbname=login","root","") or die("Unable to connect.");
// }
// catch(PDOException $e) {
//     	echo "Error: " . $e->getMessage();
//     }

//------------------------------
//postgresql
//------------------------------

// Connection details
//$conn_string = "host=localhost port=5432 dbname=postgressql user=postgres password=admin options='--client_encoding=UTF8'";
 
// Establish a connection with MySQL server
//$dbconn = pg_connect($conn_string);

   $host        = "host = 127.0.0.1";
   $port        = "port = 5432";
   $dbname      = "dbname = postgressql";
   $credentials = "user = postgres password=admin";

   $db = pg_connect( "$host $port $dbname $credentials"  );
   if(!$db) {
      echo "Error : Unable to open database\n";
   } 

   $sql ="SELECT * from login"; 
   $ret = pg_exec($db, $sql); echo $ret;
//    $row = pg_numrows($ret); 
//    if($row > 0)  {
//         echo "correct";
//    }else{
//        echo "wrong";
//    }
  ?>
