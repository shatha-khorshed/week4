<?php
$links = [
    'Home' => 'index.php',
    'About' => 'anout.php',
    'Work' => 'work.php'
];

?>

<nav>
  <ul>
    <?php foreach ($links as $title => $href) : ?>
      <li>
      <a href="<?php echo $href; ?>">
      <?php echo $title; ?>
      </a>
      </li>
    <?php endforeach; ?>
  </ul>
</nav>