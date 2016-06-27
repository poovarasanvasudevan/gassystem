<?php
/**
 * Created by PhpStorm.
 * User: poovarasanv
 * Date: 27/6/16
 * Time: 2:32 PM
 */
error_reporting(E_ALL);
ini_set('display_errors', 1);
include "../common/DatabaseConnection.php";
require('ArtefactReport.php');
$db = new DatabaseConnection();
$db->createConnection();


$artefactcode = $_GET['artefactcode'];
function GenerateWord()
{
    //Get a random word
    $nb = rand(3, 10);
    $w = '';
    for ($i = 1; $i <= $nb; $i++)
        $w .= chr(rand(ord('a'), ord('z')));
    return $w;
}

function GenerateSentence()
{
    //Get a random sentence
    $nb = rand(1, 10);
    $s = '';
    for ($i = 1; $i <= $nb; $i++)
        $s .= GenerateWord() . ' ';
    return substr($s, 0, -1);
}

$pdf = new ArtefactReport();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 12);
$pdf->SetWidths(array(75, 100));
$max = "";
$name = "";
$sql = "select artefacttypecode,ArtefactName from artefact WHERE ArtefactCode = '$artefactcode'";
if ($result = $db->setQuery($sql)) {
    while ($r = $result->fetch_assoc()) {
        $max = $r['artefacttypecode'];
        $name = $r['ArtefactName'];
    }
}
$tablename = $db->getParentType($max) . "Attributes";
$sql2 = "select * from $tablename WHERE artefactcode = '$artefactcode'";
$resultarray = array();

if ($result = $db->setQuery($sql2)) {
    while ($r = $result->fetch_assoc()) {
        foreach ($r as $key => $val) {
            $resultarray[strtolower($key)] = $val;
        }

    }
}
$pdf->SetFont('Arial', 'B', 14);
$pdf->SetX(70);
$pdf->Cell(135 - ($pdf->GetStringWidth($name) / 2), 5, $name);
unset($resultarray['artefactcode']);
unset($resultarray['visiblestatus']);
//print_r($resultarray);
$pdf->Ln(20);
$pdf->Line(5, 22, 205, 22);
foreach ($resultarray as $key => $val) {
    $pdf->Row(array(strtoupper($key), $val));
}
$pdf->Output();