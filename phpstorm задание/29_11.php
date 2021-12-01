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


