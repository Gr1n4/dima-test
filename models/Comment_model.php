<?php

require_once dir . '/models/Base_model.php';

class Comment_model extends Base_model {

  static function getList() {
    $sql = 'SELECT * FROM `comment`';
    $result = self::sql_inner($sql);
    $result->execute();

    return $result->fetchAll(PDO::FETCH_ASSOC);
  }

  static function createComment($data) {
    $sql = 'INSERT INTO `comment` 
            (`first_name`, `last_name`, `middle_name`, `region_id`, `city_id`, `phone`, `email`, `comment`) 
            VALUES (:first_name, :last_name, :middle_name, :region_id, :city_id, :phone, :email, :comment)';
    $result = self::sql_inner($sql);
    $result->bindValue(':first_name', $data['first_name'], PDO::PARAM_STR);
    $result->bindValue(':last_name', $data['last_name'], PDO::PARAM_STR);
    $result->bindValue(':middle_name', $data['middle_name'], PDO::PARAM_STR);
    $result->bindValue(':region_id', intval($data['region_id']), PDO::PARAM_INT);
    $result->bindValue(':city_id', intval($data['city_id']), PDO::PARAM_INT);
    $result->bindValue(':phone', $data['phone'], PDO::PARAM_STR);
    $result->bindValue(':email', $data['email'], PDO::PARAM_STR);
    $result->bindValue(':comment', $data['comment'], PDO::PARAM_STR);
    $result->execute();

    return $result->fetchAll(PDO::FETCH_ASSOC);
  }

  static function removeById($id) {
    $sql = 'DELETE FROM `comment` WHERE `id`=:id';
    $result = self::sql_inner($sql);
    $result->bindValue(':id', intval($id), PDO::PARAM_INT);
    $result->execute();

    return $result;
  }

  static function getById($id) {
    $sql = 'SELECT *, `region`.`title` as `region`, `city`.`title` as `city` FROM comment LEFT JOIN city ON (`comment`.`city_id`=`city`.`id`) LEFT JOIN region ON (`comment`.`region_id`=`region`.`id`) WHERE `comment`.`id`=:id';
    $result = self::sql_inner($sql);
    $result->bindValue(':id', intval($id), PDO::PARAM_INT);
    $result->execute();

    $comments = $result->fetchAll(PDO::FETCH_ASSOC);
    if ($comments) {
      return $comments;
    }
    return false;
  }

}