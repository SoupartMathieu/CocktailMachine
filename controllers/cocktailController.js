var app = angular.module('cocktailMachine', []);
app.controller('cocktailController', function ($scope) {

    $scope.cocktails = [
        {
            'name':'ti-punch',
            'ingredients': {
                'rhum': 4,
                'lemonJuice': 1,
                'canneSugar' : 0.5},
            'image':'resources/images/tiPunch.jpg'
        },

        {
            'name': 'margarita',
            'ingredients': {
                'tequila': 4,
                'lemonJuice': 1,
                'cointreau' : 2},
            'image':'resources/images/margarita.jpg'

        },

        {
            'name': 'planteur',
            'ingredients':{
                 'rhum': 4,
                 'orangeJuice': 8,
                 'grenadine' : 1},
            'image':'resources/images/punch-planteur.jpg'

        }
    ];
});