<?php

class AppleDevice
{
    //Defualt value for properties
    public $ram = 1;
    public $inch;
    public $space;
    public $color;
    public $ownerName;
    private $loceCode;

    //Constant
    const CHIP = "A9";
    const OWNER_NAME_LENGTH = 3;
    public  function setLockScreen(string $loceCode)
    {
        $this->loceCode = md5($loceCode);
    }
    public  function getLockScreen()
    {
        echo $this->loceCode;
    }

    public function doubleHomePressed($name)
    {
        echo "hi from method " . $name . "<br>";
    }
    public function getSepcification()
    {
        echo $this->ram . "<br>";
        echo $this->inch . "<br>";
    }
    public function chekOwnerName()
    {
        if (strlen($this->ownerName) < 3) {
            echo "must be grather than ";
        }
    }
    public function chekOwnerNameWithConst()
    {
        if (strlen($this->ownerName) < self::OWNER_NAME_LENGTH) {
            echo "must be grather than " . self::OWNER_NAME_LENGTH;
        }
    }
    //function with parameter 
    public function changeSpecification($ram)
    {
        $this->ram = $ram;
    }
}

//to create object
$iPhone6Plus = new AppleDevice();
//to set value 
$iPhone6Plus->ram = 12;
$iPhone6Plus->inch = "5 inch";
$iPhone6Plus->space = 32;
$iPhone6Plus->color = "red";
$iPhone6Plus->area = 10;
$iPhone6Plus->ownerName = "ra";
$iPhone6Plus->setLockScreen(123);
$iPhone6Plus->getLockScreen();
$iPhone6Plus->changeSpecification(2);
echo $iPhone6Plus->ram . "GB <br>";


//to call Methods
$iPhone6Plus->doubleHomePressed("rahaf") . "<br>";
$iPhone6Plus->getSepcification() . "<br>";
$iPhone6Plus->chekOwnerName() . "<br>";
$iPhone6Plus->chekOwnerNameWithConst() . "<br>";
// To Way to Access constant
echo $iPhone6Plus::OWNER_NAME_LENGTH . "<br>";
echo AppleDevice::CHIP;
