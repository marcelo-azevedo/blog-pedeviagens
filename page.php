<?php get_header();?>

	<section id="contain">
		<div id="conteudo">
			<div id="page">
				<section>
					<article>
						<div class="artigo">
							<?php if (have_posts()): while (have_posts()) : the_post();?>
								<header>
									<h1><?php the_title();?></h1>
								</header>

									<section>

										<?php the_content();?>

									</section>

							<?php endwhile; else:?>
							<?php endif;?>
						</div>
					</article>
				</section>
			</div>
		</div>

		<?php get_sidebar();?>

	</section>
<?php get_footer();?>