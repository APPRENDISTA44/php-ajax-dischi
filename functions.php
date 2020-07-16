<?php
  //funzione per stampare da $database
  //PARAMETRO: $database, array di elementi dentro a $database
  //RETURN: stringa contenente anche html da stampare
  function stampa_album($database){
    $output = '';
    foreach ($database as $disco) {
      $output .= '<div class = "album">' . '<img src="' . $disco['poster'] . '" alt="poster">';
      $output .= '<h2>' .  $disco['title'] . '</h2>';
      $output .= '<h3>' . $disco['author'] . '</h3>';
      $output .= '<h3>' . $disco['year'] . '</h3>' . '</div>';
    }
    return $output;
  }




 ?>
