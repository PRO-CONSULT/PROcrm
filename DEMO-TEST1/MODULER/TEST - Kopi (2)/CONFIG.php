test
<?php
//--- get all the directories
$dirname = "$subdirname/SUBMODULER/";
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
 echo "<br>";
include($f);
 echo "<br>";
    }
} else {
    echo "Nothing was found.";//Tell the user nothing was found.
    echo '<img src="yourimagehere.jpg"/>';//Display an image, when nothing was found.
}
?>

<?php
$url = "https://www.nationalbanken.dk/_vti_bin/DN/DataService.svc/CurrencyRatesXML?lang=da";
$xml = simplexml_load_file($url);
print_r($xml);
function get_xml_from_url($url){
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');

    $xmlstr = curl_exec($ch);
    curl_close($ch);

    print_r($xmlstr);
}

    $xml = simplexml_load_file('https://www.nationalbanken.dk/_vti_bin/DN/DataService.svc/CurrencyRatesXML');
    print_r($xml);


?>



