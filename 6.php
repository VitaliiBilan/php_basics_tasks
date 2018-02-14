<?php
    $age = 65;
    if ($age >= 18 && $age <= 59){
        $message = 'Вам еще работать и работать';
    }
    elseif ($age > 59){
        $message = 'Вам пора на пенсию';
    }
    echo $message;