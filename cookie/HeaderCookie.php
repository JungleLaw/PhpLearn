<?php
//setcookie("vegetable", "artichoke"
//    , time() + 3600, "/"
//    , "localhost:63342", 1
//    , 1);
header("Set-Cookie:vegetable=artichoke;expires=" . (time() + 3600) . ";path=/;domain=localhost");
?>
<html>
<header>
    <title>Header Cookie</title>
</header>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: Law
 * Date: 2017/5/1
 * Time: 22:05
 */

if (isset($_COOKIE['vegetable'])) {
    echo "<p>Hello again!</p>";
} else {
    echo "<p>First visit!</p>";
}

echo $_SERVER['HTTP_COOKIE'] . "</br>";
echo getenv('HTTP_COOKIE') . "</br>";
echo $_COOKIE['vegetable'] . "</br>";
?>
</body>
</html>