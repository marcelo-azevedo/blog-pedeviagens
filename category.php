<?php get_header();?>

<div id="contain">
	<div id="conteudo">
		<div id="category">
			<section>
					<?php if (have_posts()): while (have_posts()) : the_post();?>
						<article>		
							<div class="artigo">	
								<header>
									<h1><?php the_title();?><span><?php $key="span";echo get_post_meta($post->ID,$key,true);?></span></h1>
								</header>
								
								<nav>
									<ul>
										<li><a href="<?php the_Permalink()?>#descricao">O DESTINO</a></li>
										<li><a href="<?php the_Permalink()?>#que-fazer">O QUE FAZER</a></li>
										<li><a href="<?php the_Permalink()?>#hotel">O HOTEL</a></li>
										<li><a href="<?php the_Permalink()?>#como-chegar">O PACOTE</a></li>
										<li><a href="<?php the_Permalink()?>#roteiro">ROTEIRO</a></li>
									</ul>
								</nav>
								<section>
									
								<div class="img-artigo">
									<?php
							           $key="img";
							           $img = get_post_meta($post->ID,$key,true);
							           if(isset($img) && $img >= '1'){ ?> 
							            <a href="<?php the_Permalink()?>" title="<?php the_title();?>" alt="<?php the_title();?>">
							            <img src="<?php echo get_option('home');?>/<?php $key="img";echo get_post_meta($post->ID,$key,true);?>"
							            title="<?php the_title();?>" alt="<?php the_title();?>"></a>
							        <?php }else{}?>
							    </div>
							        
									<?php the_content();?>
									<a href="<?php the_Permalink()?>"><div class="ver-data">Ver Mais</div></a>
								
								</section>	
							</div>
						</article>
					<?php endwhile; else:?>
					<?php endif;?> 
					
				</section>
		</div>
	</div>
	
	<?php get_sidebar();?>
	
</div>
<?php get_footer();?>