<?php
session_start();
require "core.php";
function oldData($inputName) {
    if(isset($_POST[$inputName])) {
        return $_POST[$inputName];
    } else {
        return "";
    }
}

function setError($name, $message) {
    return $_SESSION['error'][$name] = $message;
}

function showError($name) {
    if(isset($_SESSION['error'][$name])) {
        return $_SESSION['error'][$name];
    } else {
        return "";
    }
}

function clearError() {
    $_SESSION['error'] = [];
}

function textFilter($text) {
    $text = trim($text);
    $text = htmlentities($text);
    $text = stripslashes($text);
}

function register() {
    global $genders;
    global $skills;
    global $supportFileType;
    $errorStatus = 0;

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    // check valid name
    if(empty($name)) {
        setError('name','Name is required');
        $errorStatus = 1;
    } elseif(strlen($name) < 5) {
        setError('name', 'Name must be more than 5 character');
        $errorStatus = 1;
    } elseif(strlen($name) > 20) {
        setError('name', 'Name cannot be longer than 20 character');
        $errorStatus = 1;
    } elseif(!preg_match("/^[a-zA-z ]*$/", $name)) {
        setError('name', 'Character Only');
        $errorStatus = 1;
    } else {
        textFilter($name);
        clearError();
        $errorStatus = 0;
    }

    //check valid email
    if(empty($email)) {
        setError('email','Email is required');
        $errorStatus = 1;
    } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        setError('name', 'Email is invalid.');
        $errorStatus = 1;
    } else {
        // textFilter($email);
        clearError();
        $errorStatus = 0;
    }

    //check valid phone number
    if(empty($phone)) {
        setError('phone','Phone number is required');
        $errorStatus = 1;
    } elseif(!preg_match("/^[0-9+ ]*$/", $phone)) {
        setError('phone', 'Phone number is invalid.');
        $errorStatus = 1;
    } else {
        textFilter($phone);
        clearError();
        $errorStatus = 0;
    }

    //check valid address
    if(empty($address)) {
        setError('address','address is required');
        $errorStatus = 1;
    } elseif(strlen($address) < 5) {
        setError('address', 'Address must be more than 10 character');
        $errorStatus = 1;
    } elseif(strlen($address) > 20) {
        setError('address', 'Address cannot be longer than 50 character');
        $errorStatus = 1;
    } else {
        textFilter($address);
        clearError();
        $errorStatus = 0;
    }

    //validate gender
    if(empty($_POST['gender'])) {
        setError('gender','Please select a gender');
        $errorStatus = 1;
    } elseif(!in_array($_POST['gender'], $genders)) {
        setError('gender', 'Please select the correct gender.');
        $errorStatus = 1;
    } else {
        clearError();
        $errorStatus = 0;
    }

    //validate skill
    if(empty($_POST['skill'])) {
        setError('skill','Please select a skill');
        $errorStatus = 1;
    } else {
        foreach($_POST['skill'] as $s) {
            if(!in_array($s, $skills)) {
                setError('skill','Please select the correct skill');
                $errorStatus = 1;
            }
        }
        if(!$errorStatus) {
            clearError();
            $errorStatus = 0;
        }
    }

    //validate file
    if(empty($_FILES['photo']['name'])) {
        setError('photo','Please select a photo');
        $errorStatus = 1;
    } elseif (!in_array($_FILES['photo']['type'], $supportFileType)) {
        setError('photo','You can upload photo only');
        $errorStatus = 1;
    } else {
        move_uploaded_file($_FILES['photo']['tmp_name'], uniqid(). "_". $_FILES['photo']['name']);
        $errorStatus = 0;
    }
    
    if(!$errorStatus) {
        clearError();
        print_r($_FILES);
        print_r($_POST);
    }
}