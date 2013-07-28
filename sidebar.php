<aside>

					<div id="categorias" class="widget">

						<ul>
							<li class="page"><a href="http://www.dicaswp.com.br/">Home</a></li>
							<li class="page"><a href="http://www.dicaswp.com.br/sobre/">Sobre</a></li>
							<li class="page"><a href="http://www.dicaswp.com.br/contato/">Contato</a></li>
							<li class="desenvolvimento"><a href="http://www.dicaswp.com.br/category/desenvolvimento/">Desenvolvimento</a></li>
							<li class="design"><a href="http://www.dicaswp.com.br/category/design/">Design</a></li>
							<li class="empreendedorismo"><a href="http://www.dicaswp.com.br/category/empreendedorismo/">Empreendedorismo</a></li>
							<li class="graficos"><a href="http://www.dicaswp.com.br/category/graficos/">Gráficos</a></li>
							<li class="mobile"><a href="http://www.dicaswp.com.br/category/mobile/">Mobile</a></li>
							<li class="uxdesign"><a href="http://www.dicaswp.com.br/category/ux-design/">UX Design</a></li>
							<li class="wordpress"><a href="http://www.dicaswp.com.br/category/wordpress/">WordPress</a></li>
						</ul>

					</div>

					<div id="populares" class="widget">

						<h3>Artigos Populares</h3>

						<ul>
							<?php $pc = new WP_Query('orderby=comment_count&posts_per_page=5'); 
							while ($pc->have_posts()) : $pc->the_post(); ?>
								<li><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
							<?php endwhile; ?>
						</ul>

					</div>

					<div id="newsletter" class="widget">

						<h3>Fique Atualizado</h3>

						<h4>Insira aqui o seu email para receber gratuitamente as atualizações do blog!</h4>

						<form action="http://dicaswp.us7.list-manage.com/subscribe/post?u=b3c1b6405feebda643ef2a7f2&amp;id=b0e764b757" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
	
						<div class="mc-field-group">
							<input type="email" value="" placeholder="Insira seu email" name="EMAIL" class="required email" id="mce-EMAIL">
						</div>
							<div id="mce-responses" class="clear">
								<div class="response" id="mce-error-response" style="display:none"></div>
								<div class="response" id="mce-success-response" style="display:none"></div>
							</div>	<div class="clear"><input type="submit" value="Quero Receber" name="subscribe" id="mc-embedded-subscribe" class="button"></div>

						</form>

					<div> 

				</aside>