<?php
  // how to pass multiple values to a cookie

  // set an array of data
	$user = ['name' => 'Brad', 'email' => 'test@test.com', 'age' => 35];
  // but setcookie(); expects a string as a second paramater
  // so we use serialize(); to encode it
	$user = serialize($user);

	setcookie('user', $user, time() + (86400 * 30));
  // you must unserialize it or you will get out giberish
	$user =  unserialize($_COOKIE['user']);

	print_r($user);
