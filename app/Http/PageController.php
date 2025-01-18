<?php
if(empty($_GET['page'])) { $page = 'index'; } else { $page = $_GET['page']; }

$pagePath = VIEWS . $page . '.php';

if (file_exists($pagePath)) {
    $tc->loadTemplate("header");
    include_once $pagePath;
    $tc->loadTemplate("footer");
} else {
    $tc->loadTemplate("404");
}