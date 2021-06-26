<?php
class Car {
    public $color;
    public $model;
    public function __construct($color, $model){
        $this ->color = $color;
        $this ->model = $model;

    }
    public function message()
    {
        return "Meu carro é ". $this->color . " " . $this-> model . "!";
    }
}
$myCar = new Car ("preto", "Volvo");
echo $myCar -> message();

?>