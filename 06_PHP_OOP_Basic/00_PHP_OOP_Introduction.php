<!-- First Method For Useing PHP OOP Class & Object -->
<?php
//Class
class Calculation
{
    //Property
    public $a;
    public $b;
    public $c;

    //Method
    public function sum($firstvalue, $secondvalue)
    {
        $this->a = $firstvalue;
        $this->b = $secondvalue;
        $this->c = $this->a + $this->b;
        return $this->c;
    }
}
//Object
$result = new Calculation();
echo "Sum value is : " . $result->sum(10, 21) . "<br>";
?>
<!-- Second Method For Useing PHP OOP Class & Object -->
<?php
//Class
class Calculator
{
    //Property
    public $a;
    public $b;
    public $c;

    //Method
    public function sub()
    {
        $this->c = $this->a - $this->b;
        return $this->c;
    }
}
$result = new Calculator();
$result->a = 10;
$result->b = 18;
echo "Sub value is : " . $result->sub();
?>