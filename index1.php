<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        require_once ("classes\Circle.php");
        
        //1-я окружность
        $Circle1 = new Circle(2,1,5);
        echo $Circle1->printCircle();
        
        echo '<br/> Circle1 Lenght = '.$Circle1->getCircleLenght();
        echo '<br/> Circle1 Square = '.$Circle1->getCircleSquare();
        
        //2-я окружность
        $Circle2 = new Circle(3,5,7);
        echo $Circle2->printCircle();
        
        echo '<br/> Circle2 Lenght = '.$Circle2->getCircleLenght();
        echo '<br/> Circle2 Square = '.$Circle2->getCircleSquare();
        
        //расстояние между 2-мя окружностями
        echo '<br/>Distance between Circle1 and Circle2: '.$Circle1->distanceBtw2Circles($Circle1, $Circle2);
        
  
        
        ?>
    </body>
</html>
