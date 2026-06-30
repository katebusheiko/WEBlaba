<?php
session_start();
require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require_once 'products_data.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $phone = htmlspecialchars($_POST['phone']);
    $address = htmlspecialchars($_POST['address']);

    $order_list = "";
    $total = 0;
    
    // Сбор данных из объектов товаров
    foreach ($_SESSION['cart'] as $id) {
        foreach ($productsData as $p) {
            if ($p->id == $id) {
                $order_list .= "<li>" . $p->name . " — " . $p->price . " грн.</li>";
                $total += $p->price;
            }
        }
    }

    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'katebusheiko@gmail.com'; 
        $mail->Password   = 'elol ourn tsxl vbca'; // Вставь свой код из 16 букв
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        $mail->setFrom('katebusheiko@gmail.com', 'ValMari Shop');
        $mail->addAddress('katebusheiko@gmail.com'); 

        $mail->isHTML(true);
        $mail->Subject = "НОВЫЙ ЗАКАЗ от $name";
        $mail->Body = "<h2>Данные заказа:</h2><p>Имя: $name</p><p>Тел: $phone</p><ul>$order_list</ul><h3>ИТОГО: $total грн.</h3>";

        $mail->send();
        unset($_SESSION['cart']);
        echo "<script>alert('Заказ оформлен!'); window.location.href='index.php';</script>";
    } catch (Exception $e) { echo "Ошибка: {$mail->ErrorInfo}"; }
}
?>