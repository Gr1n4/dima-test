<?php

require_once dir . '/models/Base_model.php';

class Geo_model extends Base_model {

  static function get_regions_list() {
    $sql = 'SELECT * FROM region';
    $result = self::sql_inner($sql);
    $result->execute();

    $regions = $result->fetchAll(PDO::FETCH_ASSOC);
    if ($regions && count($regions) > 0) {
      return $regions;
    }
    return false;
  }

  static function get_cities_by_region_id($id) {
    $sql = 'SELECT * FROM `region` LEFT JOIN `city` ON (`region`.`id` = `city`.`region_id`) WHERE `region`.`id` = :id';
    $result = static::sql_inner($sql);
    $result->bindParam(':id', intval($id), PDO::PARAM_INT);
    $result->execute();

    $cities = $result->fetchAll(PDO::FETCH_ASSOC);
    return $cities;
  }

}