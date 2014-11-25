<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package ramenhog
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="google-site-verification" content="UOqBuA6bdJFZoGr9msOOyp2Rtb1xLp5k2xEI0xn2HIk" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="http://d3js.org/d3.v3.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/trianglify/0.1.5/trianglify.min.js"></script>
<script src="http://d3js.org/colorbrewer.v1.min.js"></script>

<script type="text/javascript">
	var t = new Trianglify({
    x_gradient: Trianglify.colorbrewer.YlGnBu[(Math.random() * 9 | 0) + 1],
    y_gradient: Trianglify.colorbrewer.RdPu[(Math.random() * 9 | 0) + 1],
    noiseIntensity: 0.1,
    cellpadding: 10,
    cellsize: 100});

	var fadeOutPreLoad = function() {
		$('.pre-load').fadeOut(600);
		$('body').removeClass('loading');
	}

	function redraw() {
        var pattern = t.generate($('.home-bg').width(), $('.home-bg').height());
		$('.home-bg').attr('style', 'background-image: '+pattern.dataUrl);
    }

	$(document).ready(function(){
		setTimeout("fadeOutPreLoad()", 3000);
		redraw();

		$('.me-logo').click(function(){
			redraw();
		})
	})
</script>

<?php wp_head(); ?>
</head>

<body class="loading" <?php body_class(); ?>>
<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-5DB8WL"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5DB8WL');</script>
<!-- End Google Tag Manager -->

<div class="pre-load"></div>
<div id="page" class="hfeed site <?php echo $post->post_name; ?>">


