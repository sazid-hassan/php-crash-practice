<?php

echo"for loop </br></br>";

for ($i = 1; $i <= 10; $i++) {
    echo "5 * $i = ". $i * 5 . "</br>";
}


echo"</br>forEach loop </br> </br>";
$fruits = ["banana", "mango", "apple"];

foreach ($fruits as $i) {
    echo "". $i ."</br>";
}
?>