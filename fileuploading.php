<?php

if (isset($_POST['submit'])) {
    $file = $_FILES['photo'];
    $type = ["image/jpeg", "image/png", "image/gif"];

    if (($file['size'] < 102400) && in_array($file['type'], $type)) {

        if (move_uploaded_file($file['tmp_name'], "photo/" . $file['name'])) {
            echo "File uploaded successfully!";
        } else {
            echo "Error uploading file.";
        }

    } else {
        echo "File size should be less than 100KB and file type should be JPEG, PNG or GIF.";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>

<body>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" 
          method="post" 
          enctype="multipart/form-data">

        <label for="photo">Choose a file to upload:</label>

        <input type="file" name="photo" id="photo">
        <br><br>

        <input type="submit" value="Upload File" name="submit">

    </form>

</body>
</html>
