<?php

function getBodyContent() {
    switch (@$_GET['p']) {
        case 'produtos':
            include '_product-list.php';
            break;
        case 'sobre':

            break;
        case 'contato':

            break;
        case 'user-form':
            include '_user-form.php';
            break;
        case 'user-welcome':
            break;
        case 'product-form':
            include '_product-form.php';
            break;
        default:
    }
}

function dd($var) {
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
    exit;
}

function newDbConnection() {
    return new mysqli('127.0.0.1', 'root', '', 'speedveiculos');
}
