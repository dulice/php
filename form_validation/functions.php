<?php

session_start();

function test() {
    print_r($_POST);
}

function oldData($inputName) {
    if(isset($_POST[$inputName])) {
        echo $_POST[$inputName];
    } else {
        return; 
    }
}

function setError($inputName, $message) {
    $_SESSION['error'][$inputName] = $message;
}

function getError($inputName) {
    if(isset($_SESSION['error'][$inputName])) {
        return $_SESSION['error'][$inputName];
    } else {
        echo "";
    }
}

function clearError() {
    $_SESSION['error'] = [];
}
function register() {
    if(empty($_POST['name'])) {
        setError('name', 'Please fill this part');
    } elseif (strlen($_POST['name']) <= 5) {
        setError('name', 'Name must have at least 5 character');
    } elseif (strlen($_POST['name']) >= 20) {
        setError('name', 'Name must not have more than 20 character');
    } elseif (!preg_match("/^([a-zA-Z' ]+)$/", '')) {
        setError('name', 'Invalid Name');
    } else {
        print_r($_POST);
        clearError();
    }
}