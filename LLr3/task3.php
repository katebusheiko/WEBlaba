<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Задание 3: Регистрация</title>
</head>
<body>
    <h1>Регистрация нового пользователя</h1>
    <form action="task3.php" method="POST">
        ФИО: <input type="text" name="full_name" required><br><br>
        Email: <input type="email" name="email" required><br><br>
        Пароль: <input type="password" name="pass1" required><br><br>
        Повторите пароль: <input type="password" name="pass2" required><br><br>
        <input type="submit" value="Зарегистрироваться">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['full_name'];
        $email = $_POST['email'];
        $p1 = $_POST['pass1'];
        $p2 = $_POST['pass2'];

        if ($p1 !== $p2) {
            echo "<p> Ошибка: Пароли не совпадают!</p>";
        } else {
            echo "<p>Успешная регистрация для пользователя: $name (Email: $email)</p>";
        }
    }
    ?>
</body>
</html>