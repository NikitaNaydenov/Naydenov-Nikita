
// $str = 'fact';
// $f = mb_substr($str,0,1);
// $act = mb_substr($str,1);
// $f = mb_strtoupper($f);
// $str = $f.$act;
// echo $str . '<br>';

// $str2 = 'фамилия, имя, отчество';
// $arr2 = explode(", " ,$str2);
// echo $arr2[1] . " ";
// echo $arr2[0] . "<br>";

// $str3 = 'Привет, мир';
// echo substr_count($str3, 'и'). '<br>';

// $str4 = 'html css php';
// echo substr($str4, 0, 4) . '<br>';
// echo substr($str4, -7, 3) . '<br>';
// echo substr($str4, 9, 3) . '<br>';

// $str5= 'Проверьте, что она заканчивается на .png';
// if (substr($str5,-4) === '.png')
//     echo 'да' . '<br>';
// else echo 'нет' . '<br>';

// $n = 1000;
// $num = 20;
// while ($n <= 10){
//     $n /= 2;
//     $num ++;
// } 
// echo "Выводим результат деления {$n}<br>\n";
// echo "Выводим количество итераций {$num} <br>\n";



<html>
<head>
<?php
if (isset ($_POST['background'])){
    $background =  $_POST['background'];
} else {
    $background = "";
}if ($background == 1){
    $background = '<"img src="img/morning_forest.jpg">';
} elseif ($background == 2){
    $background = '<"img src="img/morning_forest.jpg">';
} elseif ($background == 3){
    $background = "0000FF";
} else {
    $fontcolor = "FFFFFF";
}
?>
<script>
function customRandomFunction(min, max) {
    document.getElementById("hiddenValue").value
                      = Math.floor(Math.random() * (max - min + 1)) + min;
}
</script>
</head>
<body style="background-color: #<?php echo $background; ?>; 

<?php echo $background; ?><!-- font color just for your reference -->
    <?php echo $background; ?><!-- font style just for your reference -->
    <h1 >sample Excersise 1</h1>
    <p>sample tex</p>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">  
    <input type="hidden" id="hiddenValue"  name = "color" value="1"> 
    <input type = "submit" onclick = "customRandomFunction(1,3)">
    </form>  
</div>
</body>
</html>

<?php
					

                    if (isset($_POST['button_morning']))
                    { 
                        function button_morning ()
                        { $button_morning = '<img src="img/morning_forest.jpg">';
                            return $button_morning;
                        }
                    }
                    echo button_morning();
                ?>