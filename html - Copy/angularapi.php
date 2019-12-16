<?php 
/**
 * Description: API for user authentication
 * @author Prem Tiwari
 */

//include database connection file
require_once 'config.php';
//define database object
global $dbconn;
// admin login API

//---------------------------------------------
//MYSQL
//---------------------------------------------

// $stmt = $dbc->prepare("SELECT username, password from login WHERE username='".$_POST['username']."' && password='".  md5($_POST['password'])."'");
// $stmt->execute();
// $row = $stmt->rowCount();
// if ($row > 0){ 
//     echo "correct";
// } else{ 
//     echo 'wrong';
// }


//---------------------------------------------
//Postgressql
//---------------------------------------------

?>


