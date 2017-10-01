<?php

require_once dir . '/models/Base_model.php';

class Statistic_model extends Base_model {

  static function get_regions_with_count() {
    $sql = 'SELECT region.*, count(comment.id) AS count_comment FROM region
            LEFT OUTER JOIN comment ON (region.id = comment.region_id)
            GROUP BY region.id
            HAVING count(comment.id) < 6';
    $result = self::sql_inner($sql);
    $result->execute();

    return $result->fetchAll(PDO::FETCH_ASSOC);
  }

  static function get_regions_with_count_more_five() {
    $sql = 'SELECT region.*, count(comment.id) AS count_comment FROM region
            LEFT OUTER JOIN comment ON (region.id = comment.region_id)
            GROUP BY region.id
            HAVING count(comment.id) > 5';
    $result = self::sql_inner($sql);
    $result->execute();

    return $result->fetchAll(PDO::FETCH_ASSOC);
  }

  static function get_cities_with_count($id) {
    $sql = 'SELECT city.title as city, city.id as id, count(comment.id) AS count_comment, region.title AS region FROM region
            LEFT JOIN city ON (region.id = city.region_id)
            LEFT OUTER JOIN comment ON (city.id = comment.city_id)
            WHERE region.id = :id
            GROUP BY city.id';
    $result = self::sql_inner($sql);
    $result->bindValue(':id', intval($id), PDO::PARAM_INT);
    $result->execute();

    return $result->fetchAll(PDO::FETCH_ASSOC);
  }

  static function get_comments_by_city_id($id) {
    $sql = 'SELECT * FROM city
            LEFT JOIN comment ON (city.id = comment.city_id)
            WHERE city.id = :id';
    $result = self::sql_inner($sql);
    $result->bindValue(':id', intval($id), PDO::PARAM_INT);
    $result->execute();

    return $result->fetchAll(PDO::FETCH_ASSOC);
  }

}