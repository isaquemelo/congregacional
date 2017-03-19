<?php
/**
 * Template Name: Template Pagina Slider
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

					<section class="<?php if(get_field('ocupar_toda_a_tela')){ echo 'fullSize';}?>" style="background: url('<?php  the_post_thumbnail_url(); ?>')">



						<?php the_title( ); ?>


						
					</section>


				<?php endwhile; ?>
			<?php endif; ?>


<?php
get_footer();
