<?php
  function stampa_album($database){
    $output = '';
    foreach ($database as $disco) {
      $output .= '<div class = "album">' . '<img src="' . $disco['poster'] . '" alt="logo">';
      $output .= '<h2>' .  $disco['title'] . '</h2>';
      $output .= '<h3>' . $disco['author'] . '</h3>';
      $output .= '<h3>' . $disco['year'] . '</h3>' . '</div>';
    }
    return $output;
  }




 ?>
