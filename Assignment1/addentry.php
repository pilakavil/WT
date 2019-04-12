<?php

	$firstname 	= $_POST['firstname'];
	$lastname  	= $_POST['lastname'];
	$emailid 	= $_POST['emailid'];
	$username  	= $_POST['username'];
	$password  	= $_POST['password'];

	$xml = simplexml_load_file('database.xml');


	$account = $xml->profile->addChild('account');
	$firstname = $account->addChild('firstname',$firstname);
	$lastname = $account->addChild('lastname',$lastname);
	$emailid = $account->addChild('emailid',$emailid);
	$username = $account->addChild('username',$username);
	$password = $account->addChild('password',$password);
	$xml->asXML('database.xml');

?>

<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
		h2{
			position: fixed;
			top: 50%;
			left: 50%;
			transform: translate(-50%,-50%);	
		}
	</style>
</head>
<body>
<h2>Registred Successfully <a href="login">Login</a></h2>
</body>
</html>