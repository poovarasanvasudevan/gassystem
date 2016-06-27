<?php
/**
 * Created by PhpStorm.
 * User: HTCINDIA\poovarasanv
 * Date: 24/5/16
 * Time: 4:50 PM
 */
ini_set('display_errors', '1');
require "../../screens/common/DatabaseConnection.php";
$db = new DatabaseConnection();
$db->createConnection();
if (isset($_GET['function'])) {
    $function_name = $_GET['function'];
    if ($function_name == 'getArtefactTree') {
        echo json_encode($db->getArtefactTree());
    }
}
?>