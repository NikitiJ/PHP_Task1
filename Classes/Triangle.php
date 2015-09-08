<?php
require_once ("Classes\Figure.php");

    class Triangle extends Figure{
            public $A;
            public $B;
            public $C;

            function __construct($A, $B, $C) {
                $this->A = $A;
                $this->B = $B;
                $this->C = $C;
            }
            
            function getPerimeter() {
                // P = a + b + c
                return $P = ($this->A + $this->B + $this->C);
            }
            
            function getSquare() {
                // S = sqrt( p*(p - a)*(p - b)*(p - c)  )  p = (a + b + c)/2 (половина периметра)
                $P = $this->getPerimeter()/2;
                return $square = (sqrt( $P*($P - $this->A) * ($P - $this->B) * ($P - $this->C) )); 
            }
            
            public function getInfo() {
                return '<br/> A = '.$this->A.
                       '<br/> B = '.$this->B.
                       '<br/> C = '.$this->C.
                       "<br/> Triangle's Perimeter = ".$this->getPerimeter().
                       "<br/> Triangle's Square = ".$this->getSquare() 
                    ;
                
            }

        }
?>

