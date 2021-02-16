<?php
  include __DIR__ . '/db/user_databese.php';

  //var_dump($user_list);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP 2</title>
</head>
<body>
    <h1>The blog - User datas</h1>
    
    <?php foreach ($user_list as $key => $user){ ?>
     <h2>Name: <?php echo $user->name ?></h2>
     <h2>Lastname: <?php echo $user->lastname ?></h2>
     <hr>
    <?php } ?>
</body>
</html>

