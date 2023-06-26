<?php
class Car {
    public $brand; 
    public $model; 
    public $numberDoor;
    public $price; 
    static public $counter=0; 
   

    public function __construct($brand, $model, $numberDoor, $price){
        $this->brand= $brand; 
        $this->model= $model; 
        $this->numberDoor= $numberDoor; 
        $this->price= $price; 
        self::countCar(); 
        
        
    }

    public function brandPrint(){
        return "Marchio:".$this->brand; 
    }

    public function modelPrint(){
        return "Modello:".$this->model; 
    }

    public function numberDoorPrint(){
        return "Numero porte:".$this->numberDoor; 
    }

    public function printPrice(){
        return "Prezzo:".$this->price; 
    }

    public function description(){
        return $this->brandPrint()."\n".$this->modelPrint()."\n".$this->numberDoorPrint()."\n".$this->printPrice()."\n"; 
    }

    static public function countCar(){
        self::$counter++; 
    }
   




}

$car= new Car("Fiat", "Panda", "5", "5000$"); 

$car2= new Car("Alfa Romeo", "Giulia", "5", "9000$");

echo $car->description(); 

// echo Car::$counter; 


class Suv extends Car{
    public $confort; 
    static public $counter1=0; 
    public function __construct($brand, $model, $numberDoor, $price, $confort){
        parent::__construct($brand, $model, $numberDoor, $price); 
        $this->confort= $confort; 
        self::countSuv(); 
    }

    public function printTravel(){
        return $this->brand." "."può viaggiare su percorsi sterrati"; 
    }

    public function description(){
        return "Marchio:".$this->brand."\n"."Modello:".$this->model."\n"."Numero porte:".$this->numberDoor."\n"."Prezzo:".$this->price."\n"."Confort:".$this->confort; 
    }

    static public function countSuv(){
        self::$counter1++;
    }


}

$suv1= new Suv("Jeep","Compass","5","10000","8"); 
$suv2= new Suv("Land Rover","Lucio","5","20000","10"); 
// echo $suv1->description(); 
// echo $suv2->printTravel(); 
// echo Suv::$counter1; 
// echo Suv::$counter; 

class Utilitary extends Car{
    public $consum; 
    static public $counter2=0;
    public function __construct($brand, $model, $numberDoor, $price, $consum){
        parent::__construct($brand, $model, $numberDoor, $price); 
        $this->consum= $consum; 
        self::countUtilitary(); 
    }
    public function printTravel(){
        return $this->brand."è comoda per viaggiare in città"; 
    }
    public function description(){
        return "Marchio:".$this->brand."\n"."Modello:".$this->model."\n"."Numero porte:".$this->numberDoor."\n"."Prezzo:".$this->price."\n"."Consumo:".$this->consum; 
    }

    static public function countUtilitary(){
        self::$counter2++; 
    }



}

$utilitary1= new Utilitary("Fiat","500","3","3000","10km/l");
$utilitary2= new Utilitary("Smart","450","3","1000","15km/l");

// echo $utilitary1->description(); 
// echo $utilitary2->printTravel(); 
// echo $utilitary1->brand; 
// echo Utilitary::$counter2; 
// echo Utilitary::$counter; 

class Sport extends Car{
    public $speed;
    static public $counter3=0; 
    public function __construct($brand,$model,$numberDoor,$price,$speed){
        parent::__construct($brand,$model,$numberDoor,$price,$speed);
        $this->speed= $speed; 
        self::countSport();
    }
    public function printTravel(){
        return $this->brand." "."è ottima per gareggiare"; 
    }
    public function description(){
        return "Marca:".$this->brand."\n"."Modello:".$this->model."\n"."Numero porte:".$this->numberDoor."\n"."Prezzo:".$this->price."\n"."Velocità massima:".$this->speed."\n"; 
    }
    static public function countSport(){
        self::$counter3++; 
    }
    
}
$sport1= new Sport("Ferrari", "F355", "3","200000","330km/h"); 
$sport2= new Sport("Ferrari", "F8", "3","500000","350km/h"); 
echo $sport1->description(); 
echo $sport2->printTravel(); 
echo Sport::$counter3; 
echo Sport::$counter; 
