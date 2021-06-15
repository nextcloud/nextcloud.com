<?php

if(session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

function IsValidCaptcha($captcha)
{
    if(isset($_SESSION['valid_captchas'][$captcha])) {
        unset($_SESSION['valid_captchas'][$captcha]);
        return true;
    }

    return false;
}

function GetCaptcha()
{
    $letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';

    $word = '';
    for ($i = 0; $i < 8;$i++) {
        $letter = $letters[random_int(0, strlen($letters)-1)];
        $word = $word . $letter;
    }
    $_SESSION['valid_captchas'][$word] = true;

    $image = imagecreate(80, 20);
    imagecolorallocate($image, 255, 255, 255);
    $text_color = imagecolorallocate($image, 0, 0, 0);
    imagestring($image, 5, 3, 2, $word, $text_color);

    ob_start();
    imagepng($image);
    $imagestring = ob_get_contents();
    ob_end_clean();
    imagedestroy($image);

    return $imagestring;
}
