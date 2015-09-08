<?php
require_once ("Classes\Figure.php");
require_once ("Interfaces\Draw.php");

class Circle extends Figure implements Draw {
            
            public $X;
            public $Y;
            public $R;
            
            function __construct($X, $Y, $R) {
                $this->X = $X;
                $this->Y = $Y;
                $this->R = $R;
            }
            
            public function getCircleLenght(){
                // Lenght = 2*Pi*R
               return $circleLenght = ($this->R * 2 *  pi());
            }
            
            public function getCircleSquare(){
                // S = Pi * R^2
                return $circleSquare = $this->R^2 * pi();
            }
            
            public function printCircle(){
                return '<br/>X = '.$this->X.'<br/>Y = '.$this->Y.'<br/>R = '.$this->R;
            }
           
            public static function distanceBtw2Circles(Circle $circle1, Circle $circle2){
                // D = корень квадратный из ( (X2 - X1)^2 + (Y2 - Y1)^2  )
                return $distance = sqrt((($circle2->X - $circle1->X)^2) + (($circle2->Y - $circle1->Y)^2));
            }
            
            public function draw() {
               return "<br/> X (method draw) = ".$this->X.
                       "<br/> Y (method draw) = ".$this->Y.
                       "<br/> R (method draw) = ".$this->R.
                       "<br/> Circle's Lenght (method draw) = ".$this->getCircleLenght().
                       "<br/> Circle's Square (method draw) = ".$this->getCircleSquare()
                       ;
                
            }

            public function getInfo(){
                
                return "<br/> X = ".$this->X.
                       "<br/> Y = ".$this->Y.
                       "<br/> R = ".$this->R.
                       "<br/> Circle's Lenght = ".$this->getCircleLenght().
                       "<br/> Circle's Square = ".$this->getCircleSquare()
                      ;
            }

}

?>



