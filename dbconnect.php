<?php
  $db = mysqli_connect('localhost', 'root', 'mysql', 'seed_blog_20160404')
    or die (mysqli_connect_error());
  mysqli_set_charset($db, 'utf8');
?>
