<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Ecommerce_template
 */

?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="container-fluid">
		<div class="row">
			<h1><?php echo get_the_title();?></h1>
			<?php echo  get_the_content()?>
		</div>
	</div>
</div><!-- #post-<?php the_ID(); ?> -->