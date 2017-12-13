<?php
//ex 4   ////////// inheretance
  class Person{


    private $name;
    private $email;

    public function __construct($name,$email){

        echo __CLASS__.' created'.'<br>';
        $this-> name = $name;
        $this-> email = $email;
    }

    public function __destruct(){
        echo __CLASS__.' destroyed';
    }

    public function setName($name){
      $this-> name = $name;
    }

    public function getName(){
      return $this-> name;
    }

    public function setEmail($email){
      $this-> email = $email;
    }

    public function getEmail(){
      return $this-> email;
    }
  };

  // crete a class that extends the person class

  class Customer extends Person{
    // so a Customer is a Person
    // but a person is not necissarily a customer

    // customer has all the methods and properties of person and customer
    //person only has person
    //extra field

    private $balance;
    // construvtor

    public function __construct($name,$email,$balance){
        // call the parent constructor
        parent::__construct($name,$email,$balance);
        echo __CLASS__.' created'.'<br>';
    }

    //getter
    public function setBalance($balance){
      $this-> balance = $balance;
    }

    public function getBalance(){
      return $this-> balance;
    }

  }

  //create a customer

  $customer1 = new Customer('Donovan' ,'ClassicZ42@Outlook.com',300);







 ?>
