<?php require 'array_list.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>List of Friends</title>
  <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
</head>
<body>
<div class="panel">
<div class="header">
  <h2>My Friends</h2>
</div>
  <table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Color</th>
        <th>model</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach ($friends as $friend): ?>
      <tr>
        <td><?=$students['Name'] ?></td>
        <td><?=$students['color'] ?></td>
        <td><?=$students['model'] ?></td>
      </tr>
    <?php endforeach ?>
    </tbody>
  </table>
</div>
</body>
</html>
