<?php get_header(); ?>
<div class="container-fluid">
		<div class="row">
			<div class="col-md-5">
				<div class="headInfo">
					<h1>Brian Best</h1>
					<h3>developer &amp; founder</h3>
					<div class="socialMedia">
						<a href="https://ca.linkedin.com/in/brianbest101">
							<div class="socialItem social social-linked-in"></div>
						</a>
						<a href="https://github.com/brianbest">
							<div class="socialItem social social-github"></div>
						</a>	
						<a href="https://twitter.com/BrianBest">
							<div class="socialItem social social-twitter"></div>
						</a>
						<a href="https://www.facebook.com/brianbest101">
							<div class="socialItem social social-facebook"></div>
						</a>
					</div>
				</div>
			</div>
			<div class=" col-md-6 blogList">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<a href="<?php echo get_permalink(); ?>">
					<article>
						<h1 class="title"><?php the_title(); ?><span><?php the_time('F jS, Y'); ?></span></h1>
						<p><?php the_excerpt(); ?></p>
					</article>
				</a>
				<?php endwhile; else: ?>
				<article>
					<h1><?php _e('Sorry, no posts matched your criteria.'); ?></h1>
				</article>
				<?php endif; ?>
			</div>
		</div>
	</div>
<?php get_footer(); ?>