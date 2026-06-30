<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Стать моделью - ValMari</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    <section class="callback" style="padding: 100px 0; background: #f9f9f9; min-height: 100vh;">
        <div class="container">
            <div class="callback__card" style="background: white; padding: 40px; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
                <h2 class="callback__title">Заявка: Стать моделью</h2>
                <p class="callback__subtitle">Заполните данные для katebusheiko@gmail.com</p>
                
                <form action="send_mail.php" method="POST" class="callback__form" style="display: flex; flex-direction: column; gap: 15px; max-width: 450px; margin: 30px auto 0;">
                    <input type="text" name="last_name" class="callback__input" placeholder="Фамилия" required style="width: 100%; border: 1px solid #ddd;">
                    <input type="text" name="first_name" class="callback__input" placeholder="Имя" required style="width: 100%; border: 1px solid #ddd;">
                    <input type="tel" name="phone" class="callback__input" placeholder="Номер телефона" required style="width: 100%; border: 1px solid #ddd;">
                    <input type="email" name="email" class="callback__input" placeholder="Ваш Email" required style="width: 100%; border: 1px solid #ddd;">
                    
                    <button type="submit" class="callback__btn" style="width: 100%; cursor: pointer;">Отправить заявку</button>
                    <a href="index.php" style="text-align: center; color: #55A630; text-decoration: none; margin-top: 10px;">Назад на главную</a>
                </form>
            </div>
        </div>
    </section>
</body>
</html>