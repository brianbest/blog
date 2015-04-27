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
			<div class="col-md-offset-3 col-md-6 blog">
				<article>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<h6><?php the_time('F jS, Y'); ?></h6>
					<h1 class="title"><?php the_title(); ?></h1>
					<?php the_content(); ?>

					<div class="closeing row">
						<div class="me col-md-6">
							<a href="https://about.me/brianbest" target="_blank">
								<div class="pic">
								</div>
							</a>
							<div class="about">
								<h4><strong>Brian Best</strong></h4>
								<h4>Developer &amp; Founder</h4>
							</div>
						</div>
						<div class="col-md-6">
							
						</div>
					</div>
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