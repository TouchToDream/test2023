<?php

//Задание 1 (Записать любое условие с помощью тернарного оператора.)
$age = 25;
$isAdult = ($age >= 18) ? true : false;
echo sprintf('Is adult? %s <br/>',$isAdult ? 'Yes' : 'No');

//Задание 1.2. (Реализовать пункт 1 с помощью "ленивого" тернарного оператора)
$age = 15;
$isAdult = ($age >= 18) ?: false;
echo sprintf('Is adult? %s <br/>',$isAdult ? 'Yes' : 'No');

//Задание 3 (Создать переменную $count = 0; Реализовать цикл while, от $count до 10. Нужно вывести на экран значение $count на каждой второй итерации.)
$count = 0;
while($count <= 10){
    if ($count % 2 == 1) {
        echo sprintf('Count: %s <br/>',$count);
    }
    $count++;
}

//Задание 4 Создать цикл for:
//Задание 4.1 Выводить на экран fiz, если итерационная переменная делится на 2 нацело
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
      echo 'fiz' . '<br/>';
    }
  }

//Задание 4.2 Выводить на экран baz, если итерационная переменная делится на 3 нацело
for ($i = 1; $i <= 10; $i++) {
    if ($i % 3 == 0) {
      echo 'baz' . '<br/>';
    }
  }
  
//Задание 4.3 Выводить на экран fizbaz, если итерационная переменная делится и на 2 и на 3 нацело 
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0 && $i % 3 == 0) {
      echo 'fizbaz' . '<br/>';
    }
  }

//Задание 5 (Создать цикл for, который совершит 10 итераций. Нужно чтобы цикл вывел значения от 10 до 0)
for ($num = 10; $num >= 0; $num--) {
    echo $num . ' ';
}
echo '<br/>';

//Задание 6 (Создать пустой массив)
$array = [];

//Задание 6.1 (Построчно заполнить массив 5-ю элементами)
$array[5] = 'Element 1';
$array[6] = 'Element 2';
$array[7] = 'Element 3';
$array[8] = 'Element 4';
$array[9] = 'Element 5';
foreach($array as $key => $value){
  echo sprintf('key = %s, value = %s <br/>',$key,$value);
}
echo '<br/>';

//Задание 6.2 (Перевернуть массив(найти функцию для этого)
$reversedArray = array_reverse($array);
foreach($reversedArray as $key => $value){
  echo sprintf('key = %s, value = %s <br/>',$key,$value);
}

//Задание 6.3 (Вывести на экран длину массива)
echo count($array);
echo '<br/><br/>';


//Задание 7 (Создать массив сразу заполненный 5-ю значениями)
$newArray = [1,2,3,4,5];

// 7.1 - (Заменить значение под индексом 2, на любое строковое значение)
$newArray[2] = 'Any Text';

// 7.2 - (Вывести на экран значения массива поиндексно)
foreach($newArray as $key => $value){
  echo sprintf('key = %s, value = %s <br/>',$key,$value);
}
echo '<br/><br/>';

//Задание 8 (Создать новый массив)
$mergedArray = [];

//Задание 8.1 (Соединить массив из п.6 с массивом из п. 7 (2-мя разными способами))

//Способ 1 (array_merge)
$mergedArray = array_merge($array,$newArray);
foreach($mergedArray as $key => $value){
  echo sprintf('key = %s, value = %s <br/>',$key,$value);
}
echo '<br/><br/>';

//Способ 2 (оператор +)
$plusArray = [];
$plusArray = $newArray + $array;
foreach($plusArray as $key => $value){
  echo sprintf('key = %s, value = %s <br/>',$key,$value);
}
echo '<br/><br/>';

//Задание 9 (Создать массив у которого ключами будут числа не по порядку и значения тоже)
$disorderedArray = [];
$disorderedArray[3] ='Value 1';
$disorderedArray[5] ='Value 3';
$disorderedArray[2] ='Value 2';
$disorderedArray[1] ='Value 6';
$disorderedArray[0] ='Value 4';
foreach($disorderedArray as $key => $value){
  echo sprintf('key = %s, value = %s <br/>',$key,$value);
}
echo '<br/><br/>';

//Задание 9.1 (Отсортировать массив по значениям)
asort($disorderedArray);
foreach($disorderedArray as $key => $value){
  echo sprintf('key = %s, value = %s <br/>',$key,$value);
}
echo '<br/><br/>';

//Задание 9.2 (Отсортировать массив по ключам)
ksort($disorderedArray);
foreach($disorderedArray as $key => $value){
  echo sprintf('key = %s, value = %s <br/>',$key,$value);
}

?>