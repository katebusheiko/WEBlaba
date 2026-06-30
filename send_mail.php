<?php
// Подключаем файлы библиотеки
require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mail = new PHPMailer(true);

    try {
        // Настройки сервера
        $mail->isSMTP();                                            // Отправка через SMTP
        $mail->Host       = 'smtp.gmail.com';                       // Сервер Gmail
        $mail->SMTPAuth   = true;                                   // Включаем авторизацию
        $mail->Username   = 'katebusheiko@gmail.com';                 // Твой логин Gmail
        $mail->Password   = 'elol ourn tsxl vbca';    // Тот самый код от Google
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Шифрование
        $mail->Port       = 587;                                    // Порт для TLS

        // Получатели
        $mail->setFrom('katebusheiko@gmail.com', 'ValMari Site');
        $mail->addAddress('katebusheiko@gmail.com');               // Кому придет письмо

        // Контент письма
        $mail->isHTML(true);
        $mail->Subject = 'Новая заявка на модель';
        
        $lastName = htmlspecialchars($_POST['last_name']);
        $firstName = htmlspecialchars($_POST['first_name']);
        $phone = htmlspecialchars($_POST['phone']);
        $email = htmlspecialchars($_POST['email']);

        $mail->Body = "
            <h2>Заявка с сайта ValMari</h2>
            <p><b>Фамилия:</b> $lastName</p>
            <p><b>Имя:</b> $firstName</p>
            <p><b>Телефон:</b> $phone</p>
            <p><b>Email пользователя:</b> $email</p>
        ";

        $mail->send();
        echo "<script>alert('Сообщение реально отправлено на почту!'); window.location.href='index.php';</script>";
    } catch (Exception $e) {
        echo "Ошибка отправки: {$mail->ErrorInfo}";
    }
}
?>