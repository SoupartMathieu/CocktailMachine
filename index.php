
<style>
    .On{
        height: 100px;
        width: 100px;
    }
    .off{
        height: 100px;
        width: 100px;
    }
</style>
<?php
system("gpio mode 0 out");
system("gpio mode 1 out");
system("gpio mode 2 out");
if (isset($_POST['led1On']))
{
    system("gpio write 0 1");
}
else if (isset($_POST['led2On']))
{
    system("gpio write 1 1");
}
else if (isset($_POST['led3On']))
{
    system("gpio write 2 1");
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
<body>
<form method="post">
    <p>
        <button name="led1On" class="On">Led 1 On</button>
        <button name="led2On" class="On">Led 2 On</button>
        <button name="led3on" class="On">Led 3 On</button>
    </p>
    <p>
        <button name="led1off" class="Off">Led 1 Off</button>
        <button name="led2off" class="Off">Led 2 Off</button>
        <button name="led3off" class="Off">Led 3 Off</button>
    </p>
</form>
</body>
</html>