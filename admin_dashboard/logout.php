<?php
require_once "core/auth.php";

session_unset();
session_destroy();
header("location:login.php");