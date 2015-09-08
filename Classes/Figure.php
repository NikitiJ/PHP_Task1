<?php

    abstract class Figure {

            abstract function getInfo();
            
            public static function factory($className){
                return $obj = new $className;
            }
        }
?>

