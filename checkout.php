<?php
session_start();
// Подключаем данные (там теперь объекты Product внутри $productsData)
require_once 'products_data.php';

// Если корзина пуста, возвращаем в магазин
if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
    header("Location: shop.php");
    exit;
}

$total_price = 0;
$items_text = ""; 

// Проходим по корзине и ищем объекты товаров
foreach ($_SESSION['cart'] as $id) {
    foreach ($productsData as $p) {
        if ($p->id == $id) { // Используем стрелочку ->id
            $total_price += $p->price; // Используем стрелочку ->price
            $items_text .= "- " . $p->name . " (" . $p->price . " грн)\n";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Оформление заказа - ValMari</title>
    <link rel="stylesheet" href="CSS/style.css">
    <style>
        .checkout-page { padding: 60px 0; max-width: 600px; margin: 0 auto; }
        .order-summary { background: #f9f9f9; padding: 20px; border-radius: 10px; margin-bottom: 30px; border: 1px dashed #55A630; }
        .checkout-form input { width: 100%; padding: 12px; margin-bottom: 15px; border: 1px solid #ddd; border-radius: 5px; }
        .btn-confirm { background: #55A630; color: white; width: 100%; padding: 15px; border: none; border-radius: 5px; cursor: pointer; font-size: 18px; }
    </style>
</head>
<body>
<div class="container">
    <div class="checkout-page">
        <a href="cart.php" style="color: #55A630; text-decoration: none;">← Вернуться в корзину</a>
        <h1 style="margin: 20px 0;">Оформление заказа</h1>

        <div class="order-summary">
            <h3>Ваш заказ:</h3>
            <pre style="font-family: sans-serif; font-size: 14px; line-height: 1.6;"><?php echo $items_text; ?></pre>
            <hr>
            <p style="font-size: 20px;">К оплате: <strong><?php echo $total_price; ?> грн.</strong></p>
        </div>

        <form action="confirm_order.php" method="POST" class="checkout-form">
            <input type="text" name="name" placeholder="Ваше Имя и Фамилия" required>
            <input type="tel" name="phone" placeholder="Номер телефона" required>
            <input type="text" name="address" placeholder="Город и отделение почты" required>
            <button type="submit" class="btn-confirm">Подтвердить заказ</button>
        </form>
    </div>
</div>
</body>
</html>