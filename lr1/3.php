<?php

// Скалярные типы данных
$product_title = "Видеокарта RTX 4060"; // String (строка)
$stock_quantity = 12;                   // Integer (целое число)
$base_price = 35000.99;                 // Float (число с точкой)
$is_in_stock = true;                    // Boolean (логический тип)
$sale_label = null;                     // NULL (специальный тип)

// Вывод информации о типах через gettype()
echo "<b>Проверка типов данных:</b><br>";
echo "Товар: $product_title — тип: " . gettype($product_title) . "<br>";
echo "Кол-во: $stock_quantity — тип: " . gettype($stock_quantity) . "<br>";
echo "Цена: $base_price — тип: " . gettype($base_price) . "<br>";
echo "Наличие: " . ($is_in_stock ? "Есть" : "Нет") . " — тип: " . gettype($is_in_stock) . "<br>";
echo "Метка: " . gettype($sale_label) . "<hr>";

// === ПРИВЕДЕНИЕ ТИПОВ (ЯВНОЕ И НЕЯВНОЕ) ===
echo "<b>Приведение типов:</b><br>";

$price_string = "45000.50 рублей"; 
$integer_price = (int)$price_string;   // Явное приведение к целому (станет 45000)
$float_price = (float)$price_string;   // Явное приведение к дробному (станет 45000.5)

echo "Исходная строка: '$price_string'<br>";
echo "Явный (int): $integer_price<br>";
echo "Явный (float): $float_price<br>";

// Неявное приведение (PHP сам меняет тип в выражении)
$sum = $stock_quantity + "5 штук"; // Integer + String (PHP приведет строку к числу 5)
echo "Результат неявного сложения: $sum <hr>";

// === ПРЕДОПРЕДЕЛЁННЫЕ ПЕРЕМЕННЫЕ ===
echo "<b>Использование встроенных переменных PHP:</b><br>";
echo "Протокол сервера: " . $_SERVER['SERVER_PROTOCOL'] . "<br>";
echo "Метод запроса: " . $_SERVER['REQUEST_METHOD'] . "<br>";
echo "Версия PHP на сервере: " . PHP_VERSION;
// 1. Арифметические операции
$num1 = 25;
$num2 = 7;

echo "<b>Арифметика:</b><br>";
echo "Сложение: " . ($num1 + $num2) . "<br>";
echo "Вычитание: " . ($num1 - $num2) . "<br>";
echo "Умножение: " . ($num1 * $num2) . "<br>";
echo "Деление: " . ($num1 / $num2) . "<br>";
echo "Остаток от деления (25 % 7): " . ($num1 % $num2) . "<br>";
echo "Возведение в степень (7^2): " . ($num2 ** 2) . "<hr>";

// 2. Строковые операции
$name = "Бушейко";
$surname = "Екатерина";
$full_name = $name . " " . $surname; // Склеивание строк (конкатенация)

$info = "Должность: ";
$info .= "Разработчик"; // Присваивание с объединением (.=)

echo "<b>Строки:</b><br>";
echo "Полное имя: $full_name<br>";
echo $info . "<hr>";

// 3. Операции сравнения
$x = 15;
$y = "15";

echo "<b>Сравнение:</b><br>";
echo "Равенство (15 == '15'): " . ($x == $y ? 'Истина' : 'Ложь') . "<br>";
echo "Тождество (тип и значение 15 === '15'): " . ($x === $y ? 'Истина' : 'Ложь') . "<br>";
echo "Больше/Меньше (15 > 10): " . ($x > 10 ? 'Да' : 'Нет') . "<br>";
echo "Комбинированное сравнение (15 <=> 20): " . ($x <=> 20) . " (-1 значит меньше)<hr>";

// 4. Логические операции
$is_admin = true;
$has_access = false;

echo "<b>Логика:</b><br>";
echo "Оператор И (&&): " . ($is_admin && $has_access ? 'Доступ разрешен' : 'Отказано') . "<br>";
echo "Оператор ИЛИ (||): " . ($is_admin || $has_access ? 'Доступ разрешен' : 'Отказано') . "<br>";
echo "Инверсия (!has_access): " . (!$has_access ? 'Истина' : 'Ложь') . "<hr>";

// 5. Инкремент и декремент
$counter = 50;
echo "<b>Инкремент и декремент:</b><br>";
echo "Исходное число: $counter<br>";
echo "Префиксный (++): " . (++$counter) . " (сначала прибавил, потом вывел)<br>";
echo "Постфиксный ($counter++): " . ($counter++) . " (вывел старое, потом прибавил)<br>";
echo "Итог: $counter<hr>";

// 6. Приоритет выполнения
$calc1 = 10 + 5 * 2;   // Сначала умножение (20)
$calc2 = (10 + 5) * 2; // Сначала скобки (30)

echo "<b>Приоритет:</b><br>";
echo "Без скобок (10 + 5 * 2) = $calc1<br>";
echo "Со скобками ((10 + 5) * 2) = $calc2";

