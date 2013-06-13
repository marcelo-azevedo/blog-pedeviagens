	<footer id="footer">
		<div class="center">
			<section id="footer-opcoes">
				<h1>Mais opções para você</h1>
				<ul>
					<?php query_posts('showposts=6&category_name=destaques');?>
	                <?php if (have_posts()): while (have_posts()) : the_post();?>
						<li><a href="<?php the_Permalink()?>"><?the_post_thumbnail()?></a><span><?php the_title();?></span></li>
					<?php endwhile; else:?>
	                <?php endif;?> 
				</ul>
			</section>
			<section id="footer-servicos">
				<h1>Nossos serviços</h1>
				<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit</p>
				<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit</p>
			</section>
			<section id="footer-contato">
				<h1>Contato</h1>
				<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit</p>
				<p>
					Tel: 00000000000 <br />
					Endereço: This is Photoshop's <br />
					atendimento@tudosobreviagens.com.br <br />
				</p>
			</section>
		</div>
	</footer>


<script type="text/javascript" >
jQuery(function($){
	$('.classBtoTopo a').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 800);
			return false;
		});
});


var animate = {
	'time': 500,
	'randMin': 1000,
	'randMax': 1200
};

</script>

<?php wp_footer(); ?>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-39136673-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
</html>