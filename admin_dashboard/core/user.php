<?php 

require_once "base.php";
function runQuery($sql) {
    mysqli_query(con(), $sql);
}

function alert($color="danger", $data) {
    return "<div class='alert alert-{$color}' role='alert'> $data </div>";
}

function redirect($url){
    echo "<script> location.href = '$url' </script>";
}

function register() {
    if(isset($_POST['registerBtn'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        
        if($password === $cpassword) {
            $hashPassword = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO users(username,email,password) VALUES ('$username','$email','$hashPassword')";
            runQuery($sql);
            redirect('login.php');
        } else {
            echo alert("danger","Password and Confrim Password must be the same.");
        }
    }
}

function login() {
    if(isset($_POST['loginBtn'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM users WHERE email='$email'";
        $query = mysqli_query(con(), $sql);
        $row = mysqli_fetch_assoc($query);
        if($row) {

            $verifyPassword = password_verify($password, $row['password']);

            if($verifyPassword) {
                session_start();
                $_SESSION['user'] = $row;
                redirect('dashboard.php');
            } else {
                echo alert("danger","Wrong Credential");
            }

        } else {
            echo alert("danger","Wrong Credential");
        }
    }
}