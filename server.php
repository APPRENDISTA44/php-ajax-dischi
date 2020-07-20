<?php include __DIR__ . '/database.php';
 header('Content-Type: application/json');
 if(isset($_GET['name'])){
   if ($_GET['name'] != 'all') {
    $array = [];
    foreach ($database as $cd) {
      if ($cd ['author'] === $_GET['name']) {
       $array[] = $cd;
      }
    }
    echo json_encode($array);
  }else {
    echo json_encode($database);
  }
 }else {
   echo json_encode($database);
 }

 ?>
