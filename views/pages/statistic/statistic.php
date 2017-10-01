<?php
include_once dir . '/views/layouts/header.php';
?>
<div class="container">
  <h1>Statistic</h1>
  <table class="table">
    <thead>
    <tr>
      <th>Region</th>
      <th>Number of comments</th>
    </tr>
    </thead>
    <tbody>
    <? foreach ($regionsMoreFive as $region): ?>
      <tr>
        <td><a href="<? echo '/statistic/region/' . $region['id']; ?>"><? echo $region['title'] ?></a></td>
        <td><a href="<? echo '/statistic/region/' . $region['id']; ?>"><? echo $region['count_comment'] ?></a></td>
      </tr>
    <? endforeach; ?>
    </tbody>
  </table>
  <table class="table">
    <thead>
      <tr>
        <th>Region</th>
        <th>Number of comments</th>
      </tr>
    </thead>
    <tbody>
    <? foreach ($regions as $region): ?>
      <tr>
        <td><a href="<? echo '/statistic/region/' . $region['id']; ?>"><? echo $region['title'] ?></a></td>
        <td><a href="<? echo '/statistic/region/' . $region['id']; ?>"><? echo $region['count_comment'] ?></a></td>
      </tr>
    <? endforeach; ?>
    </tbody>
  </table>
</div>
<?php
include_once dir . '/views/layouts/footer.php';

