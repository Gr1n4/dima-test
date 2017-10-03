<?php
include_once dir . '/views/layouts/header.php';
?>
<div class="container">
  <h1>Statistic by region</h1>
  <table class="table">
    <thead>
    <tr>
      <th>Cities</th>
      <th>Number of comments</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($cities as $city): ?>
      <tr>
        <td><a href="<?php echo '/statistic/city/' . $city['id']; ?>"><?php echo $city['city'] ?></a></td>
        <td><a href="<?php echo '/statistic/city/' . $city['id']; ?>"><?php echo $city['count_comment'] ?></a></td>
      </tr>
    <?php endforeach; ?>
    </tbody>
  </table>
</div>
<?php
include_once dir . '/views/layouts/footer.php';