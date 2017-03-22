<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header(); ?>


			<?php
				// Start the Loop.
				while ( have_posts() ) : the_post(); ?>

					<section class="itselfBlock <?php if(get_field('ocupar_toda_tela')){ echo 'fullSize ';} ?>" style="

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
										<div class="row theBlocKlink">


												<div class="theblockTitle col-md-12">
													<?php the_title();?>
												</div>

												<div class="theBlockContent col-md-8">
													<?php the_content(); ?>
												</div>




										</div>
									</div>

								</section>


			<?php		// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				endwhile;
			?>


<?php
get_footer();
