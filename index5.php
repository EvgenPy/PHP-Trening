<?php

echo "Выводим простые числа от 1 до 1000 <br>";

$arr_simple = array(); //все простые числа

for ($num=1; $num<=1000; $num++){

    GetSimpleNumber($num, $arr_simple);

}

var_dump($arr_simple);

function GetSimpleNumber($i, &$arr_simple) {


    if($i == 1){

        return;

    } elseif ($i == 2) {  //Если чесло простое то выводим

        $arr_simple[] = $i;
        echo $i . "<br>";
        return;

    }

    //пробегае по всем простым числам
   foreach ($arr_simple as $simple) {

       if ((int) ($i / $simple)  == ($i / $simple)) {
           //нашли делитель
           return;
       }
    }
    $arr_simple[] = $i;
    echo $i . "<br>";


}

