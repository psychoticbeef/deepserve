<?php

trait DeepServe_Trait_Singleton {
  protected static $_instance = null;

  public static function get_instance() {
    if (is_null(static::$_instance)) static::$_instance = new static;
    return static::$_instance;
  }
}

