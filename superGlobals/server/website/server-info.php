<?php
  // SuperGlobals are built in variables that are always available in all scopes.
  // all of them start with $_ except for $GLOBALS
  // lets talk $_SERVER

  // $_SERVER


  // create server array assosiative arrary
  $server = [
    // target $_SERVER which is also an array
    'Server host name' => $_SERVER['SERVER_NAME'],
    // tells you name of http host
    'Host header' => $_SERVER['HTTP_HOST'],
    // what software is the server running (very cool xd anon)
    'Server software' => $_SERVER['SERVER_SOFTWARE'],
    // where is the htdocs on this server?
    'Server document root' => $_SERVER['DOCUMENT_ROOT'],
    // current page ( where am i )
    'Current page' => $_SERVER['PHP_SELF'],
    // location of this script ( where am i )
    'Script location' => $_SERVER['SCRIPT_NAME'],
    // absolute path ( from /C:)
    'Absolute path' => $_SERVER['SCRIPT_FILENAME']

  ];
//  print_r($server);
  echo "<br><br>";


  // create client array

  $client = [
    // gets browser versions from client
    'client system info' => $_SERVER['HTTP_USER_AGENT'],
    // gets clients IP doesnt work on yourself if you are on server
    'Client IP' => $_SERVER['REMOTE_ADDR'],
    // show the clients port
    'Remote port' => $_SERVER['REMOTE_PORT']
  ];
//  print_r($client);
?>