// 1. Условные операторы (if, elseif, else)
$user_score = 74; // Баллы студента за тест

echo "<b>Проверка через if-elseif-else:</b><br>";
if ($user_score >= 90) {
    echo "Результат: Отлично! Вы получили 5.<br>";
} elseif ($user_score >= 70) {
    echo "Результат: Хорошо. Ваша оценка 4.<br>";
} elseif ($user_score >= 50) {
    echo "Результат: Удовлетворительно. Оценка 3.<br>";
} else {
    echo "Результат: Тест не пройден. Нужно пересдать.<br>";
}

// Краткая форма условия (тернарный оператор)
$access_status = ($user_score >= 50) ? "Допущен к практике" : "Не допущен";
echo "Статус доступа: $access_status <hr>";

// 2. Оператор выбора (switch)
$order_status = "processing"; // Статус заказа

echo "<b>Работа с оператором switch:</b><br>";
switch ($order_status) {
    case "new":
        echo "Заказ только что создан.<br>";
        break;
    case "processing":
        echo "Заказ находится в обработке у менеджера.<br>";
        break;
    case "completed":
        echo "Заказ успешно доставлен.<br>";
        break;
    default:
        echo "Неизвестный статус заказа.<br>";
        break;
}
echo "<hr>";

// 3. Циклы (операторы повторения)
echo "<b>Демонстрация работы циклов:</b><br>";

// Цикл for (вывод чисел)
echo "Счетчик через for: ";
for ($i = 1; $i <= 5; $i++) {
    echo "$i ";
}
echo "<br>";

// Цикл while (пока условие верно)
$counter = 3;
echo "Обратный отсчет через while: ";
while ($counter > 0) {
    echo "$counter... ";
    $counter--;
}
echo "Старт!<br>";

// Цикл foreach (для перебора списков)
$technologies = ["PHP", "Apache", "MySQL", "Nginx"];
echo "Список технологий (foreach):<ul>";
foreach ($technologies as $tech) {
    echo "<li>Серверное ПО: $tech</li>";
}
echo "</ul>";
// 1. Обычная функция с параметрами по умолчанию
// $tax_rate имеет значение 20, если его не передать при вызове
function calculatePrice($base_cost, $tax_rate = 20) {
    $total = $base_cost + ($base_cost * ($tax_rate / 100));
    return $total;
}

// 2. Функция для красивого вывода (не возвращает значение, а сразу печатает)
function showMessage($text, $is_error = false) {
    $color = $is_error ? "red" : "green";
    echo "<p style='color: $color;'>Уведомление: $text</p>";
}

// 3. Стрелочная функция (доступна с PHP 7.4)
// Используется для коротких операций в одну строку
$discount_price = fn($price, $sale) => $price - ($price * ($sale / 100));

// --- Применение функций ---

$product_price = 1500;

// Вызов функции расчета цены с налогом
$final_cost = calculatePrice($product_price); 
echo "Цена товара ($product_price) с налогом 20%: <b>$final_cost</b> руб.<br>";

// Вызов функции с измененным налогом (13% вместо 20%)
$custom_tax = calculatePrice($product_price, 13);
echo "Цена товара с налогом 13%: <b>$custom_tax</b> руб.<br>";

// Вызов стрелочной функции для расчета скидки 15%
$price_with_sale = $discount_price($final_cost, 15);
echo "Итог после применения скидки 15%: <b>$price_with_sale</b> руб.<hr>";

// Вызов функций вывода сообщений
showMessage("Все расчеты выполнены успешно!");
showMessage("Обнаружена ошибка в данных!", true);

// 4. Демонстрация области видимости
$outside_var = "Я снаружи";

function testScope() {
    $inside_var = "Я внутри";
    // echo $outside_var; // Выдаст ошибку, так как функция не видит внешние переменные
    echo "Внутри функции доступна только: $inside_var<br>";
}

testScope();

$browsers = array("Chrome", "Firefox", "Opera", "Edge");
$browsers[] = "Safari"; // Добавляем элемент в конец

// Ассоциативный массив (ключ => значение)
$laptop = array(
    "brand" => "ASUS",
    "model" => "Vivobook",
    "ram" => 16,
    "ssd" => 512
);

// Многомерный массив (таблица данных)
$students_list = array(
    array("name" => "Алексей", "age" => 19, "city" => "Москва"),
    array("name" => "Мария", "age" => 20, "city" => "Питер"),
    array("name" => "Игорь", "age" => 18, "city" => "Казань")
);

// --- 2. Обработка и вывод ---

echo "<b>Второй браузер в списке:</b> " . $browsers[1] . "<br>";
echo "<b>Модель ноутбука:</b> " . $laptop["model"] . "<hr>";

echo "<b>Список студентов (перебор многомерного массива):</b><br>";
echo "<ul>";
foreach ($students_list as $student) {
    echo "<li>Студент: " . $student["name"] . " (" . $student["city"] . ")</li>";
}
echo "</ul><hr>";

// --- 3. Встроенные функции обработки ---

echo "<b>Работа с функциями массивов:</b><br>";

