<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Список заявок</title>
    <style>
        body { font-family: sans-serif; padding: 20px; }
        .log-entry { border-bottom: 1px solid #ccc; padding: 10px 0; }
    </style>
</head>
<body>
    <h1>Заявки из файла requests.txt</h1>
    <a href="index.php">Вернуться на сайт</a>
    <hr>

    <?php
    $file = 'requests.txt';
    if (file_exists($file)) {
        // Считываем данные из файла
        $content = file_get_contents($file);
        // Превращаем текст в массив строк и выводим
        $lines = explode(PHP_EOL, trim($content));
        
        foreach ($lines as $line) {
            echo "<div class='log-entry'>" . htmlspecialchars($line) . "</div>";
        }
    } else {
        echo "Заявок пока нет.";
    }
    ?>
</body>
</html>