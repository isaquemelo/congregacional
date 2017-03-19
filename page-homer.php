<?php
/**
 * Template Name: Template home pager

 *
 * The template for displaying pages with sidebar.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header();
?>

	<div class="generalContent">

		<?php 	$slider_args = array(
					'post_type' => 'slider_type',
				);

			$query_slider = new WP_Query($slider_args);
		?>


		<?php if ( $query_slider -> have_posts() ) : ?>
			<?php while( $query_slider -> have_posts() ):
					$query_slider -> the_post(); ?>



				<section class="typeSlider <?php echo get_post_type();?> <?php if(get_field('ocupar_toda_tela')){ echo 'fullSize ';} ?>" style="

							<?php if (has_post_thumbnail()): ?>

								background: url('<?php  the_post_thumbnail_url(); ?>')


							<?php endif; ?>

							<?php if (get_field('cor_de_fundo')){
									echo ';background-color:';
									the_field('cor_de_fundo');
								}
							?>

							">

					<div class="container">
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

				</section>



			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
		<?php endif; ?>






















		<?php 	$informativo_args = array(
					'post_type' => 'informativo_type',
					'posts_per_page' => 1,
				);

			$query_informativo = new WP_Query($informativo_args);
		?>


		<?php if ( $query_informativo -> have_posts() ) : ?>
			<?php while( $query_informativo -> have_posts() ):
					$query_informativo -> the_post(); ?>



				<section class="typeInformativo <?php echo get_post_type();?> <?php if(get_field('ocupar_toda_tela')){ echo 'fullSize ';} ?>" style="

							<?php if (has_post_thumbnail()): ?>

								background: url('<?php  the_post_thumbnail_url(); ?>')


							<?php endif; ?>

							<?php if (get_field('cor_de_fundo')){
									echo ';background-color:';
									the_field('cor_de_fundo');
								}
							?>

							">

					<div class="container">
						<div class="row flexFlowColunm">

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




						</div>
					</div>

				</section>



			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
		<?php endif; ?>





















		<?php 	$box_args = array(
					'post_type' => 'blocos_type',
					'posts_per_page' => 3,
				);

			$query_box = new WP_Query($box_args);
		?>


		<?php if ( $query_box -> have_posts() ) : ?>


			<section class="typeBox blocos_type <?php if(get_field('ocupar_toda_tela')){ echo 'fullSize ';} ?>" style="

							<?php if (has_post_thumbnail()): ?>

								background: url('<?php  the_post_thumbnail_url(); ?>')


							<?php endif; ?>

							<?php if (get_field('cor_de_fundo')){
									echo ';background-color:';
									the_field('cor_de_fundo');
								}
							?>

							">
					<div class="container">
							<div class="row">



								<?php while( $query_box -> have_posts() ):
										$query_box -> the_post(); ?>







												<div class="containerBox col-md-4" <?php if(get_field('cor_de_fundo_do_bloco')):?>style="background:<?php the_field('cor_de_fundo_do_bloco');endif; ?>">
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








								<?php endwhile; ?>
					</div>
				</div>
			</section>
			<?php wp_reset_postdata(); ?>
		<?php endif; ?>











		<?php 	$pessoas_args = array(
					'post_type' => 'pessoas_type',

				);

			$query_pessoas = new WP_Query($pessoas_args);
		?>


		<?php if ( $query_pessoas -> have_posts() ) : ?>


			<section class="typePessoas pessoas_type <?php if(get_field('ocupar_toda_tela')){ echo 'fullSize ';} ?>" style="

							<?php if (has_post_thumbnail()): ?>

								background: url('<?php  the_post_thumbnail_url(); ?>')


							<?php endif; ?>

							<?php if (get_field('cor_de_fundo')){
									echo ';background-color:';
									the_field('cor_de_fundo');
								}
							?>

							">

					<div class="container infoHD">

							<header class="infoHeader">
									<div class="peopleTitle">
										COORDENAÇÃO
									</div>

									<div class="bigTitle col-md-6">
										UM POUCO SOBRE NOSSOS ORIENTADORES
									</div>

									<div class="buttons">
										<div class="filter" id="button" data-filter="all">Todos</div>
										<div class="filter" id="button" data-filter=".pastor">Pastor</div>
										<div class="filter" id="button" data-filter=".presibitero">Presibitero</div>

										<div class="filter" id="button" data-filter=".diacono">Diacono</div>
										<div class="filter" id="button" data-filter=".lideranca">Liderança</div>



									</div>

							</header>



					</div>
			</section>

			<section class="peopleList">
				<div class="container">
					<div class="row">

						<?php while( $query_pessoas -> have_posts() ):
								$query_pessoas -> the_post(); ?>

							<div class="mixitupclass">

								<div class="mix col-md-3 <?php the_field('cargo'); ?>">
									<div class="personImage">
										<?php the_post_thumbnail(); ?>
									</div>
									<div class="userName">
										<?php the_title(); ?>
									</div>
									<?php if ( get_field('cargo') ): ?>
										<div class="userJob">
											<?php the_field('cargo'); ?>
										</div>
									<?php endif; ?>

									<div class="personExcerpt">
										<?php the_excerpt(); ?>
									</div>
								</div>

							</div>











						<?php endwhile; ?>
					</div>
				</div>
			</section>
			<?php wp_reset_postdata(); ?>
		<?php endif; ?>





		<div class="blackBigLine"></div>

<?php echo do_shortcode( '[event_rocket_calendar]' ); ?>









































	</div>








	</div>
<?php
get_footer();
