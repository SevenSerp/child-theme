<?php
if(!defined("ABSPATH")){
    header('HTTP/1.0 403 Forbidden');
    exit;
}

define("CUSTOM_JAVASCRIPT_FILE", get_stylesheet_directory()."/js/custom.js");
?>