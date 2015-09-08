
<?php
require_once ("classes\Figure.php");
require_once ("classes\Circle.php");
require_once ("classes\Triangle.php");
require_once ("classes\Rectangle.php");


$Circle = new Circle(2,3,5);
$Rectangle = new Rectangle(4,6);
$Triangle = new Triangle(2, 3, 5);

$arrayOfFigures = array($Circle, $Rectangle, $Triangle);

        foreach ($arrayOfFigures as $obj) {
            if (class_implements($obj))   {echo $obj->draw();}
            else echo $obj->getInfo();
        }

?>
