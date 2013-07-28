	<?php get_header(); ?>
	
		<section id="content">

			<div class="container">

				<?php get_sidebar(); ?>

				<section id="posts">

					<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

						<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">
<?php the_title(); ?></a></h2>

						<p><?php the_content('Ler artigo completo &raquo;'); ?></p>

					</article>
					<?php endwhile; ?>
					<?php else : ?>
					<article>

						<h2>Página não encontrada</h2>

						<p>Desculpe, mas a página não foi encontrada. Enquanto penso em uma página de erro melhor, volte para a <a href="http://www.dicaswp.com.br">página inicial</a>.</p>

					</article>
					<?php endif; ?>

					<article>
						<?php comments_template(); ?> 
					</article>

					<div class="pagination">

						<ul>
							<li><?php previous_posts_link('&laquo; Artigos Antigos') ?></li>
							<li><?php next_posts_link('Novos Artigos &raquo;','') ?></li>
						</ul>

					</div>

				</section>

			</div>

		</section>

<?php get_footer(); ?>