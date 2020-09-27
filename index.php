<?php

class AppleDevice
{
    public $ram;
    public $inch;
    public $space;
    public $color;
    
}

//to create object
$iPhone6Plus = new AppleDevice();
echo "<pre>";
echo var_dump($iPhone6Plus);
echo "</pre>";


$iPhone6 = new AppleDevice();
echo "<pre>";
echo var_dump($iPhone6Plus);
echo "</pre>";