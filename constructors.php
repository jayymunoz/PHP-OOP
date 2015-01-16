<?php

class Futbol {
    public $jersey;
    public $ronaldo;
    public $cleats;
    public $schurrle;
    
     function __construct($jersey, $ronaldo, $cleats, $schurrle) {
              $this->jersey = $jersey;
              $this->ronaldo = $ronaldo;
              $this->cleats = $cleats;
              $this->schurrle = $schurrle;
     }
     
     function getName() {
         return"This cleats is" . $this->cleats;
         "and last" . $this-> schurrle;
         
     }
  }
  
  class Soccer extends Futbol{
      function __construct($jersey, $ronaldo, $cleats, $schurrle) {
          parent::__construct($jersey, $ronaldo, $cleats, $schurrle);
          $this->schurrle = $schurrle;
      
      }
      function greet() {
          return $this->schurrle;
      }
