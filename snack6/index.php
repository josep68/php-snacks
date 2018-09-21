<?php include 'data.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title></title>
  </head>
  <body>
    <?php $paragraph = explode('.', $text); ?>
    <?php /*var_dump($paragraph);*/ ?>
    <?php foreach ($paragraph as $value) {; ?>
      <p><?php echo "$value"."."; ?></p>
    <?php }; ?>


  </body>
</html>
