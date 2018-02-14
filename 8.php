<?php
    $age = -5;
    if ($age >= 18 && $age <= 59){
        $message = 'Вам еще работать и работать';
    }
    elseif ($age > 59){
        $message = 'Вам пора на пенсию';
    }
    elseif ($age >= 0 && $age <=17){
        $message = 'Вам еще рано работать';
    }
    elseif ($age < 0 ){
        $message = 'Неизвестный возраст';
    }
        echo $message;