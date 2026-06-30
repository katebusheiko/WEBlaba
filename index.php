<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ValMari - Учебный центр косметологии</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>

    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="header__top-inner">
                    <button class="header__burger"><span></span><span></span><span></span></button>
                    <a href="/" class="logo"><img src="media/logo.svg" alt="ValMari">
                     <div class="logo__text">
                            Учебный центр<br>эстетической косметологии
                        </div></a>
                    
                    <div class="header__info">
                        <a href="tel:0800508622" class="header__phone"><img src="media/phone.svg" alt=""><span>0 (800) 508-622</span></a>
                        <div class="header__socials">
                            <a href="#"><img src="media/fb.svg" alt=""></a>
                            <a href="#"><img src="media/inst.svg" alt=""></a>
                        </div>
                        <div class="header__lang"><img src="media/flag.svg" alt=""><span class="lang-arrow"></span></div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="header__nav">
            <div class="container">
                <ul class="menu">
                    <li><a href="#" class="menu__link">Курсы обучения</a></li>
                    <li><a href="#" class="menu__link">Вебинары</a></li>
                    <li><a href="#" class="menu__link">Видео-уроки</a></li>
                    <li><a href="#" class="menu__link">Блог</a></li>
                    <li><a href="#about" class="menu__link">О нас</a></li>
                    <li><a href="#" class="menu__link">Прайс</a></li>
                    <li><a href="#" class="menu__link">Расписание</a></li>
                    <li><a href="#" class="menu__link">Акции</a></li>
                   <li><a href="shop.php" class="menu__link">Магазин</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <section class="hero" style="position: relative;">
            <div class="container">
                <div class="hero__inner">
                    <div class="hero__content">
                        <span class="hero__subtitle">Бесплатный вебинар</span>
                        <h1 class="hero__title">ПРОФЕССИЯ<br>КОСМЕТОЛОГ</h1>
                        <p class="hero__text">Приглашаем на бесплатный вебинар для профессиональных косметологов и интересующихся этой профессией</p>
                        <div class="hero__btns">
                            <a href="#" class="btn btn--fill">Зарегистрироваться</a>
                            <a href="#" class="btn btn--outline">Узнать подробнее</a>
                        </div>
                    </div>
                    <div class="hero__image"><img src="image/hero-doctors.png" alt=""></div>
                </div>
            </div>
            <div class="stats">
                <div class="container">
                    <div class="stats__inner">
                        <div class="stats__item"><div class="stats__num">4000+</div><div class="stats__desc">Сертификатов мы выдали</div></div>
                        <div class="stats__item"><div class="stats__num">3500+</div><div class="stats__desc">Моделей в нашей базе</div></div>
                        <div class="stats__item"><div class="stats__num">1500+</div><div class="stats__desc">Специалистов мы обучили</div></div>
                        <div class="stats__item"><div class="stats__num">5500+</div><div class="stats__desc">Довольных клиентов</div></div>
                    </div>
                </div>
            </div>
            <img src="media/bg-pattern.svg" alt="" class="hero__pattern">
        </section>

       <section class="courses">
    <div class="container">
        <h2 class="courses__title">Ближайшие обучения</h2>
        
        <div class="courses__slider-container">
            <!-- Сам слайдер -->
            <div class="courses__slider swiper">
                <div class="swiper-wrapper">
                    
                    <!-- Карточка 1 -->
                    <div class="swiper-slide">
                        <div class="course-card course-card--blue">
                            <div class="course-card__wrap">
                                <img src="image/course-card-1.png" class="course-card__img" alt="">
                                <div class="course-card__btns">
                                    <a href="#" class="btn-course btn-course--fill">Зарегистрироваться</a>
                                    <a href="#" class="btn-course btn-course--light">Подробнее</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Карточка 2 -->
                    <div class="swiper-slide">
                        <div class="course-card course-card--green">
                            <div class="course-card__wrap">
                                <img src="image/course-card-2.png" class="course-card__img" alt="">
                                <div class="course-card__btns">
                                    <a href="#" class="btn-course btn-course--fill">Зарегистрироваться</a>
                                    <a href="#" class="btn-course btn-course--light">Подробнее</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Карточка 3 -->
                    <div class="swiper-slide">
                        <div class="course-card course-card--teal">
                            <div class="course-card__wrap">
                                <img src="image/course-card-3.png" class="course-card__img" alt="">
                                <div class="course-card__btns">
                                    <a href="#" class="btn-course btn-course--fill">Зарегистрироваться</a>
                                    <a href="#" class="btn-course btn-course--light">Подробнее</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Карточка 4 (копия 1) -->
                    <div class="swiper-slide">
                        <div class="course-card course-card--blue">
                            <div class="course-card__wrap">
                                <img src="image/course-card-1.png" class="course-card__img" alt="">
                                <div class="course-card__btns">
                                    <a href="#" class="btn-course btn-course--fill">Зарегистрироваться</a>
                                    <a href="#" class="btn-course btn-course--light">Подробнее</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Карточка 5 (копия 2) -->
                    <div class="swiper-slide">
                        <div class="course-card course-card--green">
                            <div class="course-card__wrap">
                                <img src="image/course-card-2.png" class="course-card__img" alt="">
                                <div class="course-card__btns">
                                    <a href="#" class="btn-course btn-course--fill">Зарегистрироваться</a>
                                    <a href="#" class="btn-course btn-course--light">Подробнее</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Стрелочки -->
            <div class="swiper-button-prev custom-arrow"><img src="media/arrow-left.svg" alt=""></div>
            <div class="swiper-button-next custom-arrow"><img src="media/arrow-right.svg" alt=""></div>
        </div>

        <!-- Точки -->
        <div class="swiper-pagination"></div>
    </div>
