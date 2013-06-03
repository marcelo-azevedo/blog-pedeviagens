<?php get_header();?>
		<section id="contain">
			<div id="conteudo">
				<section>
					<?php if (have_posts()): while (have_posts()) : the_post();?>
						<article>		
							<div class="artigo">	
								<header>
									<h1><?php the_title();?></h1>
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
							    
							    <p><?php the_excerpt(); ?></p>
								<a href="<?php the_Permalink()?>"><div class="ver-data">Leia Mais ...</div></a>
								
								</section>	
							</div>
						</article>
					<?php endwhile; else:?>
					<?php endif;?> 
					
					<footer>
						<a href="<?php echo get_settings('home'); ?>"><div class="voltar-footer">INÍCIO</div></a>	
						<div class="paginator">
							<div class="des-anterior">Anterior</div>
								<div class="wp-pagenavi">
									
									<!-- <a class="previouspostslink" href="http://tudosobreviagens.hospedagemdesites.ws/?paged=2">Anterior</a> -->
									<span class="current">1</span>
									<a class="page smaller" href="http://tudosobreviagens.hospedagemdesites.ws/">2</a>
									<a class="page smaller" href="http://tudosobreviagens.hospedagemdesites.ws/?paged=2">3</a>
									<a class="page larger" href="http://tudosobreviagens.hospedagemdesites.ws/?paged=4">4</a>
									<a class="page larger" href="http://tudosobreviagens.hospedagemdesites.ws/?paged=5">5</a>
									<a class="page larger" href="http://tudosobreviagens.hospedagemdesites.ws/?paged=6">6</a>
									<a class="nextpostslink" href="http://tudosobreviagens.hospedagemdesites.ws/?paged=4">Próxima</a>
								</div>
							<div class="des-proxima">Próxima</div>
							
						</div>
					</footer>
					
				</section>
			</div>
			
			<?php get_sidebar();?>
			
		</section>
<?php get_footer();?>