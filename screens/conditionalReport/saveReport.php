<?php

session_start();
$i = 0;
include '../common/DatabaseConnection.php';

$params = array();
foreach ($_POST as $key => $value) {
    $params[$key] = $value;
}

if(isset($_FILES)) {

	foreach ($_FILES as $key => $value) {
		$ret = array();
		$error = $_FILES[$key]["error"];

		$params[$key] = $value;
		$i++;
	}

}

$artefactCode = $params['artefactCode'];
$scheduledKey = $params['scheduledKey'];
$location = $_SESSION['userLoc'];
$user = $_SESSION['userPK'];
$currentDate = date('Y-m-d');

$db = new DatabaseConnection();
$conn = $db->createConnection();

$taskListQuery = "
				INSERT INTO tasklist
						VALUES
						(NULL,
						'$artefactCode',
						'$scheduledKey',
						'$location',
						'$user',
						'$currentDate',
						'$user',
						CURRENT_TIMESTAMP,
						'$user',
						CURRENT_TIMESTAMP)";

$taskResult = $db->setQuery($taskListQuery);
$latRecordId = $conn->insert_id;

$reportQuery;
foreach ($params as $paramkey => $paramvalue) {

    if ($paramkey != 'artefactCode' || $paramkey != 'scheduledKey') {


        $reportQuery = "
					INSERT INTO conditionalreport
					SET CheckListFK = '$paramkey',
					  TaskListFK    = '$latRecordId',
					  Result        = '$paramvalue',
					  CreatedBy='$user',
					  CreatedDate=CURRENT_TIMESTAMP,
					  ModifiedBy='$user',
					  ModifiedDate=CURRENT_TIMESTAMP;
				";

        $db->setQuery($reportQuery);

    }

}

$updateSMsql = "UPDATE scheduledmaintenance
				SET CurrentStatus = 'Completed'
				WHERE ScheduleMaintenancePK = $scheduledKey";

$db->setQuery($updateSMsql);
if ($taskResult) {
    echo 'success';
} else {
    echo $reportQuery;
}


//print_r($params);