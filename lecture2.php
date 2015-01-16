<?php
class cars
{
    public $civic;
    public $evo;
    public $sti;
    
    function __construct($civic, $evo, $sti) {
        $this-> honda=$civic;
        $this-> mitsubishi=$evo;
        $this-> subaru=$sti;
        
    }
    public function greet() {
        return "The Honda " . $this->civic . " " . $this->evo . ". Nice to meet you! :-)";
        
    }
}
