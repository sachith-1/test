<?php

class Car{

    private $modal="N/A";

    public function __construct($modal="Test"){
        $this->modal=$modal;
        echo $this->modal;
    }

}
$car=new Car();