<?php if (isset($_SESSION['gasadmin'])) {
    header('Location:index.php');
} ?>
<?php include "template/header.php" ?>
    <md-toolbar class="md-whiteframe-3dp">
        <div class="md-toolbar-tools">
            <h2>
                <span>Global Archive Admin Console</span>
            </h2>
        </div>
    </md-toolbar>

    <div class="col-md-12" style="margin-top: 0px !important;padding: 0;">
        <div class="col-md-2" style="height: 93.5% !important;background: #ffffff;padding: 0; overflow-y: auto;">
            <?php include 'sidemenu.php' ?>
        </div>
        <div class="col-md-10" style="height: 93.5% !important; overflow-y: auto;" ng-controller="console">
            <md-card style="">
                <md-card-content>
                    <div class="col-md-12">
                        <div>
                            <md-icon class="zmdi zmdi-hc-2x zmdi-apps"></md-icon>
                            &nbsp;&nbsp;&nbsp;Query Console

                            <md-button class="md-icon-button pull-right" aria-label="More" ng-click="execute()">
                                <md-icon class="zmdi zmdi-play zmdi-hc-2x "></md-icon>
                            </md-button>

                        </div>
                    </div>
                </md-card-content>
            </md-card>

            <md-card>
                <md-card-content>
                    <textarea rows="10"  style="width: 100%;" id="console">

                    </textarea>
                </md-card-content>
            </md-card>

        </div>

    </div>
<?php include "template/footer.php" ?>