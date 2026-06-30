<?php
// Подключаемся точно так же, как в твоей самостоятельной работе
$link = mysqli_connect('MySQL-8.4', 'root', '', 'valmari_db');

if (!$link) { 
    die("Ошибка подключения к базе ValMari: " . mysqli_connect_error()); 
}

// Устанавливаем кодировку
mysqli_set_charset($link, "utf8mb4");
?>