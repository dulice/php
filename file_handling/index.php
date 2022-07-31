<?php 
 
    // $f = fopen("test.txt", "w");
    // fwrite($f, "hello world");
    // fclose($f);

    // $rate = file_get_contents("http://forex.cbm.gov.mm/api/latest");
    // $currency = fopen("exchange.json", "w");
    // fwrite($currency, $rate);
    // fclose($currency);

    if(isset($_GET['submitBtn'])) {
        $file = fopen($_GET['username'].uniqid().".txt", "w");
        fwrite($file, "username: ".$_GET['username']."\n");
        fwrite($file, "password: ".$_GET['password']);
        fclose($file);
    }

?>

<form method="GET">
    <label for="">Username</label>
    <input type="text" name="username">
    <label for="">Password</label>
    <input type="password" name="password">
    <button name="submitBtn">Submit</button>
</form>
