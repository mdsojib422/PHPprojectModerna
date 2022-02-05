<?php 
/*  All of Functionality For Admin
*/
require_once "inc/auth/Db.php";
// Program to display Root Folder.

function admin_assets_url($path = null){  	
    $fulluri =  explode("/",$_SERVER['REQUEST_URI']); 
    array_pop($fulluri);
    $urll = implode("/",$fulluri);

	$link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS']
    === 'on' ? "https" : "http") .
    "://" . $_SERVER['HTTP_HOST'] .'/'.$urll .'/'.$path??'';
    return $link; 
}
// page file path
function getPageUrl(){
    $pageflurl = explode('/',$_SERVER['PHP_SELF']);
    $end = end($pageflurl);
    return $end;
}
// hero sliders
require_once "inc/sliders.php";
// admin services
require_once "inc/services.php";



