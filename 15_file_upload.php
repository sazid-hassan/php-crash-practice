<?php
if (isset($_POST["submit"])) {

    $allowed_formats = array('png', 'jpg', 'jpeg');
    if (!empty($_FILES['upload']['name'])) {
        // print_r($_FILES);
        $file_name = $_FILES['upload']['name'];
        $file_tmp = $_FILES['upload']['tmp_name'];
        $file_format = explode('.', $file_name);
        $file_format = end($file_format);
        $target_dir = 'uploads/' . $file_name;

        echo $file_tmp;

        if (!in_array($file_format, $allowed_formats)) {
            echo 'File Format Not Supported';
        } else {
            move_uploaded_file($file_tmp, $target_dir);
            echo '<p style="color: green;">File uploaded!</p>';
        }
    } else {
        $message = '<p>Please Choose A File</p>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php echo $message ?? null; ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
        <label>Upload file</label>
        <input type="file" name="upload" />
        <input type="submit" value="Submit" name="submit" />
    </form>
</body>

</html>