<meta charset="utf-8"/>
<?php

function hello($name) {
  $text = 'привет '.name;
  return $text;
}
echo  hello('Колян');





function one_function($num) {
  return $num * $num;              // Вернет квадрат числа
}

   echo one_function(5) //25  
        

//  Сделайте функцию, которая принимает параметром число от 1 до 7, а возвращает день недели на русском языке.




   function weekday($day_number) {
     $array = [1 => 'понедельник', 'вторник', 'среда', 'четверг', 'пятница', 'суббота', 'воскресенье'];
      return $array[$day_number];
   }
  echo "сегодня".  .weekday(3);  // сегодня среда
 


// Дан массив с числами. Проверьте, что в этом массиве есть число 5. Если есть - выведите 'да', а если нет - выведите 'нет'.

$arrey_nums = [4,9,23,15,4,5,3];
  $flag = false;          

 foreach ($arrey_nums as $value) {
     if ($value == 5){
      $flag = true;
      break;
     }
 }

 if ($flag === true) {
    echo 'Есть!';
 } else {
  echo 'Нет!';
 }

 // второй вариант с помощью пользовательской финкции

 $arrey_nums = [4,9,23,15,4,5,3];
  function one_function($arrey_nums) {
    foreach ($arrey_nums as $value) {
      if ($value == 5) {
        return true;
      }
    }
    return false ;
  }
 
for ($i=1; $i<=9 ; $i++) { 
  for ($j=1; $j <=$i ; $j++) { 
     echo $i;

  }
  echo '<br>';
}
            //Бывают задачи, в которых количество итераций цикла не известно заранее. К примеру: дано число, нужно делить его на 2 столько раз, пока результат не станет меньше 10. Нужно вывести число, которое при этом получится.

            // В этом случае мы не знаем количество итераций. Не беда - сделаем условием цикла условие пока число больше 10:
$num = 500;
while ($num > 10) {
  $num = $num / 2;
}
 echo $num;


          //Можно использовать и цикл for - в этом случае он будет без тела (без [] и в конце ставим точку с запятой):

 for ($num=500; $num < 10; $num = $num / 2);  
echo $num;
 
                               //Заполнение массивов
 $arrey = [];
 for ($i=0; $i < 10; $i++) { 
    $arrey[] = 'x';
 }
var_dump($arrey); // получили массив с 10 'x'


                                            //Переворот ассоциативного массива 

$arrey = ['a' => 1, 'b' => 2, 'c' => 3];
 $result = [];
  foreach ($arrey as $key => $value) {
    $result[$value] = $key;
  }
   var_dump($result);    // 1 => a итд.

                                             //Подсчет количества элементов

   $arrey = ['a', 'b', 'b', 'c', 'c', 'c'];
   $count = [];
       foreach ($arrey as  $value) {
         if (isset($count[$value])) {
           $count[$value]++;
         }
       }
 var_dump($count);
























?>