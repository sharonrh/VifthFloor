<html>
  <head>
    <title>Our Games</title>
  </head>
  <body>
    <?php foreach ($records as $row): ?>
    <div>
      <h2><?php echo $row->Title; ?></h2>
    </div>
    <div>
      <?php $short = $row->Description; 
      $short=character_limiter($short,100);?>
      <?php echo $short;?>
      <a href = "<?php echo base_url();?>/index.php/game/view/<?php echo $row->Id;?>">Read More</a>
    </div>

    <?php endforeach; ?>

    <div>Halaman : <?php echo $page;?></div>

  </body>
</html>