<?php

return array(
  '^login$' => 'user/login',
  '^register$' => 'user/register',
  '^logout$' => 'user/logout',
  '^upload$' => 'load/upload',
  '^download/([a-zA-Z0-9.]+)' => 'load/download/$1',
  '^delete/([a-zA-Z0-9.]+)' => 'load/delete_file/$1',
  '^list$' => 'list/index',
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
