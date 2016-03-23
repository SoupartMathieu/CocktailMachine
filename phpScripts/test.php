<?php
echo "hbjbgjio";
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
    sleep(1);
    system("gpio write 2 1");
    sleep(1);
    system("gpio write 0 0");
    sleep(2);
    system("gpio write 1 1");
    sleep(1);
    system("gpio write 2 0");
    sleep(1);
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

function makeCocktail($cocktail){
    if ($cocktail.name == 'tiPunch'){
        system("gpio write 0 1");
        system.sleep($cocktail.rhum);
        system("gpio write 0 0");

        system("gpio write 1 1");
        system.sleep($cocktail.lemonJuice);
        system("gpio write 1 0");

        system("gpio write 2 1");
        system.sleep($cocktail.canneSugar);
        system("gpio write 2 0");
    }
    else if ($cocktail.name == 'margarita'){
        system("gpio write 3 1");
        system.sleep($cocktail.tequila);
        system("gpio write 3 0");

        system("gpio write 1 1");
        system.sleep($cocktail.lemonJuice);
        system("gpio write 1 0");

        system("gpio write 4 1");
        system.sleep($cocktail.cointreau);
        system("gpio write 4 0");
    }
    else if ($cocktail.name == 'planteur'){
        system("gpio write 0 1");
        system.sleep($cocktail.rhum);
        system("gpio write 0 0");

        system("gpio write 5 1");
        system.sleep($cocktail.orangeJuice);
        system("gpio write 5 0");

        system("gpio write 6 1");
        system.sleep($cocktail.grenadine);
        system("gpio write 6 0");
    }
}

?>


