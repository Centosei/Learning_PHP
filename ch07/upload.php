<?php
echo <<<_END
<html><head><title>PHP form Upload</title></head><body>
<form method='post' action='upload.php' enctype='multipart/form-data'>
Select File: <input type='file' name='filename' size='10'>
<input type='submit' value='Upload'>
</form>
_END;

if ($_FILES) {
    $name = $_FILES['filename']['name'];
    move_uploaded_file($_FILES['filename']['tmp_name'], "img/" . $name);
    echo "Uploaded image '$name'<br><img src='img/$name'>";
}

echo "</body></html>";
