<?php

function loadFiles($path)
{
    $files = array();
    if ($handle = opendir($path)) {

        /* This is the correct way to loop over the directory. */
        while (false !== ($entry = readdir($handle))) {
            if($entry != "." && $entry != "..")
            $files[] = $path."//".$entry;
        }


        closedir($handle);
    }
    return $files;
}

//Load tat ca ten file hinh anh trong thu muc
$listUri = loadFiles("./images");
//rsort($listUri);
//tra ve danh sach cac url
echo implode(",", $listUri);


ob_flush(); flush();

?>