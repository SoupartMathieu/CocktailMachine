var app = angular.module('cocktailMachine', []);
app.controller('cocktailController', function ($scope) {

    $scope.cocktails = [
        {'ti-punch':{
            'rhum': 4,
            'lemonJuice': 1,
            'canneSugar' : 0.5
        }},
        {'margarita': {
            'rhum': 3,
            'lemonJuice': 1,
            'canneSugar' : 0.5
        }},
        {'planteur':{
            'rhum': 2,
            'orangeJuice': 8,
            'canneSugar' : 0.5}
        }
    ];
});