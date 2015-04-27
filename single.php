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
			<div class="col-sm-12 col-md-offset-3 col-md-6 col-lg-offset-4 col-lg-4 blog">
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

			<!-- Begin MailChimp Signup Form -->
			<div id="mc_embed_signup">
				<form action="//brian-best.us10.list-manage.com/subscribe/post?u=8a568116221771426d6a1e472&amp;id=727a6a8d2c" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
				    <div id="mc_embed_signup_scroll">
					
				<div class="mc-field-group">
					<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Your Email">
				</div>
					<div id="mce-responses" class="clear">
						<div class="response" id="mce-error-response" style="display:none"></div>
						<div class="response" id="mce-success-response" style="display:none"></div>
					</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
				    <div style="position: absolute; left: -5000px;"><input type="text" name="b_8a568116221771426d6a1e472_727a6a8d2c" tabindex="-1" value=""></div>
				    <div class="clear"><input type="submit" value="Get updates on my work" name="subscribe" id="mc-embedded-subscribe" class="btn button"></div>
				    </div>
				</form>
			</div>

			<!--End mc_embed_signup-->

		</footer>
</div>
<?php get_footer(); ?>