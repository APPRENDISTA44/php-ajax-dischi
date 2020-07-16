<?php
  function stampa_album($database){
    $output = '';
    foreach ($database as $disco) {
      $output .= '<div class = "album">' . '<img src="' . $disco['poster'] . '" alt="logo">';
      $output .= '<h2>' .  $disco['title'] . '</h2>';
      $output .= '<h4>' . $disco['author'] . '</h4>';
      $output .= '<h4>' . $disco['year'] . '</h4>' . '</div>';
    }
    return $output;
  }




 ?>
