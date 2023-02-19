<?php
// Задание 1.
$city = 'Zaporizhzhya';
$street = 'Evropeiska';
$build = 20;
// Задание 2.
echo 'Город - ' . $city . '<br>';
echo 'Улица - ' . $street . '<br>';
echo 'Дом - ' . $build . '<br>';
echo '<br>';
// Задание 3.
print 'Город - ' . $city . '<br>';
print 'Улица - ' . $street . '<br>';
print 'Дом - ' . $build . '<br>';
echo '<br>';
//Задание 4.
$full_adress = $city . ' ' . $street . ' ' . $build;
echo $full_adress;
echo '<br>';
//Задание 5
$age = 31;
echo 'Мой возраст - ' . $age;
echo '<br>';
//Задание 6
$birthday = new DateTime('1991-08-04');
$today = new DateTime();
$period = date_diff($birthday, $today);
$month = $period->y * 12 + $period->m;
echo 'Количество месяцев c даты рождения ' . $month;
echo '<br>';
// Задание 7
$days = $period->days;
echo 'Количество дней c даты рождения ' . $days;
echo '<br>';
// Второй способ Задание 7 (вычисляем секунды от даты и переводим в дни)
$birthday = '1991-08-04';
$today = date('y-m-d');
$days = (strtotime($today) - strtotime($birthday)) / (60 * 60 * 24);
$rounded_days = round($days); // округлил дни
echo 'Количество дней c даты рождения способ 2 - ' . $rounded_days . '<br>';
// Задание 8 

unset($city, $street, $build, $full_adress, $age, $birthday, $today, $period, $month, $days, $rounded_days);
echo 'test ' . $full_adress;
?>