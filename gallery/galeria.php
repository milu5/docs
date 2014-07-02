<?php

if ($handle = opendir('uploads')) {
	$filesarray = array();
    while (false !== ($file = readdir($handle))) {
        if(substr(strtolower($file), -4) == ".jpg") {
        	$title = preg_replace('/(\w+).jpg/i', '$1', $file); 
        	array_push($filesarray, "<img src=\"uploads/". $title .".jpg\" title=\"". $title ."\">");
        } 
    }

    closedir($handle);

    sort($filesarray); 

	foreach($filesarray as $value) {
		echo ($value);
	}
    
}

?>