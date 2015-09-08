
<?php
    require_once ("classes\Circle2.php");
    
    $Circle = new Circle2(1,2,5);
    
    //проверка геттера
    echo $Circle->hashMap['X'];
    
    //проверка сеттера
    $Circle->hashMap['X'] = 7;
    echo '<br/>'.$Circle->hashMap['X'];
    
    //проверка __toString
    echo'<br/>'.$Circle;

?>

