<?php

$token = "6979104569:AAG0XrBalV_JEiVTiSlX-5a3VP6TZwbRtaA"; // Token Bot

$data = [
    'text' => "Tobat kau PENJAHAT !",
    'chat_id' => "7185259305" // Chat ID si pengirim pesan
];

for ($i = 1; $i < 6; ) {
    file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data));
}