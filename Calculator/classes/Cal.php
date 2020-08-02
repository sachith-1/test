<?php

class Cal{
    private $num1;
    private $num2;
    private $calOption;

    public function __construct(int $num1,int $num2,string $calOption){
        $this->num1=$num1;
        $this->num2=$num2;
        $this->calOption=$calOption;
    }
    public function operate(){
        if($this->calOption==="Add"){
            return $this->num1+$this->num2;
        }elseif ($this->calOption==="Sub"){
            return $this->num1-$this->num2;
        }elseif ($this->calOption==="Mult"){
            return $this->num1*$this->num2;
        }else{
            return "ERROR : Undefined Operation";
        }
    }
}