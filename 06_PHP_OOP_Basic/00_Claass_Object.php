<!-- First Method -->
<?php
    //Class
    class Fruit{
        //Properties
        public $fruitname;
        //Method
        public function apple($fname)
        {
            $this->fruitname = $fname;
        }

        public function info()
        {
            return $this->fruitname;
        }
    }
//Object
    $result = new Fruit;
    $result->apple("Apple");
    echo $result->info() . "\n";
    $banana = $result->apple("Banana");
    echo $result->info() . "\n";
    $mango = $result->apple("Mango");
    echo $result->info() . "\n";
?>

<!-- Second Method -->
<?php
    class Car{
        public $name;
    }

    $result = new Car;
    $result->name = "Rayhan";
    echo "<br>";
    echo "My name is {$result->name}";
?>