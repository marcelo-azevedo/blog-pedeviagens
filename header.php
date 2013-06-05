<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="pt-BR"><!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html;charset=ISO-8859-1" />

	<title>
		<?php if (is_home()){
			bloginfo('name');
		}elseif (is_category()){
			single_cat_title(); echo ' -  ' ; bloginfo('name');
		}elseif (is_single()){
			single_post_title();
		}elseif (is_page()){
			bloginfo('name'); echo ': '; single_post_title();
		}else {
			wp_title('',true);
		} ?>
	</title>

  <meta name="description" content="">
  <meta name="author" content="">

  	<style type="text/css" media="screen">
		@import url( <?php bloginfo('stylesheet_url'); ?> );

	</style>

	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-1.4.4.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/anchor-animate.js"></script>

	<script type="text/javascript">
		$(function() {
			if( $('a.previouspostslink').length ){
				    $('.des-anterior').css('display', 'none');
			}else{
					$('.des-anterior').css('display', 'block');
			}

			if( $('a.nextpostslink').length ){
				    $('.des-proxima').css('display', 'none');
			}else{
					$('.des-proxima').css('display', 'block');
			}
		});
	</script>

<?php wp_head(); ?>
</head>
<body>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1";
	fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>


	<header id="topo">

		<a href="<?php echo get_settings('home'); ?>"><div id="logo"></div></a>

		<form role="search" method="get" id="searchform" action="<?php echo get_option('home'); ?>">
		   <input value="" name="s" id="s" type="text" placeholder="FAÇA SUA BUSCA">
		</form>

	</header>

	<section id="banner">
		<article id="slide1"></article>
	</section>



