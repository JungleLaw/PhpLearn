<html>
<?php
function sayHello($who)
{
    echo $who . ",Hello!";
}

function printBr($txt)
{
    echo $txt . "<br/>";
}

?>
<?php
/**
 * Created by PhpStorm.
 * User: Law
 * Date: 2017/4/23
 * Time: 2:47
 */
$number = -321;
$number_new = abs($number);
echo $number_new;
echo "</br>";
echo sayHello("PHP");
echo "</br>";
printBr("asd");
echo function_exists(printBr);
?>
</html>
