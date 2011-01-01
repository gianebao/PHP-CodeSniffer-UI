<?php
function searchFor($ext, $folder) {
    if (!is_dir($folder)) {
        return strtolower($ext) == strtolower(substr(strrchr($folder, '.'), 1))? $folder: false;
    }
    
    if ($dh = opendir($folder)) {
        $result = array();
        while (($file = readdir($dh)) !== false) {
            if ($file == '.' || $file == '..') {
                continue;
            }
            $tmp = searchFor($ext, $folder . (DS == substr($folder, -1) ? '': DS) . $file);
            if (is_array($tmp)) {
                $result = array_merge($result, $tmp);
            } elseif (!empty($tmp)) {
                $result[] = $tmp;
            }
        }
        closedir($dh);
        return $result;
        
    } else {
        return false;
    }
}