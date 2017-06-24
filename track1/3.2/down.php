<?php
$file = $_GET['file'];
$path = $_GET['path'];
$local_path = '/var/www/html/data/' . $path . '/';
$downFile = $local_path . $file;

if (file_exists($downFile )) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($downFile ).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($downFile ));
    readfile($downFile );
    exit;
} else {
    die('Error: The file ' . $file . ' does not exits!');
}
?>
