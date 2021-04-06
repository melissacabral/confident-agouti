<aside class="sidebar">
	<section id="categories" class="widget">
		<h3 class="widget-title"> Categories </h3>
		<ul>
			<?php wp_list_categories( array(
				'show_count' => 1,
				'title_li' => '',
			) ); ?>
		</ul>
	</section>
	<section id="archives" class="widget">
		<h3 class="widget-title"> Archives </h3>
		<ul>
			<?php wp_get_archives( array(
				'type' => 'monthly',
				'limit' => 20,
				'show_post_count' => 1
			) ); ?>
		</ul>
	</section>
	<section id="tags" class="widget">
		<h3 class="widget-title"> Tags </h3>
		<?php wp_tag_cloud( array(
			'smallest' => 1,
			'largest' => 1,
			'unit' => 'em',
			'format' => 'list',
			// 'orderby' => 'count',
			// 'order' => 'DESC',
			'number' => 20,
		) ); ?>
	</section>

	<?php if( is_user_logged_in() ){ ?>
		<section class="secret">
			<h3 class="widget-title">
				This is secret stuff just for users
			</h3>
			<ul>
				<li><a href="<?php echo admin_url(); ?>">Site Admin</a></li>
			</ul>
		</section>
	<?php }else{ 
		//not logged in - show the form ?>
		<section class="login-form">
			<h3 class="widget-title">
				Log In
			</h3>
			<?php 
			//put this wherever you want a login form
			wp_login_form(); ?>
		</section>
	<?php } ?>
	<section id="meta" class="widget">
		<h3 class="widget-title">This is public</h3>
		<ul>
			
			<li><?php wp_loginout(); ?></li>
		</ul>
	</section>
	


</aside>
		<!-- end .sidebar -->