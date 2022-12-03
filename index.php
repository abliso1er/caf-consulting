<?php

$url = (isset($_GET['url']) && !empty($_GET['url'])) ? $_GET['url'] : NULL;
$url = rtrim($url, "/");
$tab = explode("/", $url);
//print_r($tab);
//exit;
//unset($_SESSION[SESSION_name]);
//if (issetUser()) {
$link = "home";
if (is_array($tab)) {
    if (!empty($tab[0])) {
        $link = strtolower($tab[0]);
        if ($link == "index")
            $link = "home";
        $file_name = 'core/view/' . $link . "/index.php";
        if (!empty($tab[1])) {
            $file_name = 'core/view/' . $link . "/" . strtolower($tab[1]) . ".php";
        } else {
            
        }

        if (file_exists($file_name)) {
            require 'wp-includes/php/bloc_top.php';
            require $file_name; //Chargement de la vue
            require 'wp-includes/php/bloc_bottom.php';
        } else {
            require 'wp-includes/php/bloc_top.php';
            require 'core/view/error/index.php';
            require 'wp-includes/php/bloc_bottom.php';
        }
    } else {
        require 'wp-includes/php/bloc_top.php';
        require "core/view/$link/index.php"; //Chargement de la vue
        require 'wp-includes/php/bloc_bottom.php';
    }
} else {
    require 'wp-includes/php/bloc_top.php';
    require "core/view/$link/index.php"; //Chargement de la vue
    require 'wp-includes/php/bloc_bottom.php';
}