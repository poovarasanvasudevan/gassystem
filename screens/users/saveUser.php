<?php

//abyasiId=ghj&firstName=ghj&middleName=j&lastName=jgh&email=fghf%40emnail.com&location=421&roles=2

include '../common/DatabaseConnection.php';
include '../mail/mail.php';
$db = new DatabaseConnection();
$db->createConnection();

$abyasiId = $_GET['abyasiId'];
$fname = $_GET['firstName'];
$nname = $_GET['middleName'];
$lname = $_GET['lastName'];
$password = $_GET['password'];
$email = $_GET['email'];
$location = $_GET['location'];
$role = $_GET['roles'];


$sql = "INSERT INTO user VALUES
						(NULL,
						'$location',
						'$role',
						'$password',
						NULL,
						'$abyasiId',
						'$fname',
						'$nname',
						'$lname',
						'$email',
						'1',
						CURRENT_TIMESTAMP,
						'1',
						CURRENT_TIMESTAMP,
						'on')";
$result = $db->setQuery($sql);

if ($result) {

    $res = wwwcopy("mailfile.php");
    $res1 = str_replace("{{user}}", $fname, $res);
    $res2 = str_replace("{{username}}", $abyasiId, $res1);
    $res3 = str_replace("{{password}}", $password, $res2);

    sendMail($email, $res3);
    echo 'success';
} else {
    echo $sql;
}


?>