<?php get_header();?>

	<div id="contain">
		<div id="conteudo">
			<section>
				<article>		
					<div class="artigo">
						<?php if (have_posts()): while (have_posts()) : the_post();?>
							<header>
									<h1><?php the_title();?><span><?php $key="span";echo get_post_meta($post->ID,$key,true);?></span></h1>
							</header>
							<nav>
								<ul>
									<li><a href="#descricao" class="animate rand">O DESTINO</a></li>
									<li><a href="#que-fazer" class="animate rand">O QUE FAZER</a></li>
									<li><a href="#hotel" class="animate rand">O HOTEL</a></li>
									<li><a href="#como-chegar" class="animate rand">O PACOTE</a></li>
									<li><a href="#roteiro" class="animate rand">ROTEIRO</a></li>
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
								<div id="conteudo-post">
									<?php the_content();?>
								</div>
								
								<div id="btns-pdv">
									<div class="btn-pedeviagens"><a href="<?php $key="link-pdv";echo get_post_meta($post->ID,$key,true);?>" target="_blank"><button>VER PACOTE</button></a></div>
									<div class="btn-pedeviagens"><a href="<?php $key="link-pdv";echo get_post_meta($post->ID,$key,true);?>" target="_blank"><button>COMPRAR</button></a></div>
								</div>
								
							</section>	
						
						
						<?php endwhile; else:?>
						<?php endif;?>
					</div>
				</article>
			</section>
		</div>
		
		<?php get_sidebar();?>
		
	</div>
<?php get_footer();?>