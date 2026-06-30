<?php
session_start();
// Подключаем данные (теперь там массив объектов $productsData)
require_once 'products_data.php';

// Очистка корзины
if (isset($_GET['clear'])) {
    unset($_SESSION['cart']);
    header("Location: cart.php");
    exit;
}

$cart_items = [];
$total_price = 0;

// Логика поиска товаров в корзине
if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $id) {
        // Ищем объект товара по его ID в новом массиве $productsData
        foreach ($productsData as $p) {
            if ($p->id == $id) { // Используем ->id (ООП стиль)
                $cart_items[] = $p;
                $total_price += $p->price; // Используем ->price
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Корзина (MVC+ООП) - ValMari</title>
    <link rel="stylesheet" href="CSS/style.css">
    <style>
        .cart-page { padding: 60px 0; }
        .cart-table { width: 100%; border-collapse: collapse; margin: 30px 0; }
        .cart-table th, .cart-table td { padding: 15px; border-bottom: 1px solid #eee; text-align: left; }
        .total-block { text-align: right; font-size: 24px; font-weight: bold; color: #55A630; margin-top: 20px; }
        .btn-order { background: #55A630; color: white; padding: 15px 30px; text-decoration: none; border-radius: 5px; display: inline-block; }
    </style>
</head>
<body>
<div class="container">
    <div class="cart-page">
        <a href="shop.php" style="color: #55A630; text-decoration: none;">← Вернуться в магазин</a>
        <h1 style="margin-top: 20px;">Ваша корзина</h1>

        <?php if (empty($cart_items)): ?>
            <p style="margin-top: 20px;">Ваша корзина пуста.</p>
        <?php else: ?>
            <table class="cart-table">
                <thead>
                    <tr>
                        <th>Товар</th>
                        <th>Категория</th>
                        <th>Цена</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($cart_items as $item): ?>
                    <tr>
                        <td><?php echo $item->name; ?></td>
                        <td><?php echo $item->category; ?></td>
                        <td><?php echo $item->price; ?> грн.</td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <div class="total-block">Итого: <?php echo $total_price; ?> грн.</div>

            <div style="margin-top: 30px; display: flex; justify-content: space-between; align-items: center;">
                <a href="?clear=1" style="color: #ff4d4d; text-decoration: none;">Очистить корзину</a>
                <a href="checkout.php" class="btn-order">Перейти к оформлению</a>
            </div>
        <?php endif; ?>
    </div>
</div>
</body>
</html>