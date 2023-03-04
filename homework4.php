<?php

$array = [1,2,3,2,3,5,5,8,9,10,10];
//Задание 1.1 Функция, которая вернет все ключи массива
print_r(array_keys($array));
echo '<br>';
//Задание 1.2 Функция, которая оставляет только уникальные занчения в массиве
print_r(array_unique($array));
echo '<br>';
//Задание 1.3 Подсчитывает кол-во элементов в массиве
print_r(count($array));
echo '<br>';


//Задание 2 Создать переменную $dayNumber = date(‘N’);. Реализовать switch case, который выведет на экран буквенное представление дня недели (Понедельник, вторник...).
$dayNumber = date('N');
switch ($dayNumber) {
    case 1:
        echo 'Понедельник';
        break;
    case 2:
        echo 'Вторник';
        break;
    case 3:
        echo 'Среда';
        break;
    case 4:
        echo 'Четверг';
        break;
    case 5:
        echo 'Пятница';
        break;
    case 6:
        echo 'Суббота';
        break;
    case 7:
        echo 'Воскесенье';
        break;
    default:
        echo 'Некорректный номер дня недели.';
        break;
    }

?>