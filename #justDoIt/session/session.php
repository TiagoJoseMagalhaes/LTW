<?php
  if (session_status() == PHP_SESSION_NONE) {
    session_start();

    if (function_exists('mcrypt_create_iv')) {
      $_SESSION['UserAuthToken'] = bin2hex(mcrypt_create_iv(32, MCRYPT_DEV_URANDOM));
    }else {
      $_SESSION['UserAuthToken'] = bin2hex(openssl_random_pseudo_bytes(32));
    }

    $_SESSION['AuthRequestToken'] = hash_hmac('sha256', "AuthRequest" , $_SESSION['UserAuthToken']);
  }
?>
