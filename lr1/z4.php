<?php
$n = 2; // номер варианта
$limit = $n + 5; // Итого 8 раз
$counter = 1;

$fullName = "Бушейко Екатерина";

do {
    echo $counter . ". " . $fullName . "<br>";
    $counter++;
} while ($counter <= $limit);
?>