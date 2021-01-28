<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| HybridAuth settings
| -------------------------------------------------------------------------
| Your HybridAuth config can be specified below.
|
| See: https://github.com/hybridauth/hybridauth/blob/v2/hybridauth/config.php
*/
$config['hybridauth'] = array(
  "providers" => array(
    "OpenID" => array(
      "enabled" => FALSE,
    ),
    "Yahoo" => array(
      "enabled" => FALSE,
      "keys" => array("id" => "", "secret" => ""),
    ),
    "Google" => array(
      "enabled" => true,
      "keys" => array("id" => "518054883659-ekqqsgjikp4tgqvp3oah7e25vi0pkipa.apps.googleusercontent.com", "secret" => "cXy1Xbh58F5bjTMd0XiW2MZX"),
    ),
    "Facebook" => array(
      "enabled" => true,
      "keys" => array("id" => "361142984424780", "secret" => "98fb3e9093570a51cf5d14d41b721d59"),
      "trustForwarded" => FALSE,
    ),
    "Twitter" => array(
      "enabled" => FALSE,
      "keys" => array("key" => "", "secret" => ""),
      "includeEmail" => FALSE,
    ),
    "LinkedIn" => array(
      "enabled" => FALSE,
      "keys" => array("id" => "", "secret" => ""),
    ),
  ),
  // If you want to enable logging, set 'debug_mode' to true.
  // You can also set it to
  // - "error" To log only error messages. Useful in production
  // - "info" To log info and error messages (ignore debug messages)
  "debug_mode" => ENVIRONMENT === 'development',
  // Path to file writable by the web server. Required if 'debug_mode' is not false
  "debug_file" => APPPATH . 'logs/hybridauth.log',
);
