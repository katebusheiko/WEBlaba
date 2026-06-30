<!-- task4.php -->
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Задание 4: Заказ пиццы</title>
</head>
<body>
    <h1>Оформление заказа пиццы</h1>
    <form action="task4.php" method="POST">
        <!-- Текстовое поле -->
        Ваше имя: <input type="text" name="customer" required><br><br>

        <!-- Переключатели (radio) -->
        Размер пиццы:<br>
        <input type="radio" name="size" value="Маленькая" checked> Маленькая<br>
        <input type="radio" name="size" value="Средняя"> Средняя<br>
        <input type="radio" name="size" value="Большая"> Большая<br><br>

        <!-- Флажки (checkbox) -->
        Добавки:<br>
        <input type="checkbox" name="toppings[]" value="Сыр"> Сыр<br>
        <input type="checkbox" name="toppings[]" value="Пепперони"> Пепперони<br>
        <input type="checkbox" name="toppings[]" value="Грибы"> Грибы<br><br>

        <!-- Выпадающий список (select) -->
        Способ доставки:<br>
        <select name="delivery">
            <option value="Курьер">Курьер</option>
            <option value="Самовывоз">Самовывоз</option>
        </select><br><br>

        <input type="submit" name="order" value="Оформить заказ">
    </form>

    <?php
    if (isset($_POST['order'])) {
        echo "<h2>Ваш заказ принят!</h2>";
        echo "Клиент: " . htmlspecialchars($_POST['customer']) . "<br>";
        echo "Размер: " . $_POST['size'] . "<br>";
        
        echo "Добавки: ";
        if (!empty($_POST['toppings'])) {
            // Массив чекбоксов склеиваем в строку
            echo implode(", ", $_POST['toppings']);
        } else {
            echo "без добавок";
        }
        echo "<br>";
        
        echo "Доставка: " . $_POST['delivery'];
    }
    ?>
</body>
</html>