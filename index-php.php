<?php include __DIR__ . '/database.php' ?>
<?php include __DIR__ . '/functions.php' ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="dist/app.css">
    <title>dischi</title>
  </head>
  <body>
    <header>
      <img src="img/logo-small.svg" alt="logo">
    </header>

    <main>
      <div class="container">
        <?php echo stampa_album($database); ?>
      </div>
    </main>
  </body>
</html>
