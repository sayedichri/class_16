<?php


namespace App\classes;
use App\classes\Person;


class Example extends Person
{
     public $firstName;
     protected $middleName;
     private $lastName;
     public $firstNumber = 10;
     protected $secondNumber = 20;
     private $lastNumber;

     public function index()
     {
////       echo "hello world";
////       echo $this->firstName;
//         $this->firstName = 'ali';
//         $this->firstName = 'newas';
//         $x = '10';
//         $x = '10.34';
//         $x = 'true';
//         echo gettype($x);
////       echo gettype($this->firstName);
         $this->firstName = 'Md.';
         echo $this->firstName;

     }

     public function methodOne()
     {
         $this->middleName = 'mortaza';
         echo $this->middleName;
     }

     public function methodTwo()
     {
         $this->lastName = 'khan';
         echo $this->lastName;
     }
     public function methodThree()
     {
//         echo $this->district;
//         echo $this->division;
//         echo $this->country;
         $this->district();
         $this->division();
         $this->country();
     }

}