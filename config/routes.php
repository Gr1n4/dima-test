<?php

return array(
  '^comment/new$' => 'comment/new',
  '^comment/add$' => 'comment/add',
  '^comment/remove/([a-zA-Z0-9.]+)$' => 'comment/remove_by_id/$1',
  '^comment/detail/([a-zA-Z0-9.]+)$' => 'comment/detail_by_id/$1',
  '^statistic$' => 'statistic/index',
  '^statistic/region/([a-zA-Z0-9.]+)$' => 'statistic/comment_by_region_id/$1',
  '^statistic/city/([a-zA-Z0-9.]+)$' => 'statistic/comment_by_city_id/$1',
  '^geo/region$' => 'geo/regions',
  '^geo/region/([a-zA-Z0-9.]+)$' => 'geo/cities_by_region_id/$1',
  '^$' => 'index/index'
);
