<?php
// an array of people called people
$people = array();
$people[] = "Steve";
$people[] = "John";
$people[] = "Kathy";
$people[] = "Evan";
$people[] = "Anthony";
$people[] = "Tom";
$people[] = "Rhonda";
$people[] = "Hal";
$people[] = "Ernie";
$people[] = "Johanna";
$people[] = "Farrah";
$people[] = "Linda";
$people[] = "Shawn";
$people[] = "Olivia";
$people[] = "Derek";
$people[] = "Amanda";
$people[] = "Rachel";
$people[] = "Katie";
$people[] = "Jillian";
$people[] = "Jose";
$people[] = "Malcom";
$people[] = "Greg";
$people[] = "Mary";
$people[] = "Brad";
$people[] = "Mike";

// get the query string
$q = $_REQUEST['q'];
$suggestion = "";

//get Suggestions
if($q !== "") {
  // get the text
  $q = strtolower($q);
  // get the length
  $len = strlen($q);
  // loop through People
  foreach($people as $person){
    //stristr($var);
    // finds the first occurence of Q in the var
    // we are also using substr($varWeTarget,startingvalue,endvalue); returns part of a str
    // use it and the $len var
      if(stristr($q, substr($person, 0, $len))){
        // check if suggestion is empty
        if($suggestion === ""){
          // set it equal to the person
          $suggestion = $person;
        }else {
          // append person
          $suggestion .= ", $person";
        }
      }
  }
}

// if no suggestion echo no suggestion else echo suggestion
echo $suggestion === "" ? "No Suggestion" : $suggestion;
 ?>
