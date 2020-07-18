<?php include __DIR__ . '/database.php';
 header('Content-Type: application/json');
 if(isset($_GET['name'])){
   if ($_GET['name'] != 'all') {
    $array = [];
    for ($i=0; $i < count($database); $i++) {
      if ($database[$i]['author'] == $_GET['name']) {
       $array[] = $database[$i];
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
