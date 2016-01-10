<?php
$logoType;
if( fnmatch("centrovoices", $currentURL) || fnmatch("centrovoices/*", $currentURL) ){
    $taxonomyClass = 'tx-centro-voices';
}elseif( fnmatch("events-news", $currentURL) || fnmatch("events-news/*", $currentURL) ){
    $taxonomyClass = 'tx-events-news';
}elseif( fnmatch("collections", $currentURL) || fnmatch("collections/*", $currentURL) ){
    $taxonomyClass = 'tx-collections';
}elseif( fnmatch("library-publications", $currentURL) || fnmatch("library-publications/*", $currentURL) ){
    $taxonomyClass = 'tx-library-publications';
}elseif( fnmatch("research-education", $currentURL) || fnmatch("research-education/*", $currentURL) ){
    $taxonomyClass = 'tx-research-education';
}elseif( fnmatch("centro-tv", $currentURL) || fnmatch("centro-tv/*", $currentURL) ){
    $taxonomyClass = 'tx-centro-tv';
}elseif( fnmatch("centro-memorias", $currentURL) || fnmatch("centro-memorias/*", $currentURL) ){
    $taxonomyClass = 'tx-memorias';
}elseif( fnmatch("centro-store", $currentURL) || fnmatch("centro-store/*", $currentURL) ){
    $taxonomyClass = 'tx-store';
}else{
    $taxonomyClass = 'tx-none';
}
?>