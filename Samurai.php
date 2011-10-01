<?php

  /**
   * FeeFighter's Samurai payment gateway API client
   *
   * @version 0.0.1
   * @author Todd Zusman <toddzusman@gmail.com>
   * @copyright Copyright (c) 2011, Todd Zusman
   */

  class Samurai {

    const VERSION = '0.0.1';

    public static $merchant_key;
    public static $merchant_password;

  }

  if ( defined('SAMURAI_MERCHANT_KEY') )
    Samurai::$merchant_key = SAMURAI_MERCHANT_KEY;
  if ( defined('SAMURAI_MERCHANT_PASSWORD') )
    Samurai::$merchant_password = SAMURAI_MERCHANT_PASSWORD;

  require_once __DIR__.'/lib/SamuraiException.php';
  require_once __DIR__.'/lib/SamuraiMessage.php';
  require_once __DIR__.'/lib/SamuraiPaymentMethod.php';
  require_once __DIR__.'/lib/SamuraiProcessor.php';
  require_once __DIR__.'/lib/SamuraiRequest.php';
  require_once __DIR__.'/lib/SamuraiResponse.php';
  require_once __DIR__.'/lib/SamuraiTransaction.php';

?>
