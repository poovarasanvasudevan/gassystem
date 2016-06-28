<?php
session_start();
if (isset($_SESSION['artefactUser'])) {
    header("Location : ./screens/dashboard/dashboard.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="icon"
          type="image/png"
          href="../../images/logo.png"/>

    <LINK REL="SHORTCUT ICON"
          HREF="../../images/logo.png">


    <title>Global Archive</title>
    <!-- Bootstrap -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/custom.css" rel="stylesheet"/>
    <link href="../../css/jquery.dataTables.min.css"/>


    <script type="text/javascript" src="../../js/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="../../js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="../../js/bootstrap.js"></script>
    <link href="../../tree/skin-lion/ui.fancytree.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="../../js/jquery-ui.css">
    <link rel="stylesheet" href="../../css/pace.css">
    <script data-pace-options='{ "ajax": true }' src="../../js/pace.js"></script>
    <script src="../../js/layout.js"></script>


    <link rel="stylesheet" href="../../css/font-awesome.min.css">
    <link rel="stylesheet" href="../../css/jquery.growl.css">
    <script src="../../js/jquery.growl.js"></script>

    <script src="../../js/bootbox.min.js"></script>

    <script>
        $(function () {
            $('#loginForm').submit(function () {
                var password = $('#newPassword').val();
                var repassword = $('#repeatPassword').val();

                if (password == repassword) {
                    $(this).submit();
                } else {
                    alert('Re Enter passwordd should Match new Password')
                    return false;
                }
            });
        })

    </script>
</head>
<body class="loginBody">
<div class="wrapper">
    <div class="container">

        <div class="row">

            <div class="col-sm-10" style="padding-left: 0px;">
                <div class="logintxt">Global Archives</div>
            </div>
        </div>


        <div class="login_bg row">
            <div class="sticky-logo"><img alt="" width="85" height="100" src="images/loginimage.png"/ ></div>
            <div class="loginForm">
                <div class="col-lg-8 col-md-offset-3 col-sm-8 form-content">
                    <form class="form-signin" id="loginForm" name="loginForm" method="post"
                          action="./changePassword.php">
                        <label for="inputEmail" class="col-lg-4 col-sm-4 uname">New Password:</label>

                        <div class="col-md-8 col-sm-8">
                            <input type="password" autofocus="" placeholder="Enter New Password" name="password"
                                   title="Enter New Password" class="form-control" id="newPassword"
                                   required="required" maxlength="10">

                        </div>
                        <input type="hidden" name="user" value="<?php echo $_SESSION['artefactUser'] ?>"/>

                        <br/>
                        <label for="inputPassword" class="col-lg-4 col-sm-4 upass" style="margin-top: 20px;">Re Enter
                            Password:</label>

                        <div class="col-md-8 col-sm-8" style="margin-top: 20px;">
                            <input type="password" name="newpassword" title="Please reenter New password"
                                   class="form-control" id="repeatPassword" required="required" maxlength="10">

                        </div>

                        <div class="col-md-8 col-md-offset-4" style="text-align:left;padding-left: 30px;">
                            <button type="submit" class="btn btn-lg btn-primary col-md-offset-3 col-md-9 col-sm-9"
                                    title='Change Password to Global Archives'>Change Password
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="row row col-sm-12" id="pagefooter">
            <p>&copy; 2015 SRCM. All Rights Reserved.</p>
        </div>
    </div>
</div>
</body>
</html>