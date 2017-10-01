<?php

require_once dir . '/models/Statistic_model.php';

class Statistic_controller {

  function action_index() {
    $regions = Statistic_model::get_regions_with_count();
    $regionsMoreFive = Statistic_model::get_regions_with_count_more_five();
//    print_r($regions);
    include_once dir . '/views/pages/statistic/statistic.php';
    return 1;
  }

  function action_comment_by_region_id($id) {
    $cities = Statistic_model::get_cities_with_count($id[0]);
//    print_r($cities);
    include_once dir . '/views/pages/statistic/statistic-region.php';
    return 1;
  }

  function action_comment_by_city_id($id) {
    $comments = Statistic_model::get_comments_by_city_id($id[0]);
//    print_r($comments);
    include_once dir . '/views/pages/statistic/statistic-city.php';
    return 1;
  }
}