<?
$str = 'fact';
$f = mb_substr($str,0,1);
$act = mb_substr($str,1);
$f = mb_strtoupper($f);
$str = $f.$act;
echo $str . '<br>';

$str2 = 'фамилия, имя, отчество';
$arr2 = explode(", " ,$str2);
echo $arr2[1] . " ";
echo $arr2[0] . "<br>";

$str3 = 'Привет, мир';
echo substr_count($str3, 'и'). '<br>';

$str4 = 'html css php';
echo substr($str4, 0, 4) . '<br>';
echo substr($str4, -7, 3) . '<br>';
echo substr($str4, 9, 3) . '<br>';

$str5= 'Проверьте, что она заканчивается на .png';
if (substr($str5,-4) === '.png')
    echo 'да' . '<br>';
else echo 'нет' . '<br>';

$str6 = '12355654375546';
$n = strlen($str6);
if ($n > 5)
    echo substr($str6, 0, 5) . '...'. '<br>';
else echo $str6 . '<br>';
$str7= 'abc abc abc abc';
echo str_replace(['a','b','c'], ['1','2','3'], $str7) . '<br>';

$str8 = 'abc abc abc';
echo strrpos($str8, 'c') . '<br>';

$str9 = 'html css php';
$arr3 = explode(' ', $str9);
print_r($arr3);
?>
