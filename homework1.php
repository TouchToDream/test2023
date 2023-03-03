<?php
// Задание 1.
$city = 'Zaporizhzhya';
$street = 'Evropeiska';
$build = 20;
// Задание 2.
echo 'Город - ' . $city . '<br>';
echo 'Улица - ' . $street . '<br>';
echo 'Дом - ' . $build . '<br>';
echo 'Город - ' . $city . ', Улица - ' . $street . ', Дом - ' . $build . '.' . '<br>';
echo '<br>';
// Задание 3.
print 'Город - ' . $city . '<br>';
print 'Улица - ' . $street . '<br>';
print 'Дом - ' . $build . '<br>';
print 'Город - ' . $city . ', Улица - ' . $street . ', Дом - ' . $build . '.' . '<br>';
echo '<br>';
//Задание 4.
$full_adress = 'Город - ' . $city . ', Улица - ' . $street . ', Дом - ' . $build . '.' . '<br>';
echo $full_adress;
echo '<br>';
//Задание 5
$age = 31;
echo 'Мой возраст - ' . $age;
echo '<br>';
//Задание 6
$birthday = new DateTime('1991-08-04');
$today = new DateTime();
$diff = date_diff($birthday, $today);
$month = $diff->y * 12 + $diff->m;
echo 'Количество месяцев c даты рождения ' . $month;
echo '<br>';
// Задание 7 (не стал повторять переменные $birthday, $today)
$days = $diff->days;
echo 'Количество дней c даты рождения ' . $days;
echo '<br>';
// Второй способ Задание 7 (вычисляем секунды от даты и переводим в дни)
$birthday = '1991-08-04';
$today = date('y-m-d');
$days = (strtotime($today) - strtotime($birthday)) / (60 * 60 * 24);
$rounded_days = round($days); // округлил дни
echo 'Количество дней c даты рождения способ 2 - ' . $rounded_days . '<br>';
// Задание 8 
unset($city, $street, $build, $full_adress, $age, $birthday, $today, $diff, $month, $days, $rounded_days);
echo 'test unset' . $full_adress;
?>