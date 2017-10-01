<?php

require_once dir . '/models/Geo_model.php';

class Geo_controller {

  function __construct() {
    header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Access-Control-Allow-Headers, Accept');
    header("Content-Type: application/json; charset=UTF-8");
  }

  function action_regions() {
    echo json_encode(Geo_model::get_regions_list());
    return 1;
  }

  function action_cities_by_region_id($id) {
    echo json_encode(Geo_model::get_cities_by_region_id($id[0]));
    return 1;
  }

}