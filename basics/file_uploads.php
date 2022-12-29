<?php

$message = '';

if (isset($_POST['submit'])) {

    //Check if file is submitted
    if (!empty($_FILES['upload']['name'])) {

        $allowed_types = ['png', 'jpg', 'jpeg', 'gif'];

        $file_name = $_FILES['upload']['name'];
        $file_temp = $_FILES['upload']['tmp_name'];
        $file_size = $_FILES['upload']['size'];

        //get file extension
        $file_ext = strtolower($file_name);
        $file_ext = explode('.', $file_ext);
        $file_ext = end($file_ext);

        //check if file is an image
        if (in_array($file_ext, $allowed_types)) {
            //Check file size
            if ($file_size < 1000000) {
                $target_dir = "../uploads/$file_name";

                move_uploaded_file($file_temp, $target_dir);
                $message = '<p style="color:green;">File uploaded succesfully</p>';
            } else {
                $message = '<p style="color:red;">File is too large</p>';
            }
        } else {
            $message = '<p style="color:red;">Uploaded is NOT an image</p>';
        }
    } else {
        $message = '<p style="color:red;">No file submitted</p>';
    }
}


?>


<html>

<head>
    <title>File Uploads</title>
</head>

<body>
    <h1>Upload an Image file</h1>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data">
        <div>
            <input type="file" name="upload" />
        </div>
        <div style="margin:8px 0;">
            <input type="submit" value="Submit" name="submit" />
        </div>
    </form>
    <div>
        <?php echo $message; ?>
    </div>
</body>

</html>