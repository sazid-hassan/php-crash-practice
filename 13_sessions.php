<?php
session_start();

if (isset($_POST['submit'])) {
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
    $password = $_POST["password"];

    if ($username == "admin" && $password == "admin") {
        $_SESSION["username"] = $username;
        header("Location: /php-crash/extras/dashboard.php");
    } else {
        echo "Incorrect login";
    }
}
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <div>
        <label for="username">User Name </label>
        <input type="text" name="username" required />
    </div>
    <div>
        <label for="password">Password </label>
        <input type="password" name="password" required />
    </div>

    <div>
        <input type="submit" value="Submit" name="submit" />
    </div>
</form>
