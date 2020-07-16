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

    <!-- header -->
    <header>
      <img src="img/logo-small.svg" alt="logo">
    </header>
    <!--fine header -->

    <!-- main -->
    <main>
      <div class="container">
        <!-- albums -->
        <?php echo stampa_album($database); ?>
        <!--fine albums -->
      </div>
    </main>
    <!--fine main -->

  </body>
</html>
