<?php

    class Circle2 {

            private $hashMap = array (
                                'X' => X,
                                'Y' => Y,
                                'R' => R,
            );
                    
            function __construct($X, $Y, $R) {
                $this->hashMap['X'] = $X;
                $this->hashMap['Y'] = $Y;
                $this->hashMap['R'] = $R;
            }
            
            // MAGIC METHODS           
              public function __get($property){
              if (property_exists($this, $property)) {
                return $this->$property;
              }
            }
            
            public function __set($property, $value)
            {
              if (property_exists($this, $property)) {
                $this->$property = $value;
              }
            }
            
            public function __toString()
            {
              return ' TESTING __toString';
            }
            
            //другие методы
            public function getCircleLenght(){
                // Lenght = 2*Pi*R
               return $circleLenght = ($this->hashMap['R'] * 2 *  pi());
            }
            
            public function getCircleSquare(){
                // S = Pi * R^2
                return $circleSquare = $this->hashMap['R']^2 * pi();
            }
            
            public function getInfo(){               
                return "<br/> X = ".$this->hashMap['X'].
                       "<br/> Y = ".$this->hashMap['Y'].
                       "<br/> R = ".$this->hashMap['R'].
                       "<br/> Circle's Lenght = ".$this->getCircleLenght().
                       "<br/> Circle's Square = ".$this->getCircleSquare()
                      ;
            }
           
            public static function distanceBtw2Circles(Circle $circle1, Circle $circle2){
                // D = корень квадратный из ( (X2 - X1)^2 + (Y2 - Y1)^2  )
                return $distance = sqrt((($circle2->hashMap['X'] - $circle1->hashMap['X'])^2) + (($circle2->hashMap['Y'] - $circle1->hashMap['Y'])^2));
            }
            
        }

?>

