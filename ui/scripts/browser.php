<?php
include 'config.php';

$root = empty($_GET['root']) ? ROOT_DEFAULT: $_GET['root'];

if (!is_dir($root)) {
    die($root . ' is not a valid directory.');
}

if ($dh = opendir($root)) {
    $root .= ('\\' == substr($root, -1) || '/' == substr($root, -1)) ? '': DS;
    
    $tree = array();
    while (($file = readdir($dh)) !== false) {
        $isDir = is_dir($root . $file);
        $entry = array(
            'type' => $isDir ? 'directory': 'file',
            'name' => $file
        );
        
        switch ($file) {
        case '.':
            $entry['path'] = $root;
            break;
        case '..':
            $entry['path'] = dirname($root);
            break;
        default: 
            $entry['path'] = $isDir ? $root . $file . DS: $root;
        }
        
        $tree[] = $entry;
    }
    closedir($dh);
    
} else {
    die($root . ' cannot be opened.');
}
