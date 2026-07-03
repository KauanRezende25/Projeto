<?php
    if (!defined('ROOT_PATH')) 
            define('ROOT_PATH', $_SERVER['DOCUMENT_ROOT'] . '/Projeto/');

    if($_SERVER['HTTP_HOST']=='localhost')
            define('BASE', 'http://localhost/Projeto/');
    else
        define('BASE', 'http://' . $_SERVER['HTTP_HOST']. '/');
?>