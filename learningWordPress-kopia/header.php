<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width">
		<title><?php bloginfo('name'); ?></title>
		<?php wp_head(); ?>
	</head>

<body>

		<!-- site-header -->
		<header>

			<nav class="navbar navbar-expand-lg navbar-light bg-lignt static-top">
			<div class="container">

					<?php if( has_custom_logo() ) {
						the_custom_logo();
						} else {
					?>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
					<?php } ?>

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
				<div class="collapse navbar-collapse" id="navbarResponsive">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active">
										<?php wp_nav_menu(  $args ); ?>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		</header>
