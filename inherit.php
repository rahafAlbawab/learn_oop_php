<?php
class AppleDevice
{

    public $ram   = "2GB";
    public $inch  = "4 Inch";
    public $space = "32 GB";
    public $color = "Gold";
    public $neme;
    private $hi;
    public function FunctionName($ram, $inch, $space, $color)
    {
        $this->ram   = $ram;
        $this->inch  = $inch;
        $this->space = $space;
        $this->color = $color;
    }
   final public function sayHello($name)
    {
        $this->neme = $name;
        $hi = "ok";
        echo "welcome to ".$name;
        
    }
}
class Sony extends AppleDevice
{
    public $camera = "25MB";
  
 
}
$iphon6Plus = new Sony();
$iphon6Plus->FunctionName(1, "$ inch ", "16GB", "Gold");
$iphon6Plus->sayHello("sony");
