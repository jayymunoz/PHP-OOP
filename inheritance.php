<?php
class Futbol {
    public $jersey;
    public $ronaldo;
    public $cleats;
    public $schurrle;
    public $chelsea;
    public $england;
    public $ball;
}
             function __construct($jersey, $ronaldo, $cleats, $schurrle, $chelsea, $england, $ball ) {
              $this->jersey = $jersey;
              $this->ronaldo = $ronaldo;
              $this->cleats = $cleats;
              $this->schurrle = $schurrle;
              $this->chelsea = $chelsea;
              $this->england = $england;
              $this->ball = $ball;
             }
             
             function getName() {
             return "this jersey is" . $this->jersey;
             " and last " . $this-> ronaldo;
             
             }
             
           
        
        class Soccer extends sports {
        function greet () {
            return $this->player;
            
        }
      }   
        Class Ball extends sports {
            function hello () {
                return $this->goalie;
            }
        }
        
        $Jersey = new Jersey (“Jersey”, “Nike”, “Blue”, “Medium”, 14);
print “Futbol 1 is a  ” . $Jersey­>getName();

       ?>