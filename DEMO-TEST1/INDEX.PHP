<?php
//--- get all the directories
$dirname = 'MODULER/';
$findme  = "CONFIG.php";
$dirs    = glob($dirname.'*', GLOB_ONLYDIR);
$files   = array();
//--- search through each folder for the file
//--- append results to $files
foreach( $dirs as $d ) {
    $f = glob( $d .'/'. $findme );
    if( count( $f ) ) {
        $files = array_merge( $files, $f );
    }
}
if( count($files) ) {
    foreach( $files as $f ) {
        echo "<br>";
$subdirname = str_replace('/CONFIG.php', '',$f);
 echo "<br>";
include($f);
 echo "<br>";
    }
} else {
    echo "Nothing was found.";//Tell the user nothing was found.
    echo '<img src="yourimagehere.jpg"/>';//Display an image, when nothing was found.
}

echo $hip;
?>

