<html>
<body><form action="oop.php" method="post"/>
<?php
echo "<table style = \"border: 1px solid #000;text-align:center; \">\n";
echo "<tr>";
echo "<td colspan='3' style='text-align: center'>";
echo "Hello world from php";
echo "</td>";
echo "</tr>\n";
echo "<tr>\n";
echo "<td style='border: 1px solid #000;text-align: center'>1</td>\n";
echo "<td style='border: 1px solid #000;text-align: center'>2</td>\n";
echo "<td style='border: 1px solid #000;text-align: center'>3</td>\n";
echo "</tr>\n";
echo "</table>\n"
?>

<?php
/**
 * Created by PhpStorm.
 * User: Law
 * Date: 2017/4/23
 * Time: 0:34
 */
echo "<table style=\"border: 1px solid #000\">";
for ($indexi = 1; $indexi < 10; $indexi++) {
    echo "<tr>\n";
    for ($indexj = 1; $indexj < 10; $indexj++) {
        echo "<td style=\"border: 1px solid #000;width:25px;height:25px;text-align:center;\">";
        echo($indexi * $indexj);
        echo "</td>\n";
    }
    echo "</tr>\n";
}
echo "</table>";
?>

</body>
</html>
