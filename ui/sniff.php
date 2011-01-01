<?php
if (empty($_GET['path'])) {
    die('Insufficient parameters.');
}


include 'config.php';
include 'scripts/utils.php';
$root = $_GET['path'];
$cscommand = CS_PATH;
$os = php_uname('s');

$root = str_replace('/', DS, $root);
$root = str_replace('\\', DS, $root);

if (!is_dir($root)) {
    die($root . ' is not a valid directory.');
}

$files = searchFor('php', $root);
for ($i = 0, $count = count($files); $i < $count; $i++) {
    $output = shell_exec($cscommand . ' ' . $files[$i]);
    echo '<pre>', $output, '</pre>';
}