<?php 
class Fibonacci {
    private $length;
    public function __construct($length){
        $this->length = $length + 2;
    }
    public function getSequence(){
        $array = [1,1];
        for($i=2;$i<$this->length;$i++){
            $array[$i] = $array[$i - 1] + $array[$i -2];
        }
        return $array;
    }
}

$firstTen = new Fibonacci(10);
foreach($firstTen->getSequence() as $sequence){
    echo "<br>".$sequence."<br>";
}