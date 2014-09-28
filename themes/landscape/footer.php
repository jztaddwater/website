<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package landscape
 * @since landscape 1.0
 */
?>

</div><!-- #main .site-main -->
</div><!-- #page .hfeed .site -->
	

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>  
<script src="<?php bloginfo('template_url');?>/js/flux.min.js"></script>  
<script>  
    window._flux = new flux.slider('#slider',{pagination: true});  
</script>  
<?php wp_footer(); ?>

</body>
</html>