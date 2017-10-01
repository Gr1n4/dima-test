<?php
include_once dir . '/views/layouts/header.php';
?>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <table class="table">
          <thead>
          <tr>
            <th>Middle name</th>
            <th>First name</th>
            <th>Comment</th>
            <th>Detail</th>
            <th>Remove</th>
          </tr>
          </thead>
          <tbody>
          <?php foreach ($comments as $comment): ?>
            <tr>
              <td><?php echo $comment['middle_name'] ?></td>
              <td><?php echo $comment['first_name'] ?></td>
              <td><?php echo $comment['comment'] ?></td>
              <td><a href="<?php echo "/comment/remove/" . $comment['id'] ?>">Remove</a></td>
              <td><a href="<?php echo "/comment/detail/" . $comment['id'] ?>">Detail</a></td>
            </tr>
          <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
<?php
include_once dir . '/views/layouts/footer.php';
