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
             return "this is my" . $this-jersey . 
             " and last " . $this-> ronaldo;
             
             }
             
          
        
        
        
        class soccer extends sports {
        function greet () {
            return $this->player;
            
        }
      }   
           class club extends fifa {
               function greet () {
                   return $this->coach;
               
           
        }
        
     ?>