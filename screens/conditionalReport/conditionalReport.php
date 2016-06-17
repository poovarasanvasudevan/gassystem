<?php
session_start();
include '../common/Config.php';
include '../common/DatabaseConnection.php';
if (!isset ($_SESSION ['artefactUser'])) {
    header("Location: ../../index.php");
}

$artefactCode = $_GET ['artefactCode'];
$scheduledMaintainanceKey = $_GET ['key'];
$user = $_SESSION ['artefactUser'];

$currentDate = date("d/m/Y");
$scheduledMaintainancedate;
$overrideMaintainancedate;

$db = new DatabaseConnection ();
$db->createConnection();

$pages = $db->getPages($_SESSION ['userPK']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon"
          type="image/png"
          href="../../images/logo.png"/>

    <LINK REL="SHORTCUT ICON"
          HREF="../../images/logo.png">


    <title>Global Archive</title>
    <!-- Bootstrap -->

    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/bootstrap-select.min.css" rel="stylesheet">
    <link href="../../css/custom.css" rel="stylesheet"/>
    <link href="../../css/jquery.dataTables.min.css"/>
    <script src="../../js/layout.js"></script>
    <script src="../../js/jquery.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/jquery.dataTables.min.js">
    </script>
    <link rel="stylesheet" href="../../css/font-awesome.min.css"/>
    <!-- Switches -->
    <script type="text/javascript" src="../../js/bootstrap-switch.js"></script>
    <link rel="stylesheet" href="../../css/bootstrap-switch.css">

    <link rel="stylesheet" href="../../css/jquery.growl.css">
    <script src="../../js/jquery.growl.js"></script>
    <script src="../../js/bootbox.min.js"></script>
    <script src="../../js/dropzone.js"></script>
    <link rel="stylesheet" href="../../css/dropzone.css">

    <style>
        .big-text {
            font-size: 18px;;
        }
    </style>

    <script type="text/javascript">
        $(function () {

            var taskId;
            //$('#nextMaintainanceDate').datepicker();
            $('[data-toggle="tooltip"]').tooltip();
            $('.full-form').hide();


            $('input[type="checkbox"]').bootstrapSwitch({
                onText: 'Yes',
                offText: 'No',
                size: 'small'
            });

//            Dropzone.autoDiscover = false;
//
//            var myDropzone = new Dropzone('div.dropzone', {
//                url: "upload.php",
//                paramName: "files",
//                maxFilesize: 5.0,
//                maxFiles: 25,
//                parallelUploads: 10000,
//                uploadMultiple: true,
//                autoProcessQueue: false,
//                init: function () {
//                    var myDropzone1 = this;
//                    $("button[type=submit]").on("click", function (e) {
//
//                        e.preventDefault();
//                        e.stopPropagation();
//                        myDropzone1.processQueue();
//                    });
//                }
//            });

            $('#conditionalForm').submit(function (ev) {
                // Get all the forms elements and their values in one step


                ev.preventDefault();
                $('saveButton').prop('disabled', 'disbled')

                var r = confirm("You want to submit ?")
                if (r) {
                    submitForm();
                } else {
                    $('saveButton').removeAttr("disabled")
                    return false;
                }
            });

            function submitForm() {

                var values = $("#conditionalForm").serialize();
                var scheduledKey = getUrlParameter('key');
                var artefactCode = getUrlParameter('artefactCode');
                var urlProcess = values + '&artefactCode=' + artefactCode + '&scheduledKey=' + scheduledKey;

                if (values == "") {
                    return false;
                }

                $.ajax({
                    method: "POST",
                    url: "saveReport.php",
                    data: urlProcess,
                    success: function (data) {
                        if (data == 'success') {
                            $.growl.notice({message: "Report saved succesfully..!", size: 'large'});
                            //window.location = "../dashboard/dashboard.php";
                        } else {
                            $.growl.error({message: "failed to save report..!", size: 'large'});
                            //$('#status').html("<div class='alert alert-danger' role='alert'>" + data + "</div>");
                        }
                    }
                });
            }

            $('#newCR').on('click', function () {
                $('.full-form').slideDown(300);
            });

            $('#selectReport').on('change', function () {

                $('#conditionalForm').attr('form-type', 'update')

                var url = 'getreport.php?task=' + $(this).val();
                taskId = $(this).val();
                $.ajax({
                    url: url,
                    success: function (data) {
//                        if (data == 'success') {
//                            $.growl.notice({message: "Report saved succesfully..!", size: 'large'});
//                            window.location = "../dashboard/dashboard.php";
//                        } else {
//                            $.growl.error({message: "failed to save report..!", size: 'large'});
//                            //$('#status').html("<div class='alert alert-danger' role='alert'>" + data + "</div>");
//                        }


                        var jsonReturn = JSON.parse(data);
                        for (var key in jsonReturn) {
                            if (jsonReturn.hasOwnProperty(key)) {
                                var jsond = jsonReturn[key];
                                var keyData = jsond.CheckListFK;
                                var valueData = jsond.Result;

                                document.getElementById(keyData).value = valueData;
                            }
                        }
                        $('.full-form').slideDown(300);
                    }
                });
            });
        })
        ;


        function getUrlParameter(sParam) {
            var sPageURL = window.location.search.substring(1);
            var sURLVariables = sPageURL.split('&');
            for (var i = 0; i < sURLVariables.length; i++) {
                var sParameterName = sURLVariables[i].split('=');
                if (sParameterName[0] == sParam) {
                    return sParameterName[1];
                }
            }
        }

        var overrideStatus = false;
        function disablefield() {
            if (document.getElementById('scheduled').checked == 1) {
                if (document.getElementById('scheduled').value == 'no') {
                    overrideStatus = false;
                    document.getElementById('nextMaintainanceDate').disabled = 'disabled';
                    document.getElementById('nextMaintainanceDate').value = '';
                }
            }
            else {
                overrideStatus = true;
                document.getElementById('nextMaintainanceDate').disabled = '';
            }
        }
    </script>
</head>
<body>
<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <!--<div class="col-sm-1 col-xs-2" style="padding-right: 0px;">
                        <img width="89" height="89" src="images/logo-ga.png" alt="Global Arichve">
                    </div>-->
                <div class="col-md-12">
                    <div class="logintxt">Global Archives<sub><span
                                style="font-size: 13px;">&nbsp; <?= $db->getVersion() ?></span></sub></div>
                </div>
            </div>
            <div class="col-md-5 padding0">
                <div class="col-md-12 text-right logout ">
                    <a href="../common/logout.php">Logout</a>
                </div>
                <div class="col-md-12 tp-login-info">
                    <div class="col-md-7 padding0">
                        <span>Welcome </span><span class="tp-username"><?php echo $_SESSION['fullName']; ?></span>
                    </div>
                    <div class="col-md-5 text-right padding0">
                        <span>Location : </span><span><?php echo $_SESSION['userLocationDesc'] ?></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-tabs">
                    <?php

                    for ($i = 0; $i < sizeof($pages); $i++) {

                        if ($pages[$i]['menutitle'] != '') {

                            echo "<li class=''><a href='" . PAGE_DIR . "" . $pages[$i]['dir'] . "/" . $pages[$i]['url'] . "' title='" . $pages[$i]['menutitle'] . "'>" . $pages[$i]['menutitle'] . "</a></li>";


                        }
                    }
                    ?>
                </ul>
                <div class="tab-content">


                    <div class='tile col-md-12'>

                        <div class='col-md-12 border-low'>


                            <div class="col-md-3 text-left heading-Bg">
                                <i class="fa fa-pencil-square-o fa-2x heading-Bg"></i> &nbsp; <span
                                    style="font-size: 22px;">Condition report</span><br>
                            </div>


                            <div class="col-md-9 form-group" style="">

                                <?php
                                $query = "SELECT * FROM maintenancecycle where ArtefactCode ='$artefactCode'";
                                $result1 = $db->setQuery($query);

                                if ($result1->num_rows > 0) {
                                    while ($rows = $result1->fetch_assoc()) {
                                        $scheduledMaintainancedate = $rows ['NextServiceDate'];
                                    }
                                } else {

                                    $scheduledMaintainancedate = "";
                                }

                                echo "
														<div class='col-md-4'>
															<div class='col-md-5 text-right marginT10'>	
																<label for='LocationDropdown'>
																	Location
																</label>
															</div>
															<div class='col-md-7'>	
													    <select id='LocationList' class='selectDropdown form-control'>
												";

                                $query = "select LocationPk,Code,Description from ArchiveLocation;";
                                if ($result = $db->setQuery($query)) {
                                    echo "<option value=''> Select Location </option>";
                                    if ($result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc()) {
                                            ?>
                                            <option value='<?php echo $row['Code'] ?>'
                                                <?php if ($row['LocationPk'] == $_SESSION['userLoc']) {
                                                    echo ' selected="selected"';
                                                } ?>><?php echo $row['Description'] ?></option>
                                            <?php
                                        }
                                    }
                                }
                                echo "
												</select></div></div>
													<div class='col-md-3'>	
														<div class='col-md-4 text-right marginT10'>	<label> User </label></div>  
														<div class='col-md-8'>	<input type='text' name='username' id='username' value='$user' class='form-control' readonly/></div>
													</div>
													<div class='col-md-5'>
														<div class='col-md-5 text-right marginT10'><label>Current Date </label></div>  
														<div class='col-md-7'><input type='text' name='currentdate' class='form-control' id='currentDate' value='$currentDate' readonly /></div>
													</div>
												<br/>
												</div>";

                                ?>

                            </div>

                            <div class="col-md-12 datatables">
                                <form id='conditionalForm' form-type="save" enctype="multipart/form-data">
                                    <div>
                                        <header>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label class="big-text">Artefact
                                                        Name: <?php echo $db->getArtefactNamePK($artefactCode); ?></label>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="button" class="btn btn-success" id='newCR'
                                                           value="New Report"/>

                                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                                    &nbsp;&nbsp;&nbsp;&nbsp;

                                                    <select class="fc-select-helper form-control" id="selectReport"
                                                            style="width: 40%;">
                                                        <option value="">Select One</option>
                                                        <?php

                                                        $sqlCR = "select
                                                                t.TaskListPK,
                                                                t.ArtefactCode,
                                                                a.ArtefactName,
                                                                a.ArtefactTypeCode,
                                                                t.ServiceDate,
                                                                l.Description,
                                                                u.FirstName
                                                                from tasklist t
                                                                inner join artefact a
                                                                on t.ArtefactCode = a.ArtefactCode
                                                                inner join archivelocation l
                                                                on l.LocationPk = t.LocationFK
                                                                inner join user u
                                                                on t.UserFK = u.UserPk
                                                                where t.ArtefactCode='$artefactCode'";

                                                        //echo $sqlCR;

                                                        $result = $db->setQuery($sqlCR);
                                                        while ($row = $result->fetch_assoc()) {
                                                            $date = date("d-M-Y", strtotime($row['ServiceDate']));
                                                            echo "<option value='$row[TaskListPK]'>$date</option>";

                                                        }

                                                        ?>

                                                    </select>
                                                </div>
                                            </div>
                                        </header>
                                        <div class="inner-spacer full-form">
                                            <div id='status'></div>

                                            <?php
                                            $artefactTypeCode;
                                            $res = $db->setQuery("select ArtefactTypeCode from artefact where ArtefactCode='$artefactCode'");
                                            if ($res->num_rows > 0) {
                                                while ($row1 = $res->fetch_assoc()) {
                                                    $artefactTypeCode = $db->getParentType($row1 ['ArtefactTypeCode']);
                                                }
                                            }
                                            if ($artefactTypeCode == 'VTrack')
                                                $artefactTypeCode = 'Video';


                                            //echo $artefactTypeCode;
                                            $sql = "SELECT
                                                              cr.sectionname,
                                                              cr.sectiondesc,
                                                              c.CheckListPK,
                                                              c.CheckListItem,
                                                              c.DataType,
                                                              c.PickFlag,
                                                              c.pickcode
                                                            FROM cr_section cr
                                                              INNER JOIN checklist c
                                                                ON c.CheckListPK = cr.checklist
                                                            WHERE cr.artefacttypecode = '$artefactTypeCode'
                                                            ORDER BY c.SequenceNo;";

                                            // echo $sql;
                                            $res1 = $db->setQuery($sql);
                                            $allArray = array();
                                            $section = array();
                                            $sectiondesc = array();
                                            if ($res1->num_rows > 0) {

                                                while ($row2 = $res1->fetch_assoc()) {

//                                                            if ($row2 ['CheckListItem'] != 'Remarks') {
//                                                                echo "<tr>
//																				<td class='col-md-6'>" . $row2 ['CheckListItem'] . "</td>
//																				<td class='col-md-6'><textarea rows='3' cols='40' class='form-control' name=" . $row2 ['CheckListPK'] . " id='remarks' ></textarea></td></tr>";
//                                                            } else {
//                                                                echo "<tr>
//																				<td class='col-md-6'>" . $row2 ['CheckListItem'] . "</td>
//																				<td class='col-md-6'><textarea rows='3' cols='40' class='form-control' name=" . $row2 ['CheckListPK'] . " id='remarks' placeholder='please enter remarks..' ></textarea></td></tr>";
//                                                            }


                                                    $allArray[] = $row2;
                                                    array_push($section, $row2['sectionname']);
                                                    array_push($sectiondesc, $row2['sectiondesc']);
                                                    //echo $row['sectionname'];
                                                }
                                            } else {
                                                echo "<label>No Checklist defined...</label>";
                                            }

                                            $uniqueSection = array_values(array_unique($section));
                                            $uniqueSectiondesc = array_values(array_unique($sectiondesc));
                                            $result = array();

                                            //echo "<pre>";
                                            //print_r($uniqueSection);

                                            //echo sizeof($uniqueSection);

                                            for ($j = 0; $j < sizeof($uniqueSection); $j++) {

                                                $current = $uniqueSection[$j];
                                                $currentdesc = $uniqueSectiondesc[$j];
                                                //echo $current;
                                                echo "<fieldset>";
                                                echo "<legend>$currentdesc</legend>";
                                                echo "<table class='test'>";
                                                for ($i = 0; $i < sizeof($allArray); $i++) {

                                                    if ($allArray[$i]['sectionname'] == $current) {
                                                        if ($allArray[$i]['DataType'] == 'text') {
                                                            echo "<tr>";
                                                            echo "<td>" . $allArray[$i]['CheckListItem'] . "</td>";
                                                            echo "<td><input title='" . $allArray[$i]['CheckListItem'] . "' type='text' class='form-control' name='" . $allArray[$i]['CheckListPK'] . "' id='" . $allArray[$i]['CheckListPK'] . "'></td>";
                                                            echo "</tr>";
                                                        }

                                                        if ($allArray[$i]['DataType'] == 'date') {
                                                            echo "<tr>";
                                                            echo "<td>" . $allArray[$i]['CheckListItem'] . "</td>";
                                                            echo "<td><input title='" . $allArray[$i]['CheckListItem'] . "' type='date' class='form-control' name='" . $allArray[$i]['CheckListPK'] . "' id='" . $allArray[$i]['CheckListPK'] . "'></td>";
                                                            echo "</tr>";
                                                        }

                                                        if ($allArray[$i]['DataType'] == 'textarea') {
                                                            echo "<tr>";
                                                            echo "<td>" . $allArray[$i]['CheckListItem'] . "</td>";
                                                            echo "<td><textarea title='" . $allArray[$i]['CheckListItem'] . "' rows='3' class='form-control' name='" . $allArray[$i]['CheckListPK'] . "' id='" . $allArray[$i]['CheckListPK'] . "'></textarea></td>";
                                                            echo "</tr>";
                                                        }


                                                        if ($allArray[$i]['DataType'] == 'dropdown') {
                                                            echo "<tr>";
                                                            echo "<td>" . $allArray[$i]['CheckListItem'] . "</td>";
                                                            echo "<td><select title='" . $allArray[$i]['CheckListItem'] . "'  class='form-control' name='" . $allArray[$i]['CheckListPK'] . "' id='" . $allArray[$i]['CheckListPK'] . "'>";
                                                            echo "<option value=''>Select One</option>";

                                                            $opvalue = $db->getAlistArray($allArray[$i]['pickcode']);

                                                            for ($k = 0; $k < sizeof($opvalue); $k++) {
                                                                echo "<option value='" . $opvalue[$k]['AlistValue'] . "'>" . $opvalue[$k]['AlistValue'] . "</option>";
                                                            }
                                                            echo "</select></td>";
                                                            echo "</tr>";
                                                        }
                                                        if ($allArray[$i]['DataType'] == 'file') {


                                                            echo "<tr>";
                                                            echo "<td>" . $allArray[$i]['CheckListItem'] . "</td>";
                                                            echo "<td><div class='col-md-12 dropzone' title='" . $allArray[$i]['CheckListItem'] . "' id='" . $allArray[$i]['CheckListPK'] . "'  name='" . $allArray[$i]['CheckListPK'] . "'>

                                                                  </div></td>";
                                                            echo "<tr/>";

                                                        }
                                                    }
                                                }
                                                echo "</table>";
                                                echo "</fieldset>";
                                            }

                                            ?>


                                            <p class="text-center clearfix">
                                                <input type="submit" id='saveButton' name='saveButton'
                                                       title="Save Report"
                                                       class="btn btn-olive margin5" onclick='' value='Save'/>

                                                <input type="reset" id='resetButton' name='resetButton'
                                                       title="Reset Report"
                                                       class="btn btn-orange margin5" onClick='' value='Reset'/>
                                            </p>

                                        </div>

                                </form>
                            </div>

                        </div>


                    </div>
                </div>
                <div class="col-sm-12" id="pagefooter">
                    <p>&copy; 2015 SRCM. All Rights Reserved.</p>
                </div>
            </div>


        </div>

</body>
</html>