<?php
include_once "MobileProto.php";

class MyVivo extends MobileProto{

 //  must calling the abstract function that used in base class MobileProto
 public function app()
 {
    echo "Android Mobile VIVO Y18. <br>";
 }

 //display function it can be overriden on the children class
 public function Display(){
    echo "VIVO Y18 Display size is 6 Inch. <br>";
 }

 //calling the protected function that are used in base class
 public function Calling(){
    $this->Dailing();
    echo "Connecting to the Network... <br>";
    $this->Ringing();
 }

 public function Camera(){
    echo "Camera is on. <br>";
    // calling the private function
    $this->TakePhoto();
    echo "Photo is taken. <br>";
 }

 //extra private function to take photo used in this function
 private function TakePhoto(){
    echo "Taking Photo... <br>";
 }
}

$myVivo = new MyVivo();
$myVivo->PowerButton();
$myVivo->ChrageMobile();
$myVivo->app();
$myVivo->Display();
$myVivo->Calling();
$myVivo->Camera();