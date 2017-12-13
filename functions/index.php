<?php
// this is how you declare a php function
// you can add a default to the paramater in php
// by adding it in the ()
function simpleFunction($name = 'Default String'){
        echo $name;
};
// if you call it with data it will NOT print default
simpleFunction('optional string ');

// obviously more than one param
function anotherFunction($param1,$param2,$param3)
{
  return  $param1 + $param2 + $param3;
}
  echo anotherFunction(1,2,3);

  // if you want to pass globel vars into functions as params
  // you must use & on the function to make it able to reference it
  $globalVar = 10;
  function lastFunction(&$num){
    $num += 10;
  }
  lastFunction($globalVar);
  echo $globalVar;
?>
