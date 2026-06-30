<?php
require_once 'db.php';

$articles = [];

// Выполняем запрос к таблице новостей
$result = mysqli_query($link, "SELECT * FROM articles");

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $articles[$row['id']] = [
            'title' => $row['title'],
            'date'  => $row['date'],
            'text'  => $row['text']
        ];
    }
}
?>