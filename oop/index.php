<?php

class Plant
{
    public $name;
    public $color;
    public $watering;
    public $sunlight;


    function __construct($name, $color, $watering, $sunlight){
        $this->name = $name;
        $this->color = $color;
        $this->watering = $watering;
        $this->sunlight = $sunlight;
    }
       
    
}

$plant = new Plant("Rose", "red", "daily", "full sun");
echo $plant->name, "<br>";

echo $plant->color, "<br>";
echo $plant->watering, "<br>"; 
echo $plant->sunlight, "<br>";






?>