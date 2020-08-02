<?php

class HelloWorld{
    public $hello;
    public $world;

    public function __construct($hello,$world){
        $this->hello=$hello;
        $this->world=$world;
    }
    public function sayHiWorld(){
        return $this->hello ." ". $this->world;
    }
}

$helloWorld=new HelloWorld("Hello","World");
echo "\n";
echo $helloWorld->sayHiWorld();
echo "sachith";
