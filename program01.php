<?php
  $guestname = $_GET['guest'];
  $today = date('l');
  $todaysdate = date('l jS \of F Y');
  $backgroundcolor = $_GET['color'];
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Belajar PHP</title>
  </head>
  <body bgcolor=<?= $backgroundcolor ?> >
    <h1>Program 01</h1>
    today is : <?php echo $todaysdate ?>
    <hr>
    <h2>Hello, <?php echo $guestname ?></h2>
    <h2>Happy, <?php echo $today ?></h2>
  </body>
</html>
