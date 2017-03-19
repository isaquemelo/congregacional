<?php
/**
 * Template Name: Template de Pagina Inicial
 *
 * The template for displaying pages with sidebar.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header();
?>

			<?php 	$args = array(
						'post_type' => 'page',
						'posts_per_page' => 10,
						'post_parent' => get_the_ID(),
						'orderby' => 'menu_order',
						'order' => 'ASC'

					);

				$query = new WP_Query( $args );
			?>

			<?php  if ($query -> have_posts()): ?>

				<?php while ($query -> have_posts()): $query -> the_post(); ?>

					<section class="<?php if(get_field('ocupar_toda_a_tela')){ echo 'fullSize ';} the_field('tipo_de_pagina'); ?> " style="

							<?php if (has_post_thumbnail()): ?>

								background: url('<?php  the_post_thumbnail_url(); ?>')


							<?php endif; ?>

							<?php if (get_field('cor_fundo')){
									echo 'background-color:';
									the_field('cor_fundo');
								}
							?>

							">
						<?php if( get_field('tipo_de_pagina') == 'slider' ): ?>

							<div class="container">
								<div class="col-md-12">
									<div class="row">

										<div class="centerContent">
											<span class="titleSlider col-md-8">
												<?php the_title( ); ?>
											</span>

											<?php  if(get_field('link_botao')): ?>
												<a href="<?php the_field('link_botao'); ?>" class="buttomKnow">

														conheça

												</a>
											<?php endif; ?>
										</div>

									</div>
								</div>


							</div>


						<?php endif; ?>


						<?php if( get_field('tipo_de_pagina') == 'boxes' ): ?>


							<?php 	$args = array(
										'post_type' => 'page',
										'posts_per_page' => 3,
										'post_parent' => get_the_ID(),
										'orderby' => 'menu_order',
										'order' => 'ASC'

									);

								$query = new WP_Query( $args );
							?>

							<?php if ( $query -> have_posts() ) : ?>
								<?php while ($query -> have_posts()) : $query -> the_post(); ?>

									<div class="containerBox col-md-4" <?php if(get_field('cor_do_bloco')):?>style="background:<?php the_field('cor_do_bloco');endif; ?>">
										<section class="boxesTitle">
											<?php the_title() ?>

										</section>
										<div class="blackLine"></div>
										<span class="boxesContent col-md-11">
											<?php the_excerpt();	?>
										</span>
										<a href="<?php the_permalink(); ?>" class="buttomKnow">

														continue

										</a>


									</div>


									<?php wp_reset_postdata(); ?>
								<?php endwhile; ?>
							<?php endif; ?>




						<?php endif; ?>



						<?php if( get_field('tipo_de_pagina') == 'informativo' ): ?>

								<?php if (get_field('titulo_mestre')): ?>

									<div class="masterInfoTitle">
										<?php the_field('titulo_mestre') ?>
									</div>

								<?php endif; ?>

								<div class="infoTitle col-md-4">
									<?php the_title();?>
								</div>

								<div class="theInfoContent col-md-6 owl-carousel owl-theme">
									<?php the_content(); ?>
								</div>
								<div class="owl-controls">
								</div>

						<?php endif; ?>
					</section>


				<?php endwhile; ?>
			<?php endif; ?>


<?php
get_footer();
