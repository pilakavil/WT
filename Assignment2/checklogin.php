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
        echo "<script type='text/javascript'>location = '$url';</script>";   
    }
    else {
        $msg = "Username/Password Wrong";
        $url = "index.html";
        echo "<script type='text/javascript'>alert('$msg'); location = '$url';</script>";
    }
?>
