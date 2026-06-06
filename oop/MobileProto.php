<?php

include_once "MobileRule.php";

// obeying the mobile rules into mobile prototype
abstract class MobileProto implements MobileRule{

    //overriding the mobile rules function
    public function PowerButton()
    {
        echo "Swithing on the phone. <br>";
    }

    public function ChrageMobile()
    {
        echo "Charging the phone. <br>";
    }

    //creating an abstract function app
    abstract public function app();

    // creating protected method to use them in child class myVivo
    protected function Dailing(){
        echo "Dailing phone number. <br>";
    } 
    protected function Ringing(){
        echo "Ringing phone. <br>";
    } 
}