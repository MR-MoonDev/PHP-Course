<?php
if (isset($_FILES['image'])) {
    echo "<pre>";
    print_r($_FILES);
    echo "</pre>";

    $img_name = $_FILES['image']['name'];
    $img_size = $_FILES['image']['size'];
    $img_tmp_name = $_FILES['image']['tmp_name'];

    echo "Name: $img_name<br>";
    echo "Size: $img_size<br>";
    echo "Temp Path: $img_tmp_name<br>";

    $upload_path = "upload-images/";

    // ✅ Create folder if it doesn't exist
    if (!is_dir($upload_path)) {
        mkdir($upload_path, 0777, true);
    }


    // ✅ Move file and confirm
    if (move_uploaded_file($img_tmp_name, $upload_path . $img_name)) {
        echo "<p style='color:green;'>✅ File uploaded successfully!</p>";
    } else {
        echo "<p style='color:red;'>❌ Failed to upload file.</p>";
    }
}
?>