</section>
<section class="about" id="about"> 
    <div class="container">
        <div class="about__inner">
            
            <!-- 1. КАРТИНКА (ОСТАЕТСЯ СЛЕВА) -->
            <div class="about__image">
                <img src="image/about-photo.jpg" alt="Центр ValMari">
            </div>

            <!-- 2. ТЕКСТОВЫЙ КОНТЕНТ (ТЕПЕРЬ ССЫЛКА ВНУТРИ НЕГО) -->
            <div class="about__content">
                <span class="about__subtitle">О нас</span>
                
                <h2 class="about__title">
                    <span class="brand-green">VALMARI</span> <br>
                    ВЕДУЩИЙ УЧЕБНЫЙ ЦЕНТР ЭСТЕТИЧЕСКОЙ КОСМЕТОЛОГИИ
                </h2>

                <div class="about__text">
                    <p>Описание может быть любое.</p>
                    <p>Более 5 лет мы проводим курсы сертифицированные курсы профессионального образования в области косметологии и индустрии красоты, здоровья и молодости</p>
                </div>

                <!-- ССЫЛКА ТЕПЕРЬ ТУТ: она будет всегда справа от картинки вместе с текстом -->
               <div class="about__link-wrapper">
    <a href="news.php" class="about__link">
    <span>Читать подробнее</span>
    <svg width="45" height="12" viewBox="0 0 45 12" fill="none">
         <path d="M0 6H43M43 6L38 1M43 6L38 11" stroke="#55A630" stroke-width="2"/>
    </svg>
</a>
</div>
            </div>

        </div>
    </div>
</section>

<!-- БЛОК ОБУЧЕНИЕ КОСМЕТОЛОГОВ -->
<section class="edu">
    <div class="container">
        <h2 class="edu__title">Обучение косметологов</h2>
        
        <div class="edu__grid">
            <a href="#" class="edu__item"><img src="image/edu-1.jpg" alt="Курсы"></a>
            <a href="#" class="edu__item"><img src="image/edu-2.jpg" alt="Онлайн"></a>
            <a href="#" class="edu__item"><img src="image/edu-3.jpg" alt="Мастер-классы"></a>
            <a href="#" class="edu__item"><img src="image/edu-4.jpg" alt="Расписание"></a>
            <a href="#" class="edu__item"><img src="image/edu-5.jpg" alt="Акции"></a>
        </div>
    </div>
</section>
<!-- БЛОК НАБОР МОДЕЛЕЙ -->
<section class="models">
    <div class="container">
        <div class="models__inner">
            
            <!-- Контентная часть -->
            <div class="models__content">
                <h2 class="models__title">ВЕДЕМ НАБОР МОДЕЛЕЙ</h2>
                
                <div class="models__text">
                    <p>Мы предлагаем свои услуги для моделей.</p>
                    <p>Выберите процедуру или несколько процедур и наш менеджер проконсультирует вас и назовет ближайшую дату, когда вы сможете получить эту процедуру.</p>
                </div>

                <!-- Кнопка -->
               <!-- Должно быть так: -->
