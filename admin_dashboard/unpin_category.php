<?php
    require_once "core/auth.php";
    require_once "core/isAdmin&isEditor.php";
    require_once "template/header.php";
    unpinCat($_GET['id']);