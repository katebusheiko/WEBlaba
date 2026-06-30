<!-- task1.php -->
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Задание 1: GET запрос</title>
</head>
<body>
    <h1>Передача данных через GET</h1>
    <!-- Форма отправляет данные методом GET на эту же страницу -->
    <form action="LLR3.php" method="GET">
        Имя: <input type="text" name="username"><br><br>
        Возраст: <input type="number" name="age"><br><br>
        <input type="submit" value="Отправить">
    </form>

    <?php
    // Проверяем, переданы ли данные в массиве $_GET
    if (isset($_GET['username']) && isset($_GET['age'])) {
        $name = htmlspecialchars($_GET['username']); // Очистка данных для безопасности
        $age = htmlspecialchars($_GET['age']);
        
        echo "<h3>Результат:</h3>";
        echo "Привет, $name! Тебе $age лет.<br>";
        echo "Данные были переданы через URL.";
    }
    ?>
</body>
</html>