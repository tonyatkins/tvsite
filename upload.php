<?php
$target_dir = "upload/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "<p style='text-align:center; font-family:Arial; padding:20px;'>The file <strong>" 
         . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) 
         . "</strong> has been uploaded successfully.<br><br><a href='upload.html'>Upload another file</a></p>";
} else {
    echo "<p style='text-align:center; font-family:Arial; color:red; padding:20px;'>Sorry, there was an error uploading your file.<br><br><a href='index.html'>Try again</a></p>";
}
?>

