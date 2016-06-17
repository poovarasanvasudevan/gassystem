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


$header = array('Conditions', 'Result');


$db = new DatabaseConnection();
$db->createConnection();
$pdf = new FPDF();
$pdf->AddPage();


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

$pdf->SetFillColor(255, 255, 255);
$pdf->SetDrawColor(0, 0, 0);

$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(170, 10, $row2['ArtefactName'], 0, 0, 'C');
$pdf->Ln();
$pdf->Line(0, 20, 230, 20);

$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(23, 10, "Location :");
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(105, 10, $row2['Description']);


$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(30, 10, "Service Date :");
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(100, 10, date("d-m-Y", strtotime($row2['ServiceDate'])));

$pdf->Ln();
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(23, 5, "Done By :");
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(105, 5, $row2['FirstName'] . " " . $row2['LastName']);

$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(30, 5, "Date :");
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(100, 5, date("d-m-Y", strtotime($row2['CreatedDate'])));

//
//$pdf->SetFont('Arial', 'B', 16);
//$pdf->SetY(50);
//$pdf->Cell(95, 10, $header[0], 1, "C");
//$pdf->Cell(95, 10, $header[1], 1, "C");
//$pdf->Ln();

$sql = "SELECT
          cr.CheckListFK,
          cr.Result,
          crs.sectiondesc,
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

    $pdf->SetFont('Arial', 'B', 16);
    $pdf->Cell(95, 20, $currentdesc, 0);
    $pdf->Ln(15);
    for ($i = 0; $i < sizeof($allArray); $i++) {

        if ($allArray[$i]['sectionname'] == $current) {
            $pdf->SetFillColor(211, 211, 211);
            $pdf->SetFont('Arial', 'B', 11);
            $pdf->Cell(95, 10, $allArray[$i]['CheckListItem'], 1,0,'',0);

            $pdf->SetFillColor(255, 255, 255);
            $pdf->SetFont('Arial', '', 11);
            $pdf->MultiCell(95, 10, $allArray[$i]['Result'], 0);

            $pdf->Ln(10);

        }
    }
}

$pdf->Output();
