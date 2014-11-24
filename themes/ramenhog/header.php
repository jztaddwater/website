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
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
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

<div class="pre-load"></div>
<div id="page" class="hfeed site <?php echo $post->post_name; ?>">


