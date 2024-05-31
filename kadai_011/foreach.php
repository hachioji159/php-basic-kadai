<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <title>foreach分課題</title>
</head>

<body>
  <p>
    <?php
    $personal_data = [
      'id' => 1,
      '名前' => '侍太郎',
      '年齢' => 30
    ];

    foreach ($personal_data as $key => $value) {
      echo "{$key}：{$value}<br>";
    }
    ?>
  </p>
</body>

</html>