<a href="model_form.php" class="models__btn">Стать моделью</a>          </div>

            <!-- Картинка -->
            <div class="models__image">
                <img src="image/model-recruitment.jpg" alt="процедура для модели">
            </div>

        </div>
    </div>
</section>
<!-- БЛОК МАСТЕР-КЛАССЫ -->
<section class="master">
    <div class="container">
        <h2 class="master__title">Мастер-классы</h2>
        <p class="master__subtitle">Мероприятия для повышения квалификации косметологов</p>
        
        <div class="master__slider-container">
            <div class="master__slider swiper">
                <div class="swiper-wrapper">
                    
                    <!-- Карточка 1 -->
                    <div class="swiper-slide">
                        <div class="mc-card">
                            <img src="image/mc-1.jpg" alt="" class="mc-card__img">
                            <div class="mc-card__footer">
                                <div class="mc-card__content">
                                    <span class="mc-card__date">3 ноября, 10:00-12:00</span>
                                    <h3 class="mc-card__name">10 возможностей неодимового лазера...</h3>
                                    <p class="mc-card__coach">Тренер: Юлия Щукина</p>
                                </div>
                                <div class="mc-card__aside">
                                    <div class="mc-card__price">2000 грн</div>
                                    <a href="#" class="mc-card__btn"><img src="media/arrow-white.svg" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Карточка 2 -->
                    <div class="swiper-slide">
                        <div class="mc-card">
                            <img src="image/mc-2.jpg" alt="" class="mc-card__img">
                            <div class="mc-card__footer">
                                <div class="mc-card__content">
                                    <span class="mc-card__date">20 ноября, 12:00-17:00</span>
                                    <h3 class="mc-card__name">Профессия косметолог. Семинар...</h3>
                                    <p class="mc-card__coach">Спикеры: Марина Спивак...</p>
                                </div>
                                <div class="mc-card__aside">
                                    <div class="mc-card__price" style="background:#f0faf0;">Бесплатно</div>
                                    <a href="#" class="mc-card__btn"><img src="media/arrow-white.svg" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Карточка 3 (копия 1) -->
                    <div class="swiper-slide">
                        <div class="mc-card">
                            <img src="image/mc-1.jpg" alt="" class="mc-card__img">
                            <div class="mc-card__footer">
                                <div class="mc-card__content">
                                    <span class="mc-card__date">3 ноября, 10:00-12:00</span>
                                    <h3 class="mc-card__name">10 возможностей неодимового лазера...</h3>
                                    <p class="mc-card__coach">Тренер: Юлия Щукина</p>
                                </div>
                                <div class="mc-card__aside">
                                    <div class="mc-card__price">2000 грн</div>
                                    <a href="#" class="mc-card__btn"><img src="media/arrow-white.svg" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Карточка 4 (копия 2) -->
                    <div class="swiper-slide">
                        <div class="mc-card">
                            <img src="image/mc-2.jpg" alt="" class="mc-card__img">
                            <div class="mc-card__footer">
                                <div class="mc-card__content">
                                    <span class="mc-card__date">20 ноября, 12:00-17:00</span>
                                    <h3 class="mc-card__name">Профессия косметолог. Семинар...</h3>
                                    <p class="mc-card__coach">Спикеры: Марина Спивак...</p>
                                </div>
                                <div class="mc-card__aside">
                                    <div class="mc-card__price" style="background:#f0faf0;">Бесплатно</div>
                                   <a href="#" class="mc-card__btn">
    <!-- Твоя длинная тонкая стрелка -->
    <img src="media/arrow-white.svg" alt="" class="mc-btn-icon">
</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Твои скачанные стрелочки -->
            <div class="swiper-button-prev master-arrow"><img src="media/arrow-left.svg" alt=""></div>
            <div class="swiper-button-next master-arrow"><img src="media/arrow-right.svg" alt=""></div>
        </div>

        <!-- Кружочки снизу -->
        <div class="swiper-pagination master-pagination"></div>
    </div>
