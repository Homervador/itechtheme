<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title><?php wp_title(); ?></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<link href="<?php echo get_bloginfo( 'template_directory' );?>/style.css" rel="stylesheet">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<?php wp_head();?>
</head>

<body>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8">
				<img class="logo" src="/wp-content/uploads/2017/03/logo-itechsup-sans-d-grad-.png">
			</div>
			<div class="col foad-wrapper">
				<a class="foad-link" href="http://foad.itechsup.fr">
					Votre espace
				</a>
			</div>
		</div>
	</div>
	<div class="container-fluid  my-menu">

		<?php
		wp_nav_menu( array(
		    'theme_location'	=> 'header-menu',
		    'depth'				=> 2,
			'container'			=> 'nav',
			'container_class'	=> 'nav justify-content-center nav-fill',
			'container_id'		=> 'bs-example-navbar-collapse-1',
			'menu_class'		=> 'nav justify-content-center',
		    'fallback_cb'		=> 'WP_Bootstrap_Navwalker::fallback',
		    'walker'			=> new WP_Bootstrap_Navwalker())
		);
		?>
	</div>