<?php 
include 'data.php'; // Подключаем наши тексты

// Получаем ID из ссылки. Если ID нет, по умолчанию берем 1
$id = isset($_GET['id']) ? (int)$_GET['id'] : 1;

// Проверяем, есть ли статья с таким ID
if (!isset($articles[$id])) {
    die("Статья не найдена!");
}

$current_article = $articles[$id];
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><?php echo $current_article['title']; ?> - ValMari</title>
    <link rel="stylesheet" href="CSS/style.css">
    <style>
        .article-page { padding: 100px 0; line-height: 1.6; }
        .article-page__title { font-size: 36px; color: #333; margin-bottom: 20px; text-transform: uppercase; }
        .article-page__img { width: 100%; max-width: 800px; border-radius: 20px; margin-bottom: 30px; }
        .article-page__text { font-size: 18px; color: #666; max-width: 800px; }
        .btn-back { display: inline-block; margin-top: 30px; color: #55A630; text-decoration: none; font-weight: bold; }
    </style>
</head>
<body>

    <section class="article-page">
        <div class="container">
            <span style="color: #55A630;"><?php echo $current_article['subtitle']; ?></span>
            <h1 class="article-page__title"><?php echo $current_article['title']; ?></h1>
            
            <img src="<?php echo $current_article['image']; ?>" alt="" class="article-page__img">
            
            <div class="article-page__text">
                <?php echo $current_article['full_text']; ?>
            </div>
            
            <a href="index.php" class="btn-back">← Вернуться на главную</a>
        </div>
    </section>

</body>
</html>