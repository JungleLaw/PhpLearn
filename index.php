<html>
<header>
    <title>My first Php!</title>
</header>
<body>
<p>
<div><h1>Jungle</h1></div>
</p>
<h1><?php
    /**
     * Created by PhpStorm.
     * User: Law
     * Date: 2017/4/22
     * Time: 7:35
     */
    echo "Hello World from PHP!";
    ?></h1>
<p>
<h1>
    <?php $name = "name";
    echo "name = " . $name;
    ?>
</h1>
<h1>
    <?php $password = "passwor2d";
    echo "password = " . $password;
    echo "</br>";
    echo $name;
    echo "</br>";
    echo is_string($password);
    ?>
</h1>
</p>
<p>
    <?php
    $mood = 10;
    switch ($mood) {
        case 0:
            echo 1;
            break;
        case 1:
            echo 2;
            break;
        case 2:
            echo 3;
            break;
        case 3:
            echo 4;
            break;
        default:
            echo "default.$mood";
            break;
    }
    ?>
</p>
<p>
    <?php
    $count = 0;
    echo "while block</br>";
    while ($count < 10) {
        echo $count . "</br>";
        $count++;
    }
    echo "for block</br>";
    for ($counter = 1; $counter < 100; $counter++) {
        $temp = 4000 / $counter;
        echo "4000 divider by " . $counter . " is..." . $temp . "</br>";
    }
    ?>
</p>
</body>
</html>



