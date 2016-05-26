<?php
  echo 'views/blog/index.phpを通りました。';
  echo '<br>';
?>

<?php foreach ($this->viewOptions as $viewOption): ?>
  <div>
    <?php echo $viewOption['id']; ?> : <?php echo $viewOption['title'] ?> &lt;&lt; <?php echo $viewOption['created']; ?>
  </div>
<?php endforeach; ?>
