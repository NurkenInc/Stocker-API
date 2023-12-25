
<?php

class Database {
  private static ?Database $instance = null;

  private function __construct(public array $config) {

  }

  public static function getInstance(array $config): Database {
    if (self::$instance === null) {
      self::$instance = new Database($config);
    }

    return self::$instance;
  }
}