<?php
/**
 * Created by PhpStorm.
 * User: HTCINDIA\poovarasanv
 * Date: 24/5/16
 * Time: 11:05 AM
 */

session_start();

if (isset($_SESSION['gasadmin'])) {
    header('Location:dashboard.php');
}
?>
<?php include "template/header.php" ?>
<md-toolbar class="md-whiteframe-3dp">
    <div class="md-toolbar-tools">
        <h2>
            <span>Global Archive Admin Console</span>
        </h2>
    </div>
</md-toolbar>

<div class="col-md-12" style="margin-top: 10% !important;">
    <div class="col-md-4 col-md-offset-4" ng-controller="logincontroller">
        <md-card style="padding: 20px !important;">
            <md-card-content>
                <div class="alert alert-danger" ng-hide="true">
                    <strong>Success!</strong> Indicates a successful or positive action.
                </div>
                <label for="username">
                    Username
                </label>
                <input type="text" ng-model="username" class="form-control" name="username" required>

                <br/>
                <label for="password">
                    Password
                </label>
                <input type="password" ng-model="password" class="form-control" name="password" required>

                <br/>
                <div>
                    <md-button class="md-raised md-primary pull-right" ng-click="login()">Login</md-button>
                </div>
            </md-card-content>
        </md-card>
    </div>
</div>

<?php include "template/footer.php" ?>
