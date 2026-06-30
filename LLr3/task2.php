<!-- task2.php -->
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Задание 2: Авторизация</title>
</head>
<body>
    <h1>Форма авторизации</h1>
    <form action="task2.php" method="POST">
        Логин: <input type="text" name="login" required><br><br>
        Пароль: <input type="password" name="password" required><br><br>
        <input type="submit" value="Войти">
    </form>

    <?php
    // Обработка данных после нажатия кнопки "Войти"
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $login = $_POST['login'];
        $password = $_POST['password'];
        echo "<h3>Данные получены:</h3>";
        echo "Логин: " . htmlspecialchars($login) . "<br>";
        echo "Пароль: " . htmlspecialchars($password) . " (передан скрыто)";
    }
    ?>
</body>
</html>