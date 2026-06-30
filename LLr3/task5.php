<!-- task5.php -->
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Задание 5: Фильтрация</title>
</head>
<body>
    <h1>Каталог товаров</h1>
    
    <form action="task5.php" method="GET">
        Категория:
        <select name="category">
            <option value="all">Все</option>
            <option value="electronics">Электроника</option>
            <option value="clothing">Одежда</option>
        </select>
        
        Мин. цена: <input type="number" name="min_price" value="0">
        <input type="submit" value="Фильтровать">
    </form>

    <?php
    // Симуляция данных (в реальности из БД)
    $products = [
        ['name' => 'Смартфон', 'cat' => 'electronics', 'price' => 50000],
        ['name' => 'Футболка', 'cat' => 'clothing', 'price' => 1500],
        ['name' => 'Ноутбук', 'cat' => 'electronics', 'price' => 90000],
        ['name' => 'Джинсы', 'cat' => 'clothing', 'price' => 4000],
    ];

    if (isset($_GET['category'])) {
        $filter_cat = $_GET['category'];
        $min_p = (int)$_GET['min_price'];

        echo "<h3>Результаты поиска:</h3><ul>";
        foreach ($products as $p) {
            // Проверяем условия фильтра
            $cat_match = ($filter_cat == 'all' || $p['cat'] == $filter_cat);
            $price_match = ($p['price'] >= $min_p);

            if ($cat_match && $price_match) {
                echo "<li>" . $p['name'] . " — " . $p['price'] . " руб.</li>";
            }
        }
        echo "</ul>";
    }
    ?>
</body>
</html>