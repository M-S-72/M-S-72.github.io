<?php
$content = file_get_contents("php://input");
$update = json_decode($content, true);
$chatID = $update["message"]["chat"]["id"];
if ($chatID > 0) {
 
 file_get_contents("https://api.telegram.org/bot729490368:AAFwNZsQe-PMqpnDHjdqXh9RPhwRBC48FMA/sendMessage?chat_id=".$chatID."&text=Hallo!");
}
?>
