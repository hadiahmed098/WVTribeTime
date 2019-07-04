<?php

function lookup($tName="Quiet Study")
{
    $file = fopen("Locations.txt","r") or die("Oops, fatal error occured!\nError:LOC_FILE_GONE");
    while(!feof($file)) {
        $tmp = fgets($file);
        $locInfo = explode(":",$tmp);
        if($locInfo[0] == $tName)
        {
            return $locInfo[1];
        }
    }
    
    return "";
}

?>