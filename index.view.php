<html>
<head>
<title></title>
</head>
<body>
  <h1>Task for the Day</h1>
<ul>
  <?php foreach ($tasks as $heading => $value) : ?>
    <li>
      <strong><?= ucwords($heading); ?>: </strong>
      <?= is_bool($value) ? $value ? '&#9989;' : '&#10062;' : $value; ?>
    </li>
  <?php endforeach; ?>

</ul>
</body>
</html>
