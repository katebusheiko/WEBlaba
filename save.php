<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем данные из формы и очищаем их от лишних пробелов/тегов
    $name = htmlspecialchars(trim($_POST['username']));
    $phone = htmlspecialchars(trim($_POST['phone']));
    $date = date('Y-m-d H:i:s');

    // Формируем строку для записи
    $text = "Дата: $date | Имя: $name | Телефон: $phone" . PHP_EOL;

    // Записываем в файл (флаг FILE_APPEND позволяет дописывать в конец, а не заменять)
    file_put_contents('requests.txt', $text, FILE_APPEND);

    // Возвращаем пользователя на главную страницу с сообщением об успехе
    echo "<script>alert('Заявка сохранена в файл!'); window.location.href='index.php';</script>";
}
?>