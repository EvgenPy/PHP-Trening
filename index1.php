<?php

function pr ($s) {

    echo "<pre>";
    print_r($s);
    echo "</pre>";
}

function SetMonth($days, $dayName) {

    if (($days >= 28) and ($days <=31)) {
        $arDays = array('Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресенье');

        for ($j = 0; $j < count($arDays); $j++) {
            if ($dayName == $arDays[$j]) {
                $start = $j;
            }
        }
        if (isset($start)) {
            for ($i = $start; $i < $days + $start; $i++) {
                $day = $i % 7;
                $arMonth[] = $arDays[$day];
            }
            return $arMonth;
        } else {
            return 'Такого дня недели не найдено. День недели задавайте с большой буквы, например "Пятница"';
        }
    } else{
        return 'Некоректное количество дней в месяце';
    }
}

$arResult = SetMonth(28,'Среда');

pr($arResult);
