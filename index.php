
<style>
    .On{
        height: 30%;
        width: 30%;
        background-color: green;

    }
    .off{
        height: 30%;
        width: 30%;
        background-color: red;
    }
    body{
        background-image: url(resources/images/seamless_paper_texture.png);
    }
</style>
<?php
system("gpio mode 0 out");
system("gpio mode 1 out");
system("gpio mode 2 out");
if (isset($_POST['led1On']))
{
    system("gpio write 0 1");
    system.sleep(3);
    system("gpio write 0 0");

    system("gpio write 2 1");
    system.sleep(2);
    system("gpio write 2 0");

    system("gpio write 1 1");
    system.sleep(1);
    system("gpio write 1 0");

}
else if (isset($_POST['led2On']))
{
    $i = 0 ;
    while ( $i < 10) {
        system("gpio write 0 1");
        system.sleep(1);
        system("gpio write 0 0");
        $i++;
    }
    system("gpio write 2 1");
    system.sleep(2);
    system("gpio write 2 0");

    system("gpio write 1 1");
    system.sleep(1);
    system("gpio write 1 0");
}
else if (isset($_POST['led3On']))
{
    system("gpio write 0 1");
    system.sleep(1);
    system("gpio write 2 1");
    system.sleep(1);
    system("gpio write 0 0");
    system.sleep(2);
    system("gpio write 1 1");
    system.sleep(1);
    system("gpio write 2 0");
    system.sleep(1);
    system("gpio write 1 0");
}
else if (isset($_POST['led1Off']))
{
    system("gpio write 0 0");
}
else if (isset($_POST['led2Off']))
{
    system("gpio write 1 0");
}
else if (isset($_POST['led3Off']))
{
    system("gpio write 2 0");
}
?>
<html>
<head>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="js/angular.min.js"></script>
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

<ul ng-controller="cocktailController">
    <li ng-repeat="cocktail in cocktails">
        <p>{{cocktail.ingredients}}</p>
    </li>
</ul>
</body>
</html>