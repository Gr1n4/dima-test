<?php
include_once dir . '/views/layouts/header.php';
?>
<div class="container">
  <h1>Comment new</h1>
  <?php
  if (!empty($error)) {
    echo "<h1>$error</h1>";
  }
  ?>
  <form action="/comment/add" method="post">
    <div class="form-group">
      <label>First name <i class="fa fa-star"></i></label>
      <input type="text" class="form-control" name="first_name" required>
    </div>
    <div class="form-group">
      <label>Middle name <i class="fa fa-star"></i></label>
      <input type="text" class="form-control" name="middle_name" required>
    </div>
    <div class="form-group">
      <label>Last name</label>
      <input type="text" class="form-control" name="last_name">
    </div>
    <div class="form-group">
      <label for="select-region">Region</label>
      <select class="form-control" id="select-region" name="region_id"></select>
    </div>
    <div class="form-group">
      <label for="select-city">City</label>
      <select class="form-control" id="select-city" name="city_id"></select>
    </div>
    <div class="form-group">
      <label>Phone number</label>
      <input type="tel" class="form-control" name="phone" maxlength="12">
    </div>
    <div class="form-group">
      <label>E-mail</label>
      <input type="email" class="form-control" name="email" pattern='/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/'>
    </div>
    <div class="form-group">
      <label>Comment <i class="fa fa-star"></i></label>
      <textarea class="form-control" name="comment" rows="4" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
  <script src="/views/assets/js/comment-new.js"></script>
<?php
include_once dir . '/views/layouts/footer.php';
