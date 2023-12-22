<?php
$names = array("Xavier", "Don", "Ajay", "Babu", "Sreya");
echo "<b>Normal Array: </b><br>";
print_r($names);
echo "<br><br><b>Ascending Sort: </b><br>";
asort($names);
print_r($names);
echo "<br><br> <b>Descending Sort: </b><br>";
arsort($names);
print_r($names);
?>