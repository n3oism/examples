<?php
$_fileID = $_GET['fileId'];

$link   = mysql_connect('localhost', 'root', 'root');
mysql_select_db('test', $link);
$sql    = 'SELECT * FROM upload WHERE fid=' . $_fileID;
$result = mysql_query($sql, $link);
list($fid,$file,$path,$content) = mysql_fetch_array($result);

if (!empty($content)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'. $file . '"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . strlen($content));
    echo($content);
    exit;
} else {
    die('Error: The file ' . $file . ' does not exits!');
}
?>
