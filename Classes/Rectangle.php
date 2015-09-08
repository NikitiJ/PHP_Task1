<?php
require_once ("Classes\Figure.php");

    class Rectangle extends Figure{
            public $A;
            public $B;
            
            function __construct($A, $B) {
                $this->A = $A;
                $this->B = $B;
            }
            
            function getSquare() {
                // S = A*B
                return $square = ($this->A * $this->B); 
            }
            
            function getPerimeter() {
                //P = 2 * (a + b)
                return $perimeter = ($this->A + $this->B) * 2;
            }
            
            public function getInfo() {  
               return "<br/> A = ".$this->A.
                      "<br/> B = ".$this->B.
                      "<br/> Rectangle's Perimeter = ".$this->getPerimeter().
                      "<br/> Rectangle's Square = ".$this->getSquare() 
                    ;
            }

        }
?>

