<div id="aside">
				<aside>
					
					<section>
						<h1>TEMAS</h1>
						<nav>
							<ul>
								<?php
									$id_da_categoria = get_cat_id('Categorias');
									wp_list_categories('sort_column=name&child_of='."$id_da_categoria".'&title_li=');
								?>
							</ul>
						</nav>
					</section>
					
					<!-- <section>
						<h1>NEWSLETTER</h1>
						<p>Receba as novidades do blog no seu e-mail</p>
						<form action="">
							<div class="news">
								<input type="text" name="" id="" placeholder="*SEU E-MAIL">
								<input type="submit" value="ENVIAR">
							</div>
						</form>
					</section> -->
					<section>
						<h1>NOSSA FANPAGE</h1>
						<div class="fb-follow" data-href="http://www.facebook.com/pages/Blog-Tudo-Sobre-Viagens/513588051994297?fref=ts" data-show-faces="true" data-font="arial" data-width="300"></div>
					</section>
				</aside>
			</div>