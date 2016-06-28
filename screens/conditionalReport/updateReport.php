<?php

session_start();

include '../common/DatabaseConnection.php';

$params = array();
foreach ($_POST as $key => $value) {
    $params[$key] = $value;
}

$artefactCode = $params['artefactCode'];
$scheduledKey = $params['scheduledKey'];
$taskid = $params['taskid'];
$location = $_SESSION['userLoc'];
$user = $_SESSION['userPK'];
$currentDate = date('Y-m-d');

$db = new DatabaseConnection();
$conn = $db->createConnection();

//echo "Hai";
$result = "";
foreach ($params as $paramkey => $paramvalue) {

    if ($paramkey != 'artefactCode' || $paramkey != 'scheduledKey') {

        $updatequery = "UPDATE conditionalreport
                                SET Result='$paramvalue'
                                WHERE CheckListFK='$paramkey'
                                AND TaskListFK='$taskid'";

        //echo $updatequery;
        $result = $db->setQuery($updatequery);

    }

}

$updateSMsql = "UPDATE scheduledmaintenance
				SET CurrentStatus = 'Completed'
				WHERE ScheduleMaintenancePK = $scheduledKey";

$db->setQuery($updateSMsql);
if ($result) {
    echo 'success';
} else {
    echo $updatequery;
}


//print_r($params);