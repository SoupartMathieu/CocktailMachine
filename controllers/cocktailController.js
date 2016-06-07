var app = angular.module('cocktailMachine', []);
app.controller('cocktailController', function ($scope, $http) {

    $scope.cocktails = [
        {
            'name':'ti-punch',
            'ingredients': [{
                'rhum': 4,
                'lemonJuice': 1,
                'canneSugar' : 0.5}],
            'image':'resources/images/tiPunch.jpg'
        },

        {
            'name': 'margarita',
            'ingredients': [{
                'tequila': 4,
                'lemonJuice': 1,
                'cointreau' : 2}],
            'image':'resources/images/margarita.jpg'

        },

        {
            'name': 'planteur',
            'ingredients':[{
                 'rhum': 4,
                 'orangeJuice': 8,
                 'grenadine' : 1}],
            'image':'resources/images/punch-planteur.jpg'

        }

    ];
    var publishSocket = new WebSocket("ws://192.168.1.19:1880/test");

    $scope.boutClic = function() {
        d = new Date();
        var data = {
            msg: "lalalala",
            timestamp: d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds()
        };
        publishSocket.send(JSON.stringify(data)); // Send the msg object as a JSON-formatted string.
    }


        /*  $http({
         method: 'GET',
         url: 'http://192.168.1.19:1880/test',
         headers: {
         'value': 4
         }
         }).
         success(function(data, status, headers, config) {
         }).
         error(function(data, status, headers, config) {
         // called asynchronously if an error occurs
         // or server returns response with an error status.
         });

         */
         // Only if return key pressed
        // Construct object containing the data the server needs.


});
