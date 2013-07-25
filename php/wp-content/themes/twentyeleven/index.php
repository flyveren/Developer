<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 */
?>
 <?php get_header(); ?>
<div id="menu">
<a href="http://frem.freeforums.org/" class="icons"><i class="icon-star"></i>Forum</a>
<a href="mailto:mail@paulisroedder.dk" target="_top" class="icons"><i class="icon-mail-alt"></i>Kontakt</a>
<a href="https://www.facebook.com/Paulisrodder" class="icons"><i class="icon-facebook-squared"></i>Facebook</a>
<div id="target" data-icon="i" class="icons icon"></div>
</div>


<div id="container">	
<div id="baggrund"><img id="baggrund-img" src="<?php echo get_bloginfo('template_directory');?>/images/pauli_back.jpg"/></div>
<div id="twirl"><img id="twirl-img" src="<?php echo get_bloginfo('template_directory');?>/images/pauli_twirl.png"/></div>
<div id="front"><img id="front-img" src="<?php echo get_bloginfo('template_directory');?>/images/pauli_front.png"/></div>
</div>


<div id="om_klubben">
<?php $my_query = new WP_Query("showposts=1&post_type=page&page_id=2");
while ($my_query->have_posts()) : $my_query->the_post();
$do_not_duplicate = $post->ID; ?>
            <h1>
                <?php the_title(); ?>
            </h1>
            <p>
            	<?php the_content(); ?>
            </p>
<?php endwhile; ?>
</div>