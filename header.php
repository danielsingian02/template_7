<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<?php
	wp_head();
	?>
</head>

<body 
	style="
		background-image: url('<?php echo get_theme_mod( 'Background_image', get_bloginfo( 'template_directory' ) . '/assets/images/Asset 7 1.png');?>');
		background-size: 100%;
		background-repeat: repeat-y";>


	<div class="grid__ctn">

		<div class="header">
			<nav class="navbar navbar-expand-lg">
				<a class="header-link" href="<?php bloginfo('url'); ?>">
					<?php
						$custom_logo_id = get_theme_mod( 'custom_logo' );
						$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );

						if ( has_custom_logo() ) {
							echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
						} else {
							echo '<h1>' . get_bloginfo('name') . '</h1>';
						}
					?>
				</a>

				<div class="navigation-container">
					<button 
						class="navbar-toggler" 
						type="button" 
						data-bs-toggle="offcanvas" 
						data-bs-target="#offcanvasScrolling" 
						aria-controls="offcanvasScrolling">
			
						<i class="fa fa-bars" aria-hidden="true"></i>

					</button>

					<div 
						class="offcanvas offcanvas-end"
						data-bs-scroll="true" 
						data-bs-backdrop="false" 
						tabindex="-1" 
						id="offcanvasScrolling" 
						aria-labelledby="offcanvasScrollingLabel">

						<div class="offcanvas-header">

							<h5 class="offcanvas-title" id="offcanvasScrollingLabel">
								<?php echo get_bloginfo(); ?>
							</h5>

							<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>

						</div>

						<div class="offcanvas-body">

							<div class="template_4_header_menu w-100">

								<?php wp_nav_menu( 'primary' ); ?>

								<hr class="hr hr--80">

								<div class="login__register_ctn">
									<a href="#" class="login__register">
										Login
									</a>
									
									<a href="#" class="login__register">
										Regsiter
									</a>
								</div>

							</div>

						</div>					

					</div>
				</div>

			</nav>
		</div>
		
		<div class="body">