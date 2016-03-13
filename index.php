
<html>
<head>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <script type="text/javascript" src="js/angular.min.js"></script>
    <script type="text/javascript" src="controllers/cocktailController.js"></script>
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
<form method="post">
    <p>
        <button name="led1On" class="btn btn-default">Sequence 1</button>
        <button name="led2On" class="btn btn-default">Sequence 2</button>
        <button name="led3On" class="btn btn-default">Sequence 3</button>
    </p>
    <p>
        <button name="led1Off" class="btn btn-danger">Led 1 Off</button>
        <button name="led2Off" class="btn btn-danger">Led 2 Off</button>
        <button name="led3Off" class="btn btn-danger">Led 3 Off</button>
    </p>
</form>
<div ng-controller="cocktailController">
    <ul>
        <li ng-repeat="cocktail in cocktails">
            <div class="container-fluid cocktail-display">
                <img class="img-rounded" src="{{cocktail.image}}">
                <p>{{cocktail.ingredients}} </p>
                <p>{{cocktail.ingredients}}</p>
                <p>{{cocktail.ingredients}} </p>
                <form action="phpScripts/test.php" method="post">
                    <button name="led1On" class="btn btn-default" type="button" ng-click="make(cocktail)">Sequence 1</button>
                </form>
            </div>
        </li>
    </ul>
</div>
</body>
</html>