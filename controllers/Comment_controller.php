<?php

require_once dir . '/models/Comment_model.php';

class Comment_controller {

  function action_new() {
    include_once dir . '/views/pages/comment/comment-new.php';
    return 1;
  }

  function action_add() {
    Comment_model::createComment($_POST);
    header('Location: /');
    return 1;
  }

  function action_remove_by_id($id) {
    Comment_model::removeById($id[0]);
    header('Location: /');
    return 1;
  }

  function action_detail_by_id($id) {
    $comments = Comment_model::getById($id[0]);
//    print_r($comments);
//    echo $comments;
    if (isset($comments) && count($comments) > 0) {
      $comment = $comments[0];
      include_once dir . '/views/pages/comment/comment-detail.php';
    } else {
      header('Location: /');
    }
    return 1;
  }
}