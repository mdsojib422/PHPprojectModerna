<?php 
/*  All of Functionality
*/

require_once "admin/functions.php";
// Program to display Root Folder.
function assets_url($path = null){ 
    $link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS']
    === 'on' ? "https" : "http") .
    "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'].$path??'';
    return $link; 
}

/* // page file path
function getPageUrl(){
    $pageflurl = explode('/',$_SERVER['PHP_SELF']);
    $end = end($pageflurl);
    return $end;
} */