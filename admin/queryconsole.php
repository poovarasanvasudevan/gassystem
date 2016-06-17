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
        <div class="col-md-10" style="height: 93.5% !important; overflow-y: auto;">
            <md-card style="">
                <md-card-content>
                    <div class="col-md-12">
                        <div>
                            <md-icon class="zmdi zmdi-hc-2x zmdi-apps"></md-icon>
                            &nbsp;&nbsp;&nbsp;Query Console
                        </div>
                    </div>
                </md-card-content>
            </md-card>

        </div>

    </div>
<?php include "template/footer.php" ?>