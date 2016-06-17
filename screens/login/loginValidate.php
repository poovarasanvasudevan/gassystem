<?php

session_start();     // Starting Session
//include '';
include "../common/DatabaseConnection.php";

// Define $username and $password
$username = $_GET['username'];
$password = $_GET['password'];

// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$obj = new DatabaseConnection();
$conn = $obj->createConnection();


// To protect MySQL injection for Security purpose
$username = stripslashes($username);
$password = stripslashes($password);
//$username = mysql_real_escape_string($username);
//$password = mysql_real_escape_string($password);


// SQL query to fetch information of registerd users and finds user match.
$query = $obj->setQuery("select * from user where abhyasiid='$username' AND password='$password' AND `login_attempts` < 3 and `ActiveStatus`='on'");

$rows = $query->num_rows;

if ($rows == 1) {
    $_SESSION['artefactUser'] = $username;
    header("Location: ../dashboard/dashboard.php"); // Redirecting To Other Page
} else {

    $data = $obj->setQuery("select * from user where abhyasiid='$username'");
    $rows1 = $data->num_rows;
    //echo "inside".$rows1;
    if ($rows1 == 1) {
        $obj->setLoginAttempts($username);
        //echo "inside";
        $num = $obj->getLoginAttempts($username);
        if($num >= 3) {
            $obj->deactiveUser($username);
            header("Location: ../../index.php?error=locked&attempt=0");
        } else {
            header("Location: ../../index.php?error=invalid&attempt=0");
        }
    } else{
        header("Location: ../../index.php?error=invalid&attempt=0");
    }
    //echo $query;
    //echo "outside";
}


?>

