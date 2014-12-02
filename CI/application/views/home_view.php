<html>
<head>
	<title><?= $title;?></title>
</head>
	<body>
		<?=heading ($headline,1);?>
	<?= br(2);?>
	<?= $content;?>
	<ol>
		<?php foreach ($bullet as $key):?>
		<li>
			<?= $key; ?>
		</li>
	     <?php endforeach; ?>
	</ol>
	</body>
</html>
	