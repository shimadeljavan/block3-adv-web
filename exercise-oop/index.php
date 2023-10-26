
<?php

ini_set('display_errors', 1);

$globalId = 0;

class Plant
{
    public $name;
    public $color;
    public $watering;
    public $sunlight;
    public $age;

    function __construct($name, $color, $watering, $sunlight, $age){

        global $globalId;  
        $globalId++;   
           
        $this->name = $name ." ". $globalId;
        $this->color = $color;
        $this->watering = $watering;
        $this->sunlight = $sunlight;
        $this->age = $age;
       
    }


public function getName(){
    return $this->name;
}

public function getColor(){
    return $this->color;
}

public function getWatering(){
    return $this->watering;
}

public function getSunlight(){
    return $this->sunlight;
}

public function getAge(){
    if ($this->age <= 3){
        echo "This plant is new.";
    }else{
        echo "This plant is old.";
    }
    }
}


$plant = new Plant("Rose", 5, "red", "daily", "full sun");
echo "Name:",$plant->getName(), "<br>";
echo "Color:", $plant->getColor(), "<br>";
echo  "Watering:",$plant->getWatering(), "<br>";
echo "Sunlight:",$plant->getSunlight(), "<br>";
echo "Age:",$plant->getAge(), "<br>";

$plant1 = new Plant("Sunflower", 1, "yellow", "once a week", "partial sun");
echo "Name:",$plant1->getName(), "<br>";
echo "Color:", $plant1->getColor(), "<br>";
echo  "Watering:",$plant1->getWatering(), "<br>";
echo "Sunlight:",$plant1->getSunlight(), "<br>";
echo "Age:",$plant1->getAge(), "<br>";


?>