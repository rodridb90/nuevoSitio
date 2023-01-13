<?php

function debug($v) : string {
    echo "<pre>";
    var_dump($v);
    echo "</pre>";
    exit;
}

function s($html) : string {
    $s = htmlspecialchars($html);
    return $s;
}

function isAuth() : void {
    if(!isset($_SESSION['login'])) {
        header('Location: /');
    }
}