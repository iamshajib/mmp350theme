<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package symple_theme
 */

?>

<div class="myPostContainer" id="id-<?php the_ID(); ?>">
<div class="myPostTitle">
	
	<a href="<?php the_permalink(); ?> "> 
	<?php the_title(); ?>
	</a>

	<?php the_title(); ?>
	<?php the_content(); ?>
	<?php the_author(); ?>
	<?php the_time(); ?>
	
</div>

</div>