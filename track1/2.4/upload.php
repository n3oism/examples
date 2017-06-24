<?php
$uploaddir = './uploads/';
$uploadfile = $uploaddir . basename($_FILES['fileToUpload']['name']);

// 블랙리스트 필터링 코드
$file_ext = array('php');
$ext = array_pop(explode('.', $uploadfile));

// 확장자 확인
if( in_array($ext, $file_ext) ) {
  echo 'Upload Error :<br><b>' . $ext . ‘</b> File extension is not allowed.';
  exit;
}

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
