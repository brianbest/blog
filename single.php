<?php get_header(); ?>
<div class="container-fluid">
<nav class="navbar navbar-default">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="/">Brian Best</a>
		    </div>
		  </div><!-- /.container-fluid -->
		</nav>
		<div class="row">
			<div class="col-md-offset-4 col-md-4 blog">
				<article>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<h6><?php the_time('F jS, Y'); ?></h6>
					<h1 class="title"><?php the_title(); ?></h1>
					<?php the_content(); ?>

					<div class="closeing row">
						<div class="me col-md-7">
							<a href="https://about.me/brianbest" target="_blank">
								<div class="pic">
								</div>
							</a>
							<div class="about">
								<h4><strong>Brian Best</strong></h4>
								<h4>Developer &amp; Founder</h4>
							</div>
						</div>
						<div class="col-md-5">
							<?php

								if ( function_exists( 'sharing_display' ) ) {
									    sharing_display( '', true );
									}
									 
									if ( class_exists( 'Jetpack_Likes' ) ) {
									    $custom_likes = new Jetpack_Likes;
									    echo $custom_likes->post_likes( '' );
									}

							?>
						</div>
					</div>
					<div>
						<?php comments_template(); ?>
					</div>
					<?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
				</article>
			</div>
		</div>
		<footer>

			<form>
				<input type="text" placeholder="Your Email">
				<input type="submit" class="btn" value="Get updates on my work">
			</form>

		</footer>
</div>
<?php get_footer(); ?>