<?php
abstract class MakeDevice
{

    abstract public function testPerformance();
    abstract public function verifyOwner();
    abstract protected function sayWecome($name);
}
class IPhone extends MakeDevice
{
    public $owner;
    public function testPerformance()
    {
        echo "Performane <br>";
    }
    public function verifyOwner()
    {
        echo "verify <br>";
    }
    protected function sayWecome($name)
    {
        $this->owner = $name;
        echo "hi from iphone class " . $name . "<br>";
    }
}
class IPad extends MakeDevice
{
    public $owner;
    public function testPerformance()
    {
    }
    public function verifyOwner()
    {
    }
    public function sayWecome($name)
    {
    }
}
$iPhone = new IPhone();
$iPhone->owner = "rahaf";
$iPhone->sayWecome("ahmad");
$iPad   = new IPad();
