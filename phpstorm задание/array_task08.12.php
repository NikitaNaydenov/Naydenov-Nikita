<?
// 1. Создать массив произвольной длины. Вывести его на экран. 
// Каждый четный элемент массива умножить на 10. Вывести полученный массив на экран.
$arr1 = [];
$n = 10;
for ($i=0; $i<=$n; $i++) {
	$arr1[$i] = mt_rand(2,5);

	if($i%2==0) {
		$arr1[$i] *=10;
		echo"<b>$arr1[$i]</b>". '<br>'; }
			else echo $arr1[$i]. '<br>';
}


//<!-- 2. Создать массив, заполненный случайными числами.
//Массив состоит из n элементов. С 0 по n/2 элемент массива обернуть в курсив,
//элементы с n/2 по n обернуть жирным. -->

echo '<br> Задача 2 </br>' . '</br>';

$n = 15;
$arr2 = [];
for ($i=0; $i<$n; $i++) {
    $arr2[] = mt_rand(1, 50);
}
foreach ($arr2 as $num) {
	if ($num >=0 && $num<=$n/2) {
		echo "<i>$num</i>". '<br>';
	}
	elseif ($num >$n/2 && $num<=$n)
		echo "<b>$num</b>" . '</br>';
}
//Создать массив произвольной длины. Посчитать количество
echo '<br> Задача 3 </br>' . '</br>';

$arr3 = array();
for($i=0; $i<15; $i++) {
    $arr3[] = mt_rand(0, 50);
}
echo count($arr3). '</br>';

//Создать массив, заполненный случайными числами.
//Вывести элементы числового массива, которые больше, чем элементы, стоящие перед ними.
//Например, дан массив [3, 9, 8, 4, 5, 1]. Следует вывести числа 9 и 5,
//так как перед ними стоят соответственно числа 3 и 4, которые меньше их.
echo '<br> Задача 4 </br>' . '</br>';
$arr4 = [3, 9, 8, 4, 5, 1];
foreach ($arr4 as $num) {
    if ($arr4[$num-1] < $arr4[$num]) {
        echo $arr4[$num]  . '<br>';
    }
}
$arr5 = array();
for($i=0; $i<5; $i++) {
    $arr5[] = mt_rand(0, 50);
    echo $arr5[$i]. '</br>';
}
for ($i=1; $i<count($arr5); $i++) {
    if ($arr5[$i-1] < $arr2[$i]) {
        echo $arr5[$i] . '<br>';
    }
}

//Дан массив, содержащий положительные и отрицательные числа.
//Заменить все элементы массива на противоположные по знаку.Например, задан массив [1, -5, 0, 3, -4].
//После преобразования должно получиться [-1, 5, 0, -3, 4].

echo '<br> Задача 5 </br>' . '</br>';

$arr6 = [1, 9, -2, 7, -6];
foreach ($arr6 as $key => $value) {
    echo $value*(-1). '<br>';
}