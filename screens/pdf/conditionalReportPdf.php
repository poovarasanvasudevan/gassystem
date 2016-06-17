<?php
/**
 * Created by PhpStorm.
 * User: poovarasanv
 * Date: 16/6/16
 * Time: 1:35 PM
 */

include "../common/DatabaseConnection.php";

$db = new DatabaseConnection();
$db->createConnection();

$task = $_GET['task'];

$sql = "select
          c.CheckListItem,
          ch.Result
        from checklist c
        inner JOIN conditionalreport ch
        on c.CheckListPK = ch.CheckListFK
        where ch.TaskListFK='$task'";

$result = $db->setQuery($sql);

while($row = $result->fetch_assoc()) {

}