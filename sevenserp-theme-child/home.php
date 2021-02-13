<?php
if(!defined("ABSPATH")){
    header('HTTP/1.0 403 Forbidden');
    exit;
}

get_header();

echo 'Home';

get_footer(); 
?>