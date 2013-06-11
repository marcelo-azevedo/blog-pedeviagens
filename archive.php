<?php get_header();?>

	<section id="contain">
		<div id="conteudo">
			<section>
				<article>
					<div class="artigo">

						<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
						<?php /* If this is a category archive */ if (is_category()) { ?>
						    Arquivo da Categoria "<?php echo single_cat_title(); ?>"
						<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
						    Arquivo de <?php the_time('j \d\e F \d\e Y'); ?>
						<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
						    Arquivo de <?php the_time('F \d\e Y'); ?>
						<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
						    Arquivo de <?php the_time('Y'); ?>
						<?php /* If this is an author archive */ } elseif (is_author()) { ?>
						    Arquivo do Autor
						<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
						    Arquivo do Blog
						<?php } ?>
						<?php if (have_posts()): while (have_posts()) : the_post();?>
							<header>
									<h1><?php the_title();?><span>Goiás, Brasilia</span></h1>
								</header>
								<nav>
									<ul>
										<li><a href="">DESCRIÇÃO</a></li>
										<li><a href="">O QUE FAZER</a></li>
										<li><a href="">GASTRONOMIA</a></li>
										<li><a href="">COMO CHEGAR</a></li>
									</ul>
								</nav>
								<section>
									<img src="<?php echo get_settings('home'); ?>/<?php $key="VARIAVEL";echo get_post_meta($post->ID,$key,true);?>" alt="">

									<?php the_content();?>

								</section>

						<?php endwhile; else:?>
						<?php endif;?>
					</div>
				</article>
			</section>
		</div>

		<?php get_sidebar();?>

	</section>
<?php get_footer();?>