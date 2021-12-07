<?php

function showOtvet () {

   $correctAnswer = 0;

   $grade = Array (

      Array (
            "num"  => 7,
            "text" => "Вашим друзьям можно посочувствовать"
      ),

      Array (
            "num"  => 15,
            "text" => "Вы не лишены недостатков, но с вами можно ладить"
      ),

      Array (
            "num"  => 19,
            "text" => "У Вас покладистый характер"
      )

   );

   for ( $i = 1; $i <= 19; $i++ )
   !$_GET [ $i ] || $correctAnswer++;

   ?>

   Набранно <?php echo $correctAnswer; ?> баллов<br/><br/>
   <?php
      foreach ( $grade as $val )
            if ( $correctAnswer <= $val [ "num" ] ) {
               echo $val [ "text" ];
               break;
            }
   ?>
   <form>
      <input type="submit" value="Занова пройти тест" >
   </form>

   <?php

   exit;

}

empty ( $_GET [ "try" ] ) || showOtvet ();

?>


<html>
<body align="left">
	<h3>Анкета</h3>
<p><b>Введите ваше имя:</b><br>
<input type="text" size="40">
<br>
<form name="test" action="">
<h4> 1.  Считаете ли Вы, что у многих ваших знакомых хороший характер : </h4>

<input type="radio" name="1" value="0" checked> да <input type="radio" name="1" value="1"> нет

<h4> 2. Раздражают ли Вас мелкие повседневные обязанности?  : </h4>

<input type="radio" name="2" value="0" checked> да <input type="radio" name="2" value="1"> нет

<h4> 3.  Верите ли Вы, что ваши друзья преданы Вам?  : </h4>

<input type="radio" name="3" value="1" checked> да <input type="radio" name="3" value="0"> нет

<h4> 4.  Неприятно ли Вам, когда незнакомый человек делает Вам замечание?  : </h4>

<input type="radio" name="4" value="0" checked> да <input type="radio" name="4" value="1"> нет

<h4> 5. Способны ли Вы ударить собаку или кошку? : </h4>

<input type="radio" name="5" value="0" checked> да <input type="radio" name="5" value="1"> нет

<h4> 6.  Часто ли Вы принимаете лекарства? : </h4>

<input type="radio" name="6" value="0" checked> да <input type="radio" name="6" value="1"> нет

<h4> 7.  Часто ли Вы меняете магазин, в который ходите за продуктами?: </h4>

<input type="radio" name="7" value="0" checked> да <input type="radio" name="7" value="1"> нет

<h4> 8.  Продолжаете ли Вы отстаивать свою точку зрения, поняв, что ошиблись? : </h4>

<input type="radio" name="8" value="0" checked> да <input type="radio" name="8" value="1"> нет

<h4> 9.  Тяготят ли Вас общественные обязанности?  : </h4>

<input type="radio" name="9" value="1" checked> да <input type="radio" name="9" value="0"> нет

<h4> 10.  Способны ли Вы ждать более 5 минут, не проявляя беспокойства?   : </h4>

<input type="radio" name="10" value="1" checked> да <input type="radio" name="10" value="0"> нет
		
<h4> 11.  Часто ли Вам приходят в голову мысли о Вашей невезучести?   : </h4>

<input type="radio" name="11" value="0" checked> да <input type="radio" name="11" value="1"> нет
			
<h4> 12.  Сохранилась ли у Вас фигура по сравнению с прошлым?    : </h4>

<input type="radio" name="12" value="0" checked> да <input type="radio" name="12" value="1"> нет

<h4> 13.  Можете ли Вы с улыбкой воспринимать подтрунивание друзей?   : </h4>

<input type="radio" name="13" value="1" checked> да <input type="radio" name="13" value="0"> нет

<h4> 14. Нравится ли Вам семейная жизнь?    : </h4>

<input type="radio" name="14" value="1" checked> да <input type="radio" name="14" value="0"> нет

<h4> 15. Злопамятны ли Вы?    : </h4>

<input type="radio" name="15" value="0" checked> да <input type="radio" name="15" value="1"> нет

<h4> 16. Находите ли Вы, что стоит погода, типичная для данного времени года?     : </h4>

<input type="radio" name="16" value="0" checked> да <input type="radio" name="16" value="1"> нет

<h4> 17. Случается ли Вам с утра быть в плохом настроении?     : </h4>

<input type="radio" name="17" value="0" checked> да <input type="radio" name="17" value="1"> нет

<h4> 18. Раздражает ли Вас современная живопись?     : </h4>

<input type="radio" name="18" value="0" checked> да <input type="radio" name="18" value="1"> нет

<h4> 19.	Надоедает ли Вам присутствие чужих детей в доме более одного часа?     : </h4>

<input type="radio" name="19" value="1" checked> да <input type="radio" name="19" value="0"> нет




   
   <p><input type="submit" name="try" value="Проверить">
   <hr>
</body>
</html>