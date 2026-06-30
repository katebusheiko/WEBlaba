<?php include 'data.php'; ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Новости центра - ValMari</title>
    <link rel="stylesheet" href="CSS/style.css">
    <style>
        .news-page { padding: 80px 0; background: #fdfdfd; }
        .news-container { max-width: 800px; margin: 0 auto; }
        .news-item { background: #fff; padding: 30px; border-left: 4px solid #55A630; margin-bottom: 30px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); }
        .news-item__date { color: #888; font-size: 14px; margin-bottom: 10px; display: block; }
        .news-item__title { font-size: 24px; color: #333; margin-bottom: 15px; font-weight: bold; }
        .news-item__text { font-size: 16px; color: #555; line-height: 1.6; }
        .back-link { display: inline-block; margin-bottom: 40px; color: #55A630; text-decoration: none; font-weight: bold; }
    </style>
</head>
<body>
    <div class="news-page">
        <div class="container news-container">
            <a href="index.php" class="back-link">← Вернуться на главную</a>
            <h1 style="margin-bottom: 40px; font-size: 32px; text-transform: uppercase;">Новости нашего центра</h1>

            <?php foreach($articles as $item): ?>
            <div class="news-item">
                <span class="news-item__date"><?php echo $item['date']; ?></span>
                <h2 class="news-item__title"><?php echo $item['title']; ?></h2>
                <p class="news-item__text"><?php echo $item['text']; ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>