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
        <select>

        </select>
    </header>
    <!--fine header -->

    <!-- main -->
    <main>
      <!-- albums -->
      <div class="container" id="albums">
      </div>
      <!--fine albums -->
    </main>
    <!--fine main -->


    <!-- Template handlebars -->
    <script id="album-template" type="text/x-handlebars-template">
      <div class="album">
        <img src="{{poster}}" alt="">
        <h2>{{title}}</h2>
        <h3>{{author}}</h3>
        <h3>{{year}}</h3>
      </div>
    </script>


    <!-- codice js -->
    <script type="text/javascript" src="dist/app.js"></script>
  </body>
</html>
