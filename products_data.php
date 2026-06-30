<?php
require_once 'db.php';
require_once 'models/Product.php';

$productsData = [];

// Выполняем запрос через mysqli_query
$result = mysqli_query($link, "SELECT * FROM products");

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        // Создаем объект Product из строки базы данных
        $productsData[] = new Product(
            $row['id'], 
            $row['name'], 
            $row['price'], 
            $row['category']
        );
    }
}
?>