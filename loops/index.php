<?php
  // LOOPS

  /*
      Four Kinds of Loops;
      -for
      - while
      - Do..while
      - Foreach

  */

  # for ( usually used when you know how many times to loop)
  # the params are (init,condition,inc)

  #eg init is inital value of var
  # condition is obvious
  #
  for ($i=0; $i < ; $i++) {
    echo $i;
    // add a breach after each print
    echo '<br>';
  }

  // output
  0
  1
  2
  3
  4
  5
  6
  7
  8
  9
  10

  # while LOOP
  #param condition
  # you set the var outside the LOOP
  # used most if you dont know vars current value

  $i = 0

  while ($i <= 10) {
    echo $i;
    // add a breach after each print
    echo '<br>';
    // increment inside the LOOP
    $i++;
  }

  // output
  0
  1
  2
  3
  4
  5
  6
  7
  8
  9
  10


  #do while
  # the param is condition
  # runs the code atleast once

  $i = 0;
  do {
    echo $i;
    // add a breach after each print
    echo '<br>';
    // increment inside the LOOP
    $i++;
  } while ($i <= 10);

  // output
  0
  1
  2
  3
  4
  5
  6
  7
  8
  9
  10


  # for breach
  # works with arrays
  $people = array('Donovan' =>  'ClassicZ42@Outlook.com' , 'Donovan2' =>  'ClassicZ42@Outlook.com2' );
  // as key is one of the arr slots
  foreach ($people as $person => $email) {
    echo $person." : ".$email;
    echo "<br>";

  }

  #output
  Donovan : ClassicZ42@Outlook.com
  Donovan2 : ClassicZ42@Outlook.com2


?>
