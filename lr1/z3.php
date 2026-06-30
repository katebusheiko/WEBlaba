<?php


function calculateX($a) {
    // 1. Считаем числитель: 2*a + sin(abs(3*a))
    $numerator = 2 * $a + sin(abs(3 * $a));
    // 2. Делим на 3.56 и извлекаем корень sqrt()
    $result = sqrt($numerator / 3.56);
if($numerator / 3.56<0){
    return "Ошибка, отрицательное число под корнем";
}
    return $result;
}

// Проверяем работу функции
$myValue = -100;
$x = calculateX($myValue);

echo "При значении a = $myValue <br>";
echo "Результат X = " . $x . "<br>";


?>