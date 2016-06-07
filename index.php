<?php
system("gpio mode 0 out");
system("gpio mode 1 out");
system("gpio mode 2 out");

?>
<html>
<head>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <script type="text/javascript" src="js/angular.min.js"></script>
    <script type="text/javascript" src="controllers/cocktailController.js"></script>
    <script src="js/npm.js"></script>
</head>
<body ng-app="cocktailMachine">
<header>
    <nav class="navbar navbar-inverse">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse">
                <span class="sr-only">Toggle navigation</span>
            </button>
        </div>
        <a class="navbar-brand" href="#">Cocktail Machine</a>
    </nav>
</header>


<div class="container cocktailCreation" ng-controller="createCocktailController">

    <label> Choisissez le nombre d'ingrédient voulu:</label>
    <input value="{{nbreIngredients}}" >

    <select ng-repeat="nbreIngredients">
        <option value="rhum" disabled="disabled" selected="selected"></option>
        <option value="tequila">One</option>
        <option value="cointreau">Two</option>
    </select>
</div>

<div class="container cocktailContainer" ng-controller="cocktailController">


    {{cocktails[1].ingredients.get(1)}}
    <div ng-repeat="cocktail in cocktails" class="cocktail-display">
        <div class="container-fluid">
            <h3> {{cocktail.name}}</h3>
            <div class="cocktail-image">
                <img class="img-rounded" src="{{cocktail.image}}">
            </div>
            <div >
                <div ng-repeat="ingredient in cocktail.ingredients" class="cocktail-description">
                    <p ng-repeat="(key,value) in ingredient">{{key}} : {{ value }}

                </div>
               <!-- <form method="post" action="submit.php">
                     <input  name="{{cocktail.name}}" class="btn btn-default" type="submit" value="Creer le cocktail" >
                </form> -->
                <button ng-click="boutClic(cocktail)" >
                    Créer le cocktail
                </button>
            </div>
     </div>

        </div>



</body>
</html>