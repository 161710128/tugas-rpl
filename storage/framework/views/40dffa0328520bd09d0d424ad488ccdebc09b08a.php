<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bootstrap 3, from LayoutIt!</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

  </head>
  <body>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<!-- pembukaan navbar -->
			<?php echo $__env->make('partial.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			<!-- penutup navbar -->
			<!-- pembukaan corosel -->
			<?php echo $__env->make('partial.corosel', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			<!-- penutup corosel -->
			<!-- pembukaan jumbroton -->
			<?php echo $__env->make('partial.jumbroton', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			<!-- penutupan jumbroton -->
		</div>
	</div>
</div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/scripts.js"></script>
  </body>
</html>