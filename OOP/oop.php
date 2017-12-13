<?php
//ex 1   //////////Start

// create a class
//call it person

 class Person{
   // classes can have:
   //properties ( atributes in the form of a var)
   // and methods {functions specific to the class}

   // properties
   // classes have acess modifiers
   // public = we can acess this from anywhere ( outside the class and inside)
   // private = can only access it in this specific class in this case person
   // protected = can only access from this class or any class that extends this one
   public $name;
   public $email;
 };
 // create an object named $person1 it has a class of Person
 $person1 = new Person ;
 // access a propety with the ->
 // you can only do this if its public
 // how to set property values
 //$objectName -> propertyname = 'value';

 $person1 -> name = 'Donovan';
  echo $person1->name;

?>
