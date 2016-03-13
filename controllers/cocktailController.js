var app = angular.module('cocktailMachine', []);
app.controller('cocktailController', function ($scope) {

    $scope.cocktails = [
        {'name':'ti-punch',

            ingredients: {
                'rhum': 4,
                'lemonJuice': 1,
                'canneSugar' : 0.5
        }},

        {'name': 'margarita',
            ingredients: {
                'rhum': 3,
                'lemonJuice': 1,
                'canneSugar' : 0.5
        }},

        {'name': 'planteur',
            ingredients:{
            'rhum': 2,
            'orangeJuice': 8,
            'canneSugar' : 0.5}
        }
    ];
});