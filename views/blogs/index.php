<?php
  // echo 'views/blog/index.phpを通りました。';
  // echo '<br>';
?>

<?php foreach ($this->viewOptions as $viewOption): ?>
  <div>
    <?php echo $viewOption['id']; ?> : <a href="/seed_blog_20160404/blogs/show/<?php echo $viewOption['id']; ?>"><?php echo $viewOption['title'] ?></a> &lt;&lt; <?php echo $viewOption['created']; ?>
  </div>
<?php endforeach; ?>
