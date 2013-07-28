	<?php get_header(); ?>

		<section id="content">

			<div class="container">

				<?php get_sidebar(); ?>

				<section id="posts">

					<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

						<?php if (in_category('desenvolvimento')) : ?>
						<span class="tag desenvolvimento"><a href="http://www.dicaswp.com.br/category/desenvolvimento/">Desenvolvimento</a></span>
						<?php elseif(in_category('design')) :?>
						<span class="tag design"><a href="http://www.dicaswp.com.br/category/design/">Design</a></span>
						<?php elseif(in_category('empreendedorismo')) :?>
						<span class="tag empreendedorismo"><a href="http://www.dicaswp.com.br/category/empreendedorismo/">Empreendedorismo</a></span>
						<?php elseif(in_category('graficos')) :?>
						<span class="tag graficos"><a href="http://www.dicaswp.com.br/category/graficos/">Gráficos</a></span>
						<?php elseif(in_category('mobile')) :?>
						<span class="tag mobile"><a href="http://www.dicaswp.com.br/category/mobile/">Mobile</a></span>
						<?php elseif(in_category('ux-design')) :?>
						<span class="tag ux-design"><a href="http://www.dicaswp.com.br/category/ux-design/">UX Design</a></span>
						<?php elseif(in_category('wordpress')) :?>
						<span class="tag wordpress"><a href="http://www.dicaswp.com.br/category/wordpress/">WordPress</a></span>
						<?php else : ?>
						<span class="tag wordpress"><a href="http://www.dicaswp.com.br/category/geral/">Geral</a></span>
						<?php endif; ?>

						<span class="tag comentario"><?php comments_popup_link('0 comentários', 'Um comentário', '% comentários'); ?></span>

						<div class="thumb"><?php if ( has_post_thumbnail() ) {
							the_post_thumbnail();
						} ?>
						</div>	

						<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">
<?php the_title(); ?></a></h2>

						<p><?php the_excerpt('Ler artigo completo &raquo;'); ?></p>

					</article>
					<?php endwhile; ?>
					<?php else : ?>
					<article>

						<h2>Página não encontrada</h2>

						<p>Desculpe, mas a página não foi encontrada. Enquanto penso em uma página de erro melhor, volte para a <a href="http://www.dicaswp.com.br">página inicial</a>.</p>

					</article>
					<?php endif; ?>

					<div class="pagination">

						<ul>
							<li><?php previous_posts_link('&laquo; Novos Artigos') ?></li>
							<li><?php next_posts_link('Artigos Antigos &raquo;','') ?></li>
						</ul>

					</div>

				</section>

			</div>

		</section>

<?php get_footer(); ?>