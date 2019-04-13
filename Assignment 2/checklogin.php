<?php
    $username = $_POST['logUsername'];
    $password = $_POST['logPassword'];
    
    $xml = simplexml_load_file('database.xml');
    $flag=0;
    foreach ($xml->profile->account as $acc) {
        if ($acc->username == $username && $acc->password == $password)
            $flag=1;
    }
    if ($flag == 1) {
        $url = "home.html";
        $option = "_self";
        echo "<script type='text/javascript'>open('$url','$option');</script>";   
    }
    else {
        $msg = "Username/Password Wrong";
        $url = "index.html";
        $option = "_self";
        echo "<script type='text/javascript'>alert('$msg'); open('$url','$option');</script>";
    }
?>
