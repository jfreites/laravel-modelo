<?php

/**
 * Modelo Bundle
 * 
 * Basic blade templating foundation for your views.
 * @author Carlos <carlos@koalabs.co>
 */
class Modelo {

  /**
   * Get a configuration variable
   *
   * @param  string $key
   * @return string
   */
  public static function get($key)
  {
    return Config::get('modelo::modelo.'.$key);
  }
  
}