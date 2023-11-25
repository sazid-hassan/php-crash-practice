<?php
function inverse($x)
{

    if (!$x) {
        throw new Exception("Invalid value");
    }

    return 1 / $x;
}


try {
    echo inverse(0);
} catch (Exception $e) {
    echo $e->getMessage();
}
?>