<?php
//static methods/properties
//  methods/properties you can use without instantiating ( creating) an object

  class Person{


    private $name;
    private $email;
    // make a static property
   //  public static $ageLimit = 40;
   // make a static method 1
    private static $ageLimit = 40;

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

       // make a static method 2
       public function getAgeLimit(){
         // this doesnt work with static
         // use self instead of this
         // and use :: instead of ->
         return self::$ageLimit;
       }
  };

// use the static property
// echo Person::$ageLimit;
// use the static method
echo Person::getAgeLimit();


  class Customer extends Person{


    private $balance;


    public function __construct($name,$email,$balance){

        parent::__construct($name,$email,$balance);
        echo __CLASS__.' created'.'<br>';
    }


    public function setBalance($balance){
      $this-> balance = $balance;
    }

    public function getBalance(){
      return $this-> balance;
    }

  }










 ?>
