<?php
/**
 * Created by PhpStorm.
 * User: poovarasanv
 * Date: 28/6/16
 * Time: 12:06 PM
 */

include '../common/DatabaseConnection.php';
include '../mail/mail.php';
require '../mail/PHPMailerAutoload.php';
$db = new DatabaseConnection();
$db->createConnection();
$user = $_POST['user'];
$password = $_POST['password'];

$ip = "";
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}


$sql = "UPDATE user
            SET Password = '$password'
            WHERE AbhyasiID = '$user'";

$name = "";
$email = "";

$q1 = "select * from user where abhyasiid='$user'";
//echo $q1;
$query = $db->setQuery($q1);
while ($rr = $query->fetch_assoc()) {
    $name = $rr['FirstName'] . ' ' . $rr['LastName'];
    $email = $rr['EmailId'];
}
//echo $email;
if ($db->setQuery($sql)) {

    $res = wwwcopy('loginMail.php');

    $res = str_replace("{{ipaddress}}", $ip, $res);
    $res = str_replace("{{user}}", $name, $res);
    sendMail($email, $res);

    echo "<H1>You Have Succesfully Changed the Password</H1>";
    echo "<H4>Now You can close the window</H4>";
}
