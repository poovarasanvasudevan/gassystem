<?php
/**
 * Created by PhpStorm.
 * User: poovarasanv
 * Date: 28-08-2015
 * Time: 11:14
 */
error_reporting(E_ALL);
ini_set('display_errors', 1);
include "../common/DatabaseConnection.php";
require('./pdf/fpdf.php');
require_once './dom/autoload.inc.php';


$header = array('Conditions', 'Result');


$db = new DatabaseConnection();
$db->createConnection();


$task = $_GET['task'];
$sql1 = "SELECT
          artefact.ArtefactName,
          archivelocation.Description,
          user.FirstName,
          user.LastName,
          t.ServiceDate,
          t.CreatedDate
        FROM tasklist t
          LEFT JOIN user ON user.UserPk = t.UserFK
          LEFT JOIN archivelocation ON archivelocation.LocationPk = t.LocationFK
          LEFT JOIN artefact ON t.ArtefactCode = artefact.ArtefactCode
        WHERE t.TaskListPK ='$task'";
$res = $db->setQuery($sql1);
$row2 = mysqli_fetch_array($res);


$table = "<table>";


$table = $table . "<tr>";
$table = $table . "<td>" . $row2['ArtefactName'] . "</td>";
$table = $table . "<td>" . $row2['Description'] . "</td>";
$table = $table . "</tr>";

$table = $table . "<tr>";
$table = $table . "<td>" . date("d-m-Y", strtotime($row2['ServiceDate'])) . "</td>";
$table = $table . "<td>" . $row2['FirstName'] . " " . $row2['LastName'] . "</td>";
$table = $table . "</tr>";

$table = $table . "<tr>";
$table = $table . "<td>" . date("d-m-Y", strtotime($row2['CreatedDate'])) . "</td>";
$table = $table . "<td>" . date("d-m-Y", strtotime($row2['CreatedDate'])) . "</td>";
$table = $table . "</tr>";
$table = $table . "</table>";


$sql = "SELECT
          cr.CheckListFK,
          cr.Result,
          crs.sectiondesc,
          c.DataType,
          crs.sectionname,
          c.CheckListItem
        FROM conditionalreport cr
          LEFT JOIN checklist c
            ON c.CheckListPK = cr.CheckListFK
          LEFT JOIN cr_section crs
            ON c.CheckListPK = crs.checklist
        WHERE cr.TaskListFK = '$task'";

$result = $db->setQuery($sql);

$allArray = array();
$section = array();
$sectiondesc = array();

while ($row2 = $result->fetch_assoc()) {
    $allArray[] = $row2;
    array_push($section, $row2['sectionname']);
    array_push($sectiondesc, $row2['sectiondesc']);
}
$uniqueSection = array_values(array_unique($section));
$uniqueSectiondesc = array_values(array_unique($sectiondesc));
$resulta = array();

for ($j = 0; $j < sizeof($uniqueSection); $j++) {

    $current = $uniqueSection[$j];
    $currentdesc = $uniqueSectiondesc[$j];


    $table = $table . "<h3>" . $currentdesc . "</h3>";

    $table = $table . "<table>";
    for ($i = 0; $i < sizeof($allArray); $i++) {


        if ($allArray[$i]['sectionname'] == $current) {
            if ($allArray[$i]['DataType'] == 'textarea') {


                $table = $table . "<tr>";
                $table = $table . "<td>" . $allArray[$i]['CheckListItem'] . "</td>";
                $table = $table . "<td>" . $allArray[$i]['Result'] . "</td>";
                $table = $table . "</tr>";
                $table = $table . "</table>";

            }


        }

    }
    $table = $table . "</table>";
}
$dompdf = new Dompdf();
$dompdf->loadHtml($table);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

