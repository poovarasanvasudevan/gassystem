<?php
/**
 * Created by PhpStorm.
 * User: HTCINDIA\poovarasanv
 * Date: 24/5/16
 * Time: 11:35 AM
 */
session_start();
if ($_GET['username'] == 'gasadmin' && $_GET['password'] == 'gasadminpassword') {
    $_SESSION['gasadmin'] = 'gasadmin';
    echo json_encode(array("result" => true));
} else {
    echo json_encode(array("result" => false));
}

?>

