<?php
/**
 * Created by PhpStorm.
 * User: poovarasanv
 * Date: 16/6/16
 * Time: 4:49 PM
 */
error_reporting(E_ALL);
ini_set('display_errors', 1);
echo "<pre>";

$myFile = "photo.sql";
$fh = fopen($myFile, 'w');

include "../screens/common/DatabaseConnection.php";
$db = new DatabaseConnection();
$conn = $db->createConnection();


$str = file_get_contents("import.json");
$data = json_decode($str);
//print_r($data);
$j = 0;
//$conn->autocommit(false);
foreach ($data as $section) {
    $sectionName = "photobox" . "_" . $section->name;
    $sectionDesc = $section->desc;


    foreach ($section->items as $item) {
        $name = $item->name;
        $type = $item->type;
        $pick = $item->pick;
        $j++;
        $pick1 = is_array($pick) ? "y" : "";

        $listcode = "";
        $lcode = "";
        if (is_array($pick)) {

            $listcode = "photobox" . $section->name . "_" . rand(10000, 99999);
            for ($i = 0; $i < sizeof($pick); $i++) {


                $pickSql = "INSERT INTO attributelist
                            VALUES (NULL, '$listcode', '$pick[$i]', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);";

                //echo $pick[$i];
                fwrite($fh, $pickSql . "\n");
                $db->setQuery($pickSql);
            }
            $lcode = $listcode;
        }
        $d1 = mysqli_real_escape_string($conn, $name);
        $clist = "INSERT INTO checklist
                            VALUES (NULL, 'PhotoBox', $j, '$d1' , NULL, '$type', '$pick1', '$listcode', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);";
        fwrite($fh, $clist . "\n");
        $db->setQuery($clist);
        $last = $conn->insert_id;


        // echo $sectionName . "__" . $sectionDesc . "__" . $last . "</br/>";

        $dd = mysqli_real_escape_string($conn, $sectionDesc);
        $cSection = "INSERT INTO cr_section
              VALUES (NULL, '$sectionName', '$dd', 'PhotoBox','$last', CURRENT_TIMESTAMP);";


        fwrite($fh, $cSection . "\n");
        $db->setQuery($cSection);
    }
}
fclose($fh);