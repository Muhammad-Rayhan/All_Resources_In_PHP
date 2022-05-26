<!-- Construct -->
<?php
//Class
class Fruit
{
    //Variable
    public $name;
    //Method
    public function __construct($n)
    {
        echo $this->name = $n;
        // return $this->name = $n;
    }
}
//Object
$result = new Fruit('Apple');
echo "<br>";
echo "<br>";
// echo $result->__construct("Apple");
?>

<?php
class Car
{
    public $name;
    public $color;

    public function __construct($n, $c)
    {
        $this->name = $n;
        $this->color = $c;
    }

    public function getdata1()
    {
        return $this->name;
    }

    public function getdata2()
    {
        echo $this->color;
    }
}
$result = new Car("Mango", "Yellow");
echo $result->getdata1() . "\n";
$result->getdata2();
echo "<br>";
echo "<br>";
?>


<!-- Destructor -->
<?php
    class Man{
        public $name;
        public $age;

        public function __construct($n, $a)
        {
            $this->name = $n;
            $this->age = $a;
        }

        public function __destruct()
        {
            echo "My name is {$this->name}<br>"."I am {$this->age} years old.";
        }
    }
    $result = new Man("Rayhan", 23);
?>