/**
 * Created by HTCINDIA\poovarasanv on 24/5/16.
 */

var app = angular.module("globalapp", ['ngMaterial'])
    .config(function ($mdThemingProvider) {
        $mdThemingProvider.theme('default')
            .primaryPalette('blue')
            .accentPalette('orange');
    });
app.controller("globalcontroller", function ($scope) {

});
app.controller("logincontroller", function ($scope, $http, $window) {

    $scope.login = function () {


        url = "./logics/login.php?username=" + $scope.username + "&password=" + $scope.password;
        $http.get(url).success(function (data) {
            if (data.result) {
                $window.location.href = './dashboard.php';
            }
        }).error(function (data) {

        })

    }
});

app.controller('sidemenucontroller', function ($scope) {

    $scope.sidemenus = [
        {name: 'Artefact', icon: 'zmdi-book-image', url: 'dashboard.php'},
        {name: 'Attributes', icon: 'zmdi-grid', url: 'dashboard.php'},
        {name: 'Conditional Reports', icon: 'zmdi-pages', url: 'dashboard.php'},
        {name: 'Users', icon: 'zmdi-account', url: 'dashboard.php'},
        {name: 'Roles', icon: 'zmdi-account-circle', url: 'dashboard.php'},
        {name: 'Query Console', icon: 'zmdi-settings-square', url: 'queryconsole.php'},
    ];

    $scope.navigateTo = function (to, event) {
        window.location.href = './' + to;
    };
})