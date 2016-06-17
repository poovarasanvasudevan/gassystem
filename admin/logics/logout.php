<?php
/**
 * Created by PhpStorm.
 * User: HTCINDIA\poovarasanv
 * Date: 24/5/16
 * Time: 1:38 PM
 */
session_start();
unset($_SESSION['gasadmin']);
session_destroy();

header('Location:../index.php');