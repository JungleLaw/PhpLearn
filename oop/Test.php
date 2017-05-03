<html>
<header>
    <title>Test</title>
</header>
<body>

<?php
/**
 * Created by PhpStorm.
 * User: Law
 * Date: 2017/4/23
 * Time: 16:52
 */
include "User.php";
$user = new User();
$user->setName("user");
$user->setId(123);
$user->setAccount("a");

echo $user->__toString() . "</br>";

?>

</body>
</html>