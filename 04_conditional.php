<?php

$age = 18;

if ($age >= 18) {
    echo"You can vote";
}

$t = date("H");

echo "$t";
echo "</br>";

$posts = ["Hello World", "No Php"];

if(empty($posts)) {
    echo "No Posts";
} else {
    foreach ($posts as $post) {
        echo "$post";
        echo"</br>";
    }
}

?>