</section>
<!-- БЛОК ПОЧЕМУ МЫ -->
<section class="why">
    <div class="container">
        <h2 class="why__title">Почему мы?</h2>
        
        <div class="why__grid">
    
    <!-- Карточка 01 -->
    <div class="why__item">
        <div class="why__card-inner">
            <!-- Лицевая сторона -->
            <div class="why__card-front why__item--white">
                <span class="why__num">01</span>
                <h3 class="why__name">Преподаватели</h3>
            </div>
            <!-- Обратная сторона -->
            <div class="why__card-back">
                <p>Наши преподаватели имеют многолетний опыт в сфере косметологии и практический стаж работы.</p>
            </div>
        </div>
    </div>

    <!-- Карточка 02 -->
    <div class="why__item">
        <div class="why__card-inner">
            <div class="why__card-front why__item--green">
                <span class="why__num why__num--white">02</span>
                <h3 class="why__name">Сертификаты</h3>
            </div>
            <div class="why__card-back why__item--green">
                <p>Удостоверение и сертификаты нашего центра являются лучшей рекомендацией при приеме на работу.</p>
            </div>
        </div>
    </div>

    <!-- Карточка 03 -->
    <div class="why__item">
        <div class="why__card-inner">
            <div class="why__card-front why__item--white">
                <span class="why__num">03</span>
                <h3 class="why__name">Квалификация</h3>
            </div>
            <div class="why__card-back">
                <p>Ежегодно более 2000 специалистов повышают свой уровень в наших просторных кабинетах.</p>
            </div>
        </div>
    </div>

</div>
</section>
<!-- БЛОК ОБРАТНЫЙ ЗВОНОК -->
<section class="callback">
    <div class="container">
        <div class="callback__card">
            <h2 class="callback__title">Закажите обратный звонок</h2>
            <p class="callback__subtitle">Оставьте заявку в форме и наш менеджер свяжется с вами</p>
            
         <form action="save.php" method="POST" class="callback__form">
    <!-- Добавили name="username" и name="phone" -->
    <input type="text" name="username" class="callback__input" placeholder="Ваше имя" required>
    <input type="tel" name="phone" class="callback__input" placeholder="Ваш номер телефона" required>
    <button type="submit" class="callback__btn">Отправить</button>
</form>
        </div>
    </div>
</section>
<!-- ФИНАЛЬНЫЙ ФУТЕР -->
<footer class="footer">
    <div class="container">
        <div class="footer__inner">
            
            <!-- Левая часть: Живая карта Google -->
            <div class="footer__map">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2563.856272583804!2d36.22384667683935!3d50.01402241801041!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4127a0e38600100d%3A0x63390c5040e34c9c!2z0LLRg9C70LjRhtGPINCa0LvQvtGH0LrRltCy0YHRjNC60LAsIDMsINCl0LDRgNC60ZbQsiwg0KXQsNGA0LrRltCy0YHRjNC60LAg0L7QsdC70LDRgdGC0YwsIDYxMDAw!5e0!3m2!1sru!2sua!4v1715525000000!5m2!1sru!2sua" 
                    width="700" height="610" style="border:0;" allowfullscreen="" loading="lazy">
                </iframe>
            </div>

            <!-- Правая часть: Темный блок с инфо -->
            <div class="footer__info">
                <div class="footer__logo">
                    <img src="media/logo.svg" alt="ValMari">
                </div>
                
                <a href="tel:0800508622" class="footer__phone">0 (800) 508-622</a>
                <address class="footer__address">Харьков, Клочковская, д. 3</address>

                <div class="footer__nav">
                    <ul class="footer__menu">
                        <li><a href="#">Курсы обучения</a></li>
                        <li><a href="#">Вебинары</a></li>
                        <li><a href="#">Видео-уроки</a></li>
                        <li><a href="#">Прайс</a></li>
                        <li><a href="#">Расписание</a></li>
                    </ul>
                    <ul class="footer__menu">
                        <li><a href="#">Акции</a></li>
                        <li><a href="shop.php" class="menu__link">Магазин</a></li>
                        <li><a href="#">О нас</a></li>
                        <li><a href="#">Блог</a></li>
                    </ul>
                </div>

                <div class="footer__socials">
                    <!-- Твои новые названия иконок F.svg и I.svg -->
                    <a href="#"><img src="media/F.svg" alt="facebook"></a>
                    <a href="#"><img src="media/I.svg" alt="instagram"></a>
                </div>

                <a href="#" class="footer__policy">Политика конфиденциальности</a>
            </div>

        </div>
    </div>
</footer>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="JS/script.js"></script>
</body>
</html>