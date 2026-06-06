<?php

include_once "MyVivo.php";
include_once "ExtendedFeature.php";

class MyVivoPro extends MyVivo{
    use ExtendedFeature;
    public function MyVivoDisplay(){
        echo "======VIVO Y18 PRO Information is showing=======<br>";
    }
    public function Display()
    {
        echo "VIVO Y18 PRO Display size is 6.5 Inch. <br>";
    }
}

$myVivoPro = new MyVivoPro();
$myVivoPro->MyVivoDisplay();
$myVivoPro->PowerButton();
$myVivoPro->ChrageMobile();
$myVivoPro->app();
$myVivoPro->Display();
$myVivoPro->Calling();
$myVivoPro->Camera();
$myVivoPro->WaterProof();