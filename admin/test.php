<?php 
    class Car{
        var $engine;
        var $tyre;
        public $door = 4;
        var $brand;
        var $wheel;
        protected $price;
        var $model;

        function __construct($brandname = "Benz", $no_of_wheels = 6, $tyre= 4, $model = 2018)
        {
           $this->brand = $brandname;
           $this->wheel = $no_of_wheels;
           $this->tyre = $tyre;
           $this->model = $model;
        }

        public function set_price($current_price){
            $this->price = $current_price;
        }

        public function get_price(){
            return $this->price;
        }


    }
 $mercedez = new Car();
 //echo $mercedez->brand;
$mercedez->door = 30;
echo $mercedez->door;
$mercedez->set_price(5500);
 //echo $mercedez->get_price();




?>