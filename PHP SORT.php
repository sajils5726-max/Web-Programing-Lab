<?php
echo "Sorting array<br/>";
echo "=============<br/>";

$stud = array("Nidhi", "Sreelekshmi", "Agna", "Riya", "Christy");

echo "Displaying array using print_r():<br/>";
print_r($stud);

echo "<br><br>Array in ascending order:<br/>";
asort($stud);
print_r($stud);

echo "<br><br>Array in descending order:<br/>";
arsort($stud);
print_r($stud);
?>
