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
  <!-- CSS File -->
  <link rel="stylesheet" href="dist/css/style.css">
</head>

<body>
  <div class="container">
    <div class="d-flex justify-content-center">
      <h1>The blog - User datas</h1>
    </div>

    <div class="grid">
      <div class="column d-flex justify-content-around">
        <h3>Name</h3>
        <h3>Lastname</h3>
        <h3>Username</h3>
        <h3>Email</h3>
      </div>

      <div class="date d-flex justify-content-around">
        <div class="d-flex flex-column">
          <?php foreach ($user_list as $user){ ?>
          <span><?php echo $user->name ?></span>
          <?php } ?>
        </div>

        <div class="d-flex flex-column">
          <?php foreach ($user_list as $user){ ?>
          <span><?php echo $user->lastname ?></span>
          <?php } ?>
        </div>

        <div class="d-flex flex-column">
          <?php foreach ($user_list as $user){ ?>
          <span><?php echo $user->user_name ?></span>
          <?php } ?>
        </div>

        <div class="d-flex flex-column">
          <?php foreach ($user_list as $user){ ?>
          <span><?php echo $user->email_address ?></span>
          <?php } ?>
        </div>
      </div>

    </div>
  </div>
</body>

</html>