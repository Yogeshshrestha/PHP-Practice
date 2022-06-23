<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For PHP</title>
</head>
<body>
    <?php
    echo "Hello ! ";

    $name = "Yogesh Shrestha";
    $num1 = 10;
    $num2 = 20;
    $conidition = True;

    $sum = $num1 + $num2;

    echo $name;

    echo "<br/>the sum of 10 + 20 is".$sum."<br/>";

    echo var_dump($conidition);

    if ($num1 > 8) {
        echo "<br/>the num is greater than 8"; 
    }else{
        echo "<br/>the num is not greater";
    }

    //php constant 
    define("GREETING", "HELLO HR!");
    echo "<br/>".GREETING;

    define("arrays", [
        "array1",
        "array2",
        "array3"
      ]);
      echo "<br/>".arrays[0];
      
    //php objects
    class Car {
        public $color;
        public $model;
        public function __construct($color, $model) {
          $this->color = $color;
          $this->model = $model;
        }
        public function message() {
          return "My car is a " . $this->color . " " . $this->model . "!";
        }
      }
      
      $myCar = new Car("black", "Volvo");
      echo "<br>";
      echo $myCar -> message();
      echo "<br>";
      $myCar = new Car("red", "Toyota");
      echo $myCar -> message();

      //php for loops 
      $a = 0;
         $b = 0;
         
         for( $i = 0; $i<5; $i++ ) {
            $a += 10;
            $b += 5;
         }
         
         echo "<br>";
         echo ("At the end of the for loop a = $a and b = $b" );

         //php while loop
         $i = 0;
         $num = 0;
         
         do {
            $i++;
         }
         
         while( $i < 10 );
         echo "<br>";
         echo ("While Loop stopped at i = $i" );

        //  echo "<br> cookie break time ";
        echo "<br>";
        echo time();
         setcookie("category", "books", time() + 86400, "/");
         echo "<br>";
         echo "The cookie is set";

         // set the expiration date to one hour ago
        setcookie("category", "book", time() - 3600);

        // session_start()
        
        print_r($_SESSION);

        $_SESSION["favcolor"] = "yellow";
        print_r($_SESSION);

        // remove all session variables
        session_unset();

        // destroy the session
        session_destroy();

        echo "<br>";
        echo "All session variables are now removed, and the session is destroyed.";

        echo "<br>";
        echo "For Array";
        echo "<br>";

        $cars = array("Volvo", "BMW", "Toyota"); 
        echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";

        //to debug
        $myVar = "hello Can you degug!";

        var_dump($myVar);
        print_r($myVar);
            
        $allVars = get_defined_vars();
        print_r($allVars);
        debug_zval_dump($allVars);
            
        function sayHello($hello) {
            echo $hello;
            debug_print_backtrace();
        }
        
        sayHello($myVar);

        //defining classes
        class Fruit {
            // Properties
            public $name;
            public $color;
          
            // Methods
            function set_name($name) {
              $this->name = $name;
            }
            function get_name() {
              return $this->name;
            }
          }

          //objects
          $apple = new Fruit();
        $banana = new Fruit();
        $apple->set_name('Apple');
        $banana->set_name('Banana');
        echo "<br>";
        echo $apple->get_name();
        echo "<br>";
        echo $banana->get_name();

        $apple = new Fruit();
        var_dump($apple instanceof Fruit);

        // php constructor
        class Books {
            public $name;
            public $color;
          
            function __construct($name) {
              $this->name = $name;
            }
            function get_name() {
              return $this->name;
            }
          }
          
          $math = new Books("math");
          echo "<br>";
          echo "constructor <br>";
          echo $math->get_name();
          

          class Vechile {
            public $name;
            public $color;
          
            function __construct($name, $color) {
              $this->name = $name;
              $this->color = $color;
            }
            function __destruct() {
                echo "<br>";
                echo "destructors";
              echo "The vechile is {$this->name} and the color is {$this->color}.";
            }
          }
          
          $Car = new Vechile("Car", "red");

          //access modifiers
        //   class Animal {
        //     public $name;
        //     protected $color;
        //     private $weight;

        //     function set_name($n) {  // a public function (default)
        //         $this->name = $n;
        //       }
        //       protected function set_color($n) { // a protected function
        //         $this->color = $n;
        //       }
        //       private function set_weight($n) { // a private function
        //         $this->weight = $n;
        //       }
        //   }
          
        //   $dog = new Animal();
        //   $dog->name = 'Dog'; // OK
        //   $dog->color = 'Yellow'; // ERROR
        //   $dog->weight = '300'; // ERROR

          //inheritance
          class Device {
            public $name;
            public $color;
            public function __construct($name, $color) {
              $this->name = $name;
              $this->color = $color;
            }
            public function intro() {
                echo "<br>";
              echo "The fruit is {$this->name} and the color is {$this->color}.";
            }
          }
          
          // Laptop is inherited from Fruit
          class Laptop extends Device {
            public function message() {
              echo "Am I a Device or laptop? ";
            }
          }
          $Laptop = new Laptop("Laptop", "red");
          $Laptop->message();
          $Laptop->intro();
          echo "<br>";
          echo "check maksdjhafdsafffffffffasdfe";

          //constant
        //   class Goodbye {
        //     const LEAVING_MESSAGE = "Thank you, you may leave now!";
        //     public function byebye() {
        //       echo self::LEAVING_MESSAGE;
        //     }
        //   }

          class Goodbye {
            const LEAVING_MESSAGE = "Thank you, you may leave now!";
          }
          echo "<br>";
          echo Goodbye::LEAVING_MESSAGE;

          //php abstract

          abstract class ParentClass {
            // Abstract method with an argument
            abstract protected function prefixName($name);
          }
          
          class ChildClass extends ParentClass {
            // The child class may define optional arguments that are not in the parent's abstract method
            public function prefixName($name, $separator = ".", $greet = "Dear") {
              if ($name == "John Doe") {
                $prefix = "Mr";
              } elseif ($name == "Jane Doe") {
                $prefix = "Mrs";
              } else {
                $prefix = "";
              }
              return "{$greet} {$prefix}{$separator} {$name}";
            }
          }
          
          $class = new ChildClass;
          echo "<br>";

          echo $class->prefixName("abstraction John Doe");
          echo "<br>";
          echo $class->prefixName("abstraction Jane Doe");

          //php inerface
          interface Animal {
            public function makeSound();
          }
          
          class Cat implements Animal {
            public function makeSound() {
            echo "<br>";
              echo "Meow interface";
            }
          }
          
          $animal = new Cat();
          $animal->makeSound();
    ?>  
</body>
</html>