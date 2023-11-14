<?php

if (isset($_POST['submit'])) {
    $Name = htmlspecialchars ($_POST['name']);
    $Desc = filter_input(INPUT_POST,'desc', FILTER_SANITIZE_SPECIAL_CHARS);
    echo $Name . "</br>";
    echo $_POST['age'] . "</br>";
    echo $Desc. "</br>";
}
?>


<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<div>
    <label for="name" >Name </label>
    <input type="text" name="name" />
</div>
<div>
        <label for="age" >Age </label>
    <input type="number" name="age" />
</div>
<div>
        <label for="desc" >Description </label>
    <input type="text" name="desc" />
</div>

<div>
    <input type="submit" value="Submit" name="submit" />
</div>
</form>