// Сортировка обычного массива по алфавиту
sort($browsers);
echo "Браузеры по алфавиту: " . implode(", ", $browsers) . "<br>";

// Поиск в массиве
if (in_array("Firefox", $browsers)) {
    echo "Браузер Firefox найден в списке!<br>";
}

// Фильтрация (оставим студентов, которым 19 и больше)
$adults = array_filter($students_list, function($item) {
    return $item["age"] >= 19;
});

echo "Количество студентов 19+ лет: " . count($adults) . "<br>";

// Получение всех ключей ассоциативного массива
$laptop_specs = array_keys($laptop);
echo "Характеристики ноутбука: " . implode(", ", $laptop_specs);
$word1 = "Программирование";
$word2 = "на PHP";
$full_phrase = $word1 . " " . $word2 . " — это круто!"; // Склеиваем через точку

echo "<b>Оригинальная строка:</b> $full_phrase <br><hr>";

// 2. Длина строки (Работа с кириллицей)
// Обычная strlen считает байты (русские буквы весят по 2 байта)
// mb_strlen считает именно символы
echo "Длина в байтах (strlen): " . strlen($full_phrase) . "<br>";
echo "Длина в символах (mb_strlen): " . mb_strlen($full_phrase) . "<br><hr>";

// 3. Изменение регистра (Верхний и Нижний)
echo "ВЕРХНИЙ РЕГИСТР: " . mb_strtoupper($full_phrase) . "<br>";
echo "нижний регистр: " . mb_strtolower($full_phrase) . "<br><hr>";

// 4. Поиск и замена в тексте
$target = "круто";
$replacement = "эффективно";
$new_phrase = str_replace($target, $replacement, $full_phrase);

echo "После замены слова: $new_phrase <br>";

// Поиск позиции слова (где начинается слово 'PHP')
$position = mb_strpos($full_phrase, "PHP");
echo "Слово 'PHP' начинается с позиции: $position <br><hr>";

// 5. Вырезание части строки (подстрока)
// Вырежем первые 16 символов
$only_first_word = mb_substr($full_phrase, 0, 16);
echo "Первое слово (вырезано): $only_first_word <br><hr>";

// 6. Безопасность (Очистка от лишних пробелов и защита от взлома)
$dirty_input = "   <script>alert('Hacked!');</script> Привет!   ";

// trim() убирает пробелы по бокам
$trimmed = trim($dirty_input);
// htmlspecialchars() превращает < и > в текст, чтобы скрипт не сработал
$safe_output = htmlspecialchars($trimmed);

echo "<b>Безопасный вывод текста:</b> " . $safe_output;
$numbers = array(12.5, -7, 44, 3.14, 18);
$price = 450.678;

echo "<b>Математика:</b><br>";
echo "Абсолютное значение -7: " . abs(-7) . "<br>";
echo "Округление 450.678 (round): " . round($price, 2) . " руб.<br>";
echo "Округление вверх (ceil): " . ceil($price) . "<br>";
echo "Минимальное из списка: " . min($numbers) . "<br>";
echo "Случайное число (от 1 до 100): " . rand(1, 100) . "<br><hr>";

// --- 2. Работа с датой, временем и календарем ---
// Устанавливаем временную зону
date_default_timezone_set('Europe/Moscow');

$current_time = time(); // Метка времени в секундах
echo "<b>Дата и время:</b><br>";
echo "Сегодня: " . date("d.m.Y H:i") . "<br>";
echo "День недели: " . date("l") . "<br>";

// Расчеты с датой
$deadline = strtotime("+10 days"); // Прибавляем 10 дней к текущей дате
echo "Крайний срок (через 10 дней): " . date("d.m.Y", $deadline) . "<br>";

$birthday = mktime(0, 0, 0, 9, 1, 2024); // 1 сентября 2024
echo "1 сентября 2024 — это был день №" . date("z", $birthday) . " в году.<hr>";

// --- 3. Функции обработки массивов (продвинутые) ---
$data_array = array(10, 20, 10, 40, 50, 20);

echo "<b>Обработка массивов:</b><br>";
// Сумма всех элементов
echo "Сумма баллов: " . array_sum($data_array) . "<br>";

// Удаление дубликатов
$unique_data = array_unique($data_array);
echo "Массив без повторов: " . implode(", ", $unique_data) . "<br>";

// Переворот массива
$reversed = array_reverse($unique_data);
echo "Массив задом наперед: " . implode(", ", $reversed) . "<hr>";

// --- 4. Финальный пример (Строки + Математика) ---
$raw_stats = "Итоговая сумма: 5400.55 рублей";

// Извлекаем только число из строки (функция обработки строк + приведение типов)
$only_price = (float)mb_substr($raw_stats, 16); 
$discount_price = $only_price * 0.9; // Скидка 10%

echo "<b>Интеграция функций:</b><br>";
echo "Извлеченная цена: $only_price <br>";
echo "Цена со скидкой 10%: " . round($discount_price, 2) . " руб.";
?>
