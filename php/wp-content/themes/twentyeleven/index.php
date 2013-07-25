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
<a href="https://www.facebook.com/Paulisrodder" class="icons"><i class="icon-facebook-squared"></i></a>
<div class="icons" id="megafon"><i class="icon-megaphone"></i></div>
<div id="email" class="icons"><i class="icon-mail-alt"></i></div>
<div id="galleri" class="icons"><i class="icon-camera"></i></div>
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

<div id="sange">
<?php $my_query = new WP_Query("showposts=1&post_type=page&page_id=7");
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

<div id="emailside">
<?php $my_query = new WP_Query("showposts=1&post_type=page&page_id=11");
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



<script type="text/javascript">
$("#galleri").click(function() {
	var midtdoc = $("#om_klubben").width()/2+30;
	var midt = $(window).width()/2-midtdoc;
	var om_klubben = document.getElementById("om_klubben");
	var position = $('#om_klubben').position();
	if(position.left < 0){
	TweenLite.to(om_klubben, 0.5, {left:midt, ease:Power1.easeInOut});
	TweenLite.to(sange, 0.5, {left:-2000, ease:Power1.easeInOut});
	TweenLite.to(emailside, 0.5, {left:-2000, ease:Power1.easeInOut});
}else{
	TweenLite.to(om_klubben, 0.5, {left:-2000, ease:Power1.easeInOut});
}
});

$("#megafon").click(function() {
	var midtdoc = $("#sange").width()/2+30;
	var midt = $(window).width()/2-midtdoc;
	var sange = document.getElementById("sange");
	var position = $('#sange').position();
	if(position.left < 0){
	TweenLite.to(sange, 0.5, {left:midt, ease:Power1.easeInOut});
	TweenLite.to(om_klubben, 0.5, {left:-2000, ease:Power1.easeInOut});
	TweenLite.to(emailside, 0.5, {left:-2000, ease:Power1.easeInOut});
}else{
	TweenLite.to(sange, 0.5, {left:-2000, ease:Power1.easeInOut});
}
});

$("#email").click(function() {
	var midtdoc = $("#emailside").width()/2+30;
	var midt = $(window).width()/2-midtdoc;
	var emailside = document.getElementById("emailside");
	var position = $('#emailside').position();
	if(position.left < 0){
	TweenLite.to(emailside, 0.5, {left:midt, ease:Power1.easeInOut});
	TweenLite.to(om_klubben, 0.5, {left:-2000, ease:Power1.easeInOut});
	TweenLite.to(sange, 0.5, {left:-2000, ease:Power1.easeInOut});
}else{
	TweenLite.to(emailside, 0.5, {left:-2000, ease:Power1.easeInOut});
}
});
</script>