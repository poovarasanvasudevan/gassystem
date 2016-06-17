<div style="margin: 0;" ng-controller="sidemenucontroller">
    <md-list>
        <md-list-item ng-click="navigateTo(setting.url, $event)" ng-repeat="setting in sidemenus">
            <md-icon class="zmdi zmdi-hc-2x {{setting.icon}}"></md-icon>
            <p> {{ setting.name }} </p>
        </md-list-item>
    </md-list>
</div>