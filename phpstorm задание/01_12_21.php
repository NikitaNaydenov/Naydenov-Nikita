<?
function f1($x,$y){
if ($x > $y) {
return $x;
}
return $y;
}
$a = 41;
$b = 105;
echo 'Наибольшее число: ' . f1($a, $b) . '<br>';
echo '<br>';

function f2($x, $y){
$b = hypot($x,$y);
return $b;
}
$res= f2(10,20);
echo 'Гипотенуза треугольника: ' .  $res. '<br>';
echo '<br>';

function f3($x){
while ($x < 1000000){
        $x = $x * 10;
echo $x . '<br>';
}
echo "Вы достигли предела" . '<br>';
}
echo '<br>';

f3(10);
echo '<br>';
function f4($n){
$arr =[];
for ($i = 0; $i < $n; $i++){
$arr[] = mt_rand(0,100);
   }
   return $arr;
}
print_r(f4(10));
echo '<br>';

function f5($arr){
   return array_sum($arr)/count($arr);
}
$arr1= [10,20,30,40];
echo '<br>' . f5($arr1) . '<br>';
echo '<br>';

function f6($str){
   $arr = explode(' ', $str);
      return count($arr);
}
$str= "abc abc abc";
echo f6($str) . '<br>';
echo '<br>';

function f7($n){
   $num1 = 0;
   $num2 = 1;
   $counter = 0;
   while ($counter < $n){
      echo ' '.$num1;
      $num3 = $num2 + $num1;
      $num1 = $num2;
      $num2 = $num3;
      $counter = $counter + 1;
   }
}
$n = 20;
f7($n);