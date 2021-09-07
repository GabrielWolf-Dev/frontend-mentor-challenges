<?php include_once('config.php'); ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo INCLUDE_PATH; ?>favicon-32x32.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>styles/main.css">
  <title>Frontend Mentor | Bookmark landing page</title>
</head>
<body>

  <?php
    $url = isset($_GET['url']) ? $_GET['url'] : 'home';
    $path = 'pages/'.$url.'.php';

    if(file_exists($path)) {
      include_once($path);
    } else { include_once('pages/404.php'); }
  ?>

  <article class="attribution">
    Challenge by <a href="https://www.frontendmentor.io?ref=challenge" target="_blank">Frontend Mentor</a>. 
    Coded by <a href="https://github.com/GabrielWolf-Dev" target="_blank">GabrielWolf-Dev</a>.
  </article>
  <script src="<?php echo INCLUDE_PATH; ?>js/libs/all.min.js"></script>
  <script type="module" src="<?php echo INCLUDE_PATH; ?>js/index.js"></script>
</body>
</html>