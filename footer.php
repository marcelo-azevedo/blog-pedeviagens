	<div id="footer">
		<footer>
			<div class="center">
				<div id="logo-footer"></div>
				<div id="cont-footer">
					
					<h2>atendimento@tudosobreviagens.com.br</h2>
				</div>
				<nav>
					<ul>
						<li><a href="">INÍCIO</a></li>
						<?php wp_list_pages('title_li=');?>
					</ul>
				</nav>
				<div class="redes-footer">
					
				</div>
			</div>
		</footer>
	</div>

	
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