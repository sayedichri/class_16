<?php


namespace App\classes;


class Person
{
    public $district = "Savar";
    protected $division = 'Dhaka';
    private $country = 'Bangladesh';


    public function district()
    {
        echo 'savar';
    }
    protected function division()
    {
        echo 'Dhaka';
//         $this->country();
    }
    private function country()
    {
        echo 'Bangladesh';
    }

}