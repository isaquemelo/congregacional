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

							" id="1">

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

							" id="2">

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

							<?php if (get_field('cor_de_fundo')){
									echo ';background-color:';
									the_field('cor_de_fundo');
								}
							?>

							" id="3">
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

							" id="4">

					<div class="container infoHD">

							<header class="infoHeader">
									<div class="peopleTitle">
										COORDENAÇÃO
									</div>

									<div class="bigTitle col-md-6">
										UM POUCO SOBRE NOSSOS ORIENTADORES
									</div>

									<div class="buttons">

										<div class="filter" id="button" data-filter=".pastor">Pastores</div>
										<div class="filter" id="button" data-filter=".presibitero">Presibitero</div>

										<div class="filter" id="button" data-filter=".diacono">Diacono</div>
										<div class="filter" id="button" data-filter=".lideranca">Liderança</div>

										<div class="filter" id="button" data-filter="all">Todos</div>



									</div>

							</header>



					</div>
			</section>

			<section class="peopleList" id="5">
				<div class="container">
					<div class="row">

						<?php while( $query_pessoas -> have_posts() ):
								$query_pessoas -> the_post(); ?>

							<div class="mixitupclass">

								<div class="mix col-md-3 <?php the_field('cargo'); ?>">
									<div class="flexMobile">
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

							</div>











						<?php endwhile; ?>
					</div>
				</div>
			</section>
			<?php wp_reset_postdata(); ?>
		<?php endif; ?>





		<div class="blackBigLine"></div>




























		<?php 	$agenda_args = array(
					'post_type' => 'agenda_type',
					'posts_per_page' => 5,
					'meta_key'	=> 'data',
					'orderby'	=> 'meta_value_num',
					'order'		=> 'ASC'


				);

			$query_agenda = new WP_Query($agenda_args);
		?>


		<?php if ( $query_agenda -> have_posts() ) : ?>


			<section class="typeAgenda agenda_type" style="
















							<?php if (has_post_thumbnail()): ?>

								background: url('<?php  the_post_thumbnail_url(); ?>')


							<?php endif; ?>

							<?php if (get_field('cor_de_fundo')){
									echo ';background-color:';
									the_field('cor_de_fundo');
								}
							?>

							" id="6">


					<div class="container infoHD">

							<header class="infoHeader">
									<div class="peopleTitle">
										EVENTOS A SEGUIR
									</div>

									<div class="bigTitle col-md-6">
										NOSSA AGENDA <br/>MENSAL
									</div>

							</header>



					</div>

					<div class="container possHold">
							<div class="row">



								<?php while( $query_agenda -> have_posts() ):
										$query_agenda -> the_post(); ?>




										<div class="item col-md-8">
											<div class="leftSch col-md-3">

												<?php

														$date = get_field('data', false, false);;
														$date = new DateTime($date);


													?>

												<div class="theDateSh">
													<?php echo $date->format('j M Y'); ?>
													<?php echo date_i18n( 'D', $date->getTimeStamp() ); ?>

												</div>
												<div class="theDayTime">
													<?php $time = get_field('horario');?>
													<?php $diasem = date_i18n( 'D', $date->getTimeStamp() ); ?>
													<?php echo $diasem, ' ' ,$time, 'H'; ?>
												</div>




											</div>

											<div class="rightSch col-md-6">
												<section class="boxesTitle">
													<?php the_title() ?>
												</section>
												<div class="blackLine"></div>
												<span class="boxesContent col-md-11">
													<?php the_excerpt();?>
												</span>
											</div>

										</div>






								<?php endwhile; ?>
					</div>
				</div>
			</section>
			<?php wp_reset_postdata(); ?>
		<?php endif; ?>


























		<?php 	$blog_args = array(
					'post_type' => 'post',
					'posts_per_page' => '6',
					'post_status' => 'publish'

				);

			$query_blog = new WP_Query($blog_args);
		?>


		<?php if ( $query_blog -> have_posts() ) : ?>


			<section class="typeBlog blog_type <?php if(get_field('ocupar_toda_tela')){ echo 'fullSize ';} ?>" style="

							<?php if (has_post_thumbnail()): ?>

								background: url('<?php  the_post_thumbnail_url(); ?>')


							<?php endif; ?>

							<?php if (get_field('cor_de_fundo')){
									echo ';background-color:';
									the_field('cor_de_fundo');
								}
							?>

							" id="7">

					<div class="container infoHD">

							<header class="infoHeader">


									<div class="bigTitle col-md-6">
										POSTAGENS ATUAIS
									</div>

									<div class="peopleTitle">
										ATUALIZE-SE
									</div>

							</header>



					</div>
			</section>

			<section class="blogList" id="8">
				<div class="container">
					<div class="row">

						<?php while( $query_blog -> have_posts() ):
								$query_blog -> the_post(); ?>

							<div class="col-md-4 blogPost">


									<div class="blogImage">
										<?php the_post_thumbnail('medium'); ?>
									</div>

									<div class="postCategories">
										<?php the_category( ); ?>
									</div>

									<div class="blogTitle">
										<!-- <a href="<?php the_permalink();?>"> -->
											<?php the_title( ); ?>
										<!-- </a> -->
									</div>

									<div class="blogExcerpt">
										<?php the_excerpt( ); ?>
									</div>

									<div class="postInfo">
										<span class="blogAuthor">
											<?php the_author( ); ?>
										</span>
										<span class="blogTime">
											<?php the_time('d F, Y.'); ?>
										</span>
									</div>


							</div>











						<?php endwhile; ?>
					</div>
				</div>
			</section>
			<?php wp_reset_postdata(); ?>
		<?php endif; ?>























































		<?php 	$contato_args = array(
					'post_type' => 'contato_type',
					'posts_per_page' => 1,
				);

			$query_contato = new WP_Query($contato_args);
		?>


		<?php if ( $query_contato -> have_posts() ) : ?>
			<?php while( $query_contato -> have_posts() ):
					$query_contato -> the_post(); ?>



				<section class="typeInformativo <?php echo get_post_type();?> <?php if(get_field('ocupar_toda_tela')){ echo 'fullSize ';} ?>" style="

							<?php if (has_post_thumbnail()): ?>

								background: url('<?php  the_post_thumbnail_url(); ?>')


							<?php endif; ?>

							<?php if (get_field('cor_de_fundo')){
									echo ';background-color:';
									the_field('cor_de_fundo');
								}
							?>

							" id="9">

					<div class="container">
						<div class="row flexFlowColunmC">


							<div class="col-md-6">

								<div class="contatoTitle">
									<?php the_title();?>
								</div>

								<div class="contatoContent">
									<?php the_content(); ?>
								</div>

							</div>

							<div class="col-md-5 formContato pull-right">
								<?php if ( $value = get_post_meta( get_the_ID(), 'shortcode_do_formulario', true ) ) : ?>

										<?php echo apply_filters( 'the_content', $value );?>

								<?php endif;?>
							</div>



						</div>
					</div>

				</section>



			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
		<?php endif; ?>












































































	</div>








	</div>
<?php
get_footer();







































