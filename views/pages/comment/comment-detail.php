<?php
include_once dir . '/views/layouts/header.php';
?>
<div class="container">
  <div class="jumbotron">
    <div class="row">
      <div class="col-lg-4">
        <p class="lead"><? echo $comment['middle_name'] ?></p>
      </div>
      <div class="col-lg-4">
        <p class="lead"><? echo $comment['first_name'] ?></p>
      </div>
      <div class="col-lg-4">
        <p class="lead"><? echo $comment['last_name'] ?></p>
      </div>
    </div>
    <hr class="my-4">
    <div class="row">
      <div class="col-lg-6">
        <p class="lead">Region</p>
      </div>
      <div class="col-lg-6">
        <p class="lead"><? echo $comment['region'] ?></p>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <p class="lead">City</p>
      </div>
      <div class="col-lg-6">
        <p class="lead"><? echo $comment['city'] ?></p>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <p class="lead">Phone number</p>
      </div>
      <div class="col-lg-6">
        <p class="lead"><? echo $comment['phone'] ?></p>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <p class="lead">E-mail</p>
      </div>
      <div class="col-lg-6">
        <p class="lead"><? echo $comment['email'] ?></p>
      </div>
    </div>
    <hr class="my-4">
    <p><? echo $comment['comment']; ?></p>
    <p class="lead">
      <a class="btn btn-primary" href="<? echo '/comment/remove/' . $comment['id']; ?>" role="button">Remove</a>
    </p>
  </div>
</div>

<?php
include_once dir . '/views/layouts/footer.php';