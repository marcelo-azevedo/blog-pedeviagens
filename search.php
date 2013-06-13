<?php get_header();?>

<section id="contain">
	<section id="conteudo">
		<div id="category">
			<section>
				<?php if (have_posts()): while (have_posts()) : the_post();?>
					<article>
						<div class="artigo">

							<a href="<?php the_Permalink()?>"><h1><?php the_title();?><span><?php $key="span";echo get_post_meta($post->ID,$key,true);?></span></h1></a>
							<p><a href="<?php the_Permalink()?>"><?php $key="descricao";echo get_post_meta($post->ID,$key,true);?></a></p>

						</div>
					</article>
				<?php endwhile; else:?>
				<div class="artigo"><h3>Busca não encontrada</h3></div>
				<?php endif;?>
			</section>
		</div>
	</section>

	<?php get_sidebar();?>

</section>
<?php get_footer();?>