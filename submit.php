
<?php


if(isset($_POST['ti-punch']))
{
    echo "<script>alert('tipunch');</script>";
    system("gpio write 0 1");
    sleep(3);
    system("gpio write 0 0");

    system("gpio write 2 1");
    sleep(2);
    system("gpio write 2 0");

    system("gpio write 1 1");
    sleep(1);
    system("gpio write 1 0");
}else
{
    echo "<script>alert('margarita');</script>";
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

echo "<script type='text/javascript'>document.location.replace('index.php');</script>";

?>