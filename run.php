<?php
        // The code below creates the class
        class Soccer {
            // Creating some properties (variables tied to an object)
            public $ronaldo = true;
            public $real;
            public $ball;
            public $shoes;
            
            // Assigning the values
            public function __construct($ronaldo, $real, $ball) {
              $this->ronaldo = $ronaldo;
              $this->real = $real;
              $this->ball = $ball;
            }
            
            // Creating a method (function tied to an object)
            public function greet() {
              return "Hello, my name is " . $this->ronaldo . " " . $this->real . ". Nice to meet you! :-)";
            }
          }
          
        // Creating a new person called "boring 12345", who is 12345 years old ;-)
        $me = new Person('boring', '12345', 12345);
        
        // Printing out, what the greet method returns
        echo $me->greet(); 
        ?>