<?php
    $age = 15;
    if ($age >= 18 && $age <= 59){
        $message = 'Вам еще работать и работать';
    }
    elseif ($age > 59){
        $message = 'Вам пора на пенсию';
    }
    elseif ($age >= 0 && $age <=17){
        $message = 'Вам еще рано работать';
    }
        echo $message;