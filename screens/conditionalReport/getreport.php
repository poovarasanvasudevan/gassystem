<?php
/**
 * Created by PhpStorm.
 * User: poovarasanv
 * Date: 17-11-2015
 * Time: 14:23
 */
include '../common/DatabaseConnection.php';

$db = new DatabaseConnection();
$conn = $db->createConnection();

$task = $_GET['task'];
$sql = "select
          ch.CheckListFK,
          ch.Result
        from checklist c
          inner JOIN conditionalreport ch
            on c.CheckListPK = ch.CheckListFK
        where ch.TaskListFK='$task'";

$result = $db->setQuery($sql);
$resultArray = array();
while($row = $result->fetch_assoc()){
    $resultArray[] = $row;
}

echo json_encode($resultArray);