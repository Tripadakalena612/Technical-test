<?php
$name1 = "anna";
echo '<br> Input String '. $name1;

$reverse = strrev($name1);
echo '<br> Ouput String '. $reverse;

if($name1 == $reverse) {
echo '<br> '.$name1.'true';
}
else {
echo '<br>'.$name1.'false';
}
$name2 = "india";
echo '<br> Input String '. $name2;

$reverse = strrev($name2);
echo '<br> Ouput String '. $reverse;

if($name2 == $reverse) {
echo '<br> '.$name2.'true';
}
else {
echo '<br>'.$name2.'false';
}

?>