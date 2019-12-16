<?php
$host        = "host = 127.0.0.1";
$port        = "port = 5432";
$dbname      = "dbname = postgressql";
$credentials = "user = postgres password=admin";
$db = pg_connect( "$host $port $dbname $credentials"  );
if(!$db) {
	echo "Error : Unable to open database\n";
}
// Attempt select query execution
$sql ="SELECT * from login";
$ret = pg_query($db, $sql);
if($ret) {
	while($row = pg_fetch_row($ret)) {
		$dn = $row[1];
		$dp = $row[2];
		if($dn == $_POST['username'] && $dp == $_POST['password']){
			echo "correct";
		}else{
			echo "wrong";
		}
	}
} else {
	echo pg_last_error($db);
}
	pg_close($db);
?>