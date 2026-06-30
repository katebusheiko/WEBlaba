<?php
session_start();

// 1. ПОДКЛЮЧАЕМ ФАЙЛЫ (Проверь, что пути верные!)
require_once 'products_data.php'; 
require_once 'controllers/ShopController.php';

// 2. ОБРАБОТКА КОРЗИНЫ
if (isset($_GET['add'])) {
    if (!isset($_SESSION['cart'])) { $_SESSION['cart'] = []; }
    $_SESSION['cart'][] = (int)$_GET['add'];
    header("Location: shop.php");
    exit;
}

// 3. ИНИЦИАЛИЗИРУЕМ КОНТРОЛЛЕР (ООП)
// Передаем в него данные $productsData из файла products_data.php
$shopController = new ShopController($productsData);

// 4. ПОЛУЧАЕМ ПАРАМЕТРЫ ИЗ ССЫЛКИ
$search = $_GET['search'] ?? '';
$cat = $_GET['cat'] ?? 'Все';
$sort = $_GET['sort'] ?? 'name';

// 5. ЗАПРАШИВАЕМ ТОВАРЫ У КОНТРОЛЛЕРА
// Контроллер сам сделает поиск, фильтр и сортировку внутри себя
$filteredProducts = $shopController->getProducts($search, $cat, $sort);

// 6. ПАГИНАЦИЯ
$limit = 3;
$total_items = count($filteredProducts);
$pages = ceil($total_items / $limit);
$current_page = (int)($_GET['page'] ?? 1);
$offset = ($current_page - 1) * $limit;
$products_on_page = array_slice($filteredProducts, $offset, $limit);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Магазин ValMari (MVC + OOP)</title>
    <link rel="stylesheet" href="CSS/style.css">
    <style>
        .shop { padding: 60px 0; }
        .shop__controls { display: flex; gap: 20px; margin-bottom: 40px; background: #f4f4f4; padding: 20px; border-radius: 10px; }
        .shop__grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px; }
        .product-card { border: 1px solid #eee; padding: 20px; border-radius: 10px; }
        .product-card__price { color: #55A630; font-weight: bold; font-size: 20px; }
        .pagination a { padding: 10px; border: 1px solid #ccc; text-decoration: none; margin-right: 5px; }
        .pagination a.active { background: #55A630; color: white; }
    </style>
</head>
<body>
<div class="container">
    <div class="shop">
        
        <!-- СТАТУС КОРЗИНЫ -->
        <div style="margin-bottom: 20px; display: flex; justify-content: space-between;">
            <a href="index.php" style="color: #55A630;">← На главную</a>
            <div>
                🛒 Товаров: <strong><?php echo isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0; ?></strong> 
                | <a href="cart.php" style="font-weight: bold; color: #333;">В корзину</a>
            </div>
        </div>

        <h1 style="margin-bottom: 30px;">Каталог (MVC Mode)</h1>

        <!-- ФОРМА УПРАВЛЕНИЯ -->
        <form method="GET" class="shop__controls">
            <input type="text" name="search" placeholder="Поиск..." value="<?php echo htmlspecialchars($search); ?>">
            <select name="cat">
                <option value="Все">Все категории</option>
                <option value="Курсы" <?php if($cat=='Курсы') echo 'selected'; ?>>Курсы</option>
                <option value="Косметика" <?php if($cat=='Косметика') echo 'selected'; ?>>Косметика</option>
            </select>
            <select name="sort">
                <option value="name" <?php if($sort=='name') echo 'selected'; ?>>По названию</option>
                <option value="price_asc" <?php if($sort=='price_asc') echo 'selected'; ?>>Дешевле</option>
                <option value="price_desc" <?php if($sort=='price_desc') echo 'selected'; ?>>Дороже</option>
            </select>
            <button type="submit" style="background: #55A630; color: white; border: none; padding: 8px 20px; cursor: pointer;">Ок</button>
        </form>

        <!-- ВЫВОД ТОВАРОВ (ОБЪЕКТЫ) -->
        <div class="shop__grid">
            <?php if (empty($products_on_page)): ?>
                <p>Ничего не найдено.</p>
            <?php else: ?>
                <?php foreach ($products_on_page as $p): ?>
                <div class="product-card">
                    <span style="color: #888; font-size: 12px;"><?php echo $p->category; ?></span>
                    <h3 style="margin: 10px 0;"><?php echo $p->name; ?></h3>
                    <div class="product-card__price"><?php echo $p->price; ?> грн.</div>
                    <a href="?add=<?php echo $p->id; ?>" style="display:block; margin-top:15px; background:#55A630; color:white; text-align:center; padding:10px; text-decoration:none; border-radius:5px;">В корзину</a>
                </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>

        <!-- ПАГИНАЦИЯ -->
        <div class="pagination" style="margin-top: 40px;">
            <?php for ($i = 1; $i <= $pages; $i++): ?>
                <a href="?page=<?php echo $i; ?>&search=<?php echo urlencode($search); ?>&cat=<?php echo urlencode($cat); ?>&sort=<?php echo $sort; ?>" 
                   class="<?php echo ($i == $current_page) ? 'active' : ''; ?>"><?php echo $i; ?></a>
            <?php endfor; ?>
        </div>
    </div>
</div>
</body>
</html>