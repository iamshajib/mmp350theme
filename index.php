<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package symple_theme
 */

get_header(); ?>

	<?php
	?>

	
    HIHOHOHIHOHOIHO

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		
		

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>
			
			<?php $do_not_duplicate; ?>

			<?php /*the first Loop */ ?>
			
			<?php query_posts('tag=readings' ); ?>

			<?php while ( have_posts() ) : the_post(); ?>
				$do_not_duplicate = $post->ID;

				<div class="thereadingsDiv">
				
					
				</div>

				<?php get_template_part( 'template-parts/content', 'tenSix' ); ?>


			<?php endwhile; ?>


			<?php /* Second loop */ ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php if($post->ID == $do_not_duplicate) continue; ?>

				<?php //get_template_part( 'template-parts/content', 'tenSix' ); ?>


			<?php endwhile; ?>




			<?php /* Start the Loop */ ?>

			<?php query_posts('catagory_name=loop' ); ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'tenSix' ); ?>
				


				<!-- <div class="myPost"> 
					<div class="myPostTitle">
						<?php the_title(); ?>
					 </div>
					 <div class="myPostContent">
					 	<?php the_content(); ?>
					 </div>
				</div>

				<div class="tenSixOne">
					<?php tenSixFunOne(); ?>
				</div> -->

			<?php 

				function appleCounter($bucketSize){

					$x = 1;

					while ($x <= $bucketSize){

						if ($x == 1){
							echo $x. "apple";
							echo "<br>";
						}

						else {
							echo $x. "apples";
							echo "<br>";
						}

						$x ++;

					}

				}	

				appleCounter(11);

			?>


			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php //get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
