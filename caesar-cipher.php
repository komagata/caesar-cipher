<?php
/*
Plugin Name: Caesar Cipher
Plugin URI: http://fjord.jp/
Description: Shortcode for Caesar Cipher
Version: 1.0.0
Author: Masaki Komagata <komagata@fjord.jp>
Author URI: http://fjord.jp/
*/
function caesar_cipher($atts) {
    $str = $atts[0];
    $r = '';
    $n = 3;
    for ($i = 0; $i < strlen($str); $i++)
        $r .= chr(ord($str[$i]) + $n);
    return "<script>(function(s){var r='';for(i=0;i<s.length;i++){r+=String.fromCharCode(s.charCodeAt(i)-{$n})};document.write(r)})('{$r}')</script>";
}
add_shortcode('caesar-cipher', 'caesar_cipher');
?>
