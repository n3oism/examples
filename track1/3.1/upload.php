<?php
$uploaddir = '/var/www/uploads/';
$uploadfile = $uploaddir . basename($_FILES['fileToUpload']['name']);

echo '<pre>';
if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $uploadfile)) {
   echo "Valid File, File uploaded successfully.\n";
} else {
   print "Possible file upload attack!\n";
}

print "Debugging information:\n";
print_r($_FILES);

print "</pre>";
?>
