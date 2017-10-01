<?php

require_once dir . '/models/Comment_model.php';

class Index_controller {

  function action_index() {
    $comments = Comment_model::getList();
    include_once dir .'/views/pages/index.php';
    return 1;
  }
}