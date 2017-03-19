<?php
/**
 * Template Name: Template de Informativo
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header(); ?>

	<div class="fullPageThink">
		<div class="container">
			<main id="content" class="<?php if(get_field('ocupar_toda_a_tela')){ echo 'fullSize ';} the_field('tipo_de_pagina'); ?> " style="

									<?php if (has_post_thumbnail()): ?>

										background: url('<?php  the_post_thumbnail_url(); ?>')


									<?php endif; ?>



									">

					<?php while ( have_posts() ) : the_post();?>
						<div class="pageHold">
							<header class="generalHeaderPages">
								<?php the_title();?>
							</header>

							<content class="pageMadeContent col-md-7">
								<?php the_content();?>
							</content>
						</div>

					<?php endwhile; ?>


			</main><!-- #main -->
		</div>
	</div>

<?php
get_footer();
