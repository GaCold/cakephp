<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title> <?php echo $this->fetch('title'); ?> </title>
	<?php echo $this->element('header'); ?>
</head>
<body>
	<div>
		<?php echo $this->fetch('content'); ?>
	</div>
</body>
</html>