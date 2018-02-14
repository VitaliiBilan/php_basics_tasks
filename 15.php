<<?php
    $a = 50;
    $b = 100;
    $operator = '/';

    echo $a, $operator, $b, '=';

    switch ($operator) {
        case '+':
            echo $a + $b;
            break;
        case '-':
            echo $a - $b;
            break;
        case '*':
            echo $a * $b;
            break;
        case '/':
            echo $a / $b;
            break;
        case '%':
            echo $a % $b;
            break;
}
?>