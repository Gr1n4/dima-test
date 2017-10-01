<?php

class Base_model {
  private static $db;
  static function get_connection() {
    if (empty(self::$db)) {
      self::$db = Db::connect();
      return self::$db;
    } else {
      return self::$db;
    }
  }

  static function sql_inner($sql_string) {
    $db = self::get_connection();
    $result = $db->prepare($sql_string);
    return $result;
  }
}