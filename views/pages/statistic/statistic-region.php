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
    <? foreach ($cities as $city): ?>
      <tr>
        <td><a href="<? echo '/statistic/city/' . $city['id']; ?>"><? echo $city['city'] ?></a></td>
        <td><a href="<? echo '/statistic/city/' . $city['id']; ?>"><? echo $city['count_comment'] ?></a></td>
      </tr>
    <? endforeach; ?>
    </tbody>
  </table>
</div>
<?php
include_once dir . '/views/layouts/footer.php';