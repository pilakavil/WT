<?php
    $username = $_POST['regUsername'];
    $password = $_POST['regPassword'];
    $email    = $_POST['regEmail'];
    $phone    = $_POST['regPhone'];

    $xml = simplexml_load_file('database.xml');
    
    $account  = $xml->profile->addChild('account');
    $username = $account->addChild('username',$username);
    $password = $account->addChild('password', $password);
    $email    = $account->addChild('email',$email);
    $phone    = $account->addChild('phone',$phone);

    $xml->asXML('database.xml');

    $msg = "Registration Successful";
    $url = "index.html";
    $option = "_self";
    echo "<script type='text/javascript'>alert('$msg'); open('$url','$option');</script>";
?>