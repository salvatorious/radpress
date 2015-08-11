<?php
// get url of current post's featured image
$imgURL = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );
?>

<a href="<?php the_field('youtube_url'); ?>" class="fancybox-media">
	<div class="episode" data-url="<?php echo $imgURL; ?>">
		<h1 class="title"><?php the_title(); ?></h1>
		<span class="tagline"><?php the_field('description'); ?></span>
	</div>
</a>

<style>
	#hero {
	    height: 80vh;
	    background-size: cover;
	    background-position: center center;
	    background-repeat: no-repeat;
	}	
</style>

<script src="assets/jquery.hoverIntent.min.js"></script>
<script>
	jQuery(document).ready(function($){
		// this script allows you to hover over divs with data-url attributes
		// to change the background-image of another div

		// preload images on episode data-attributes to reduce lag on hover effect
		var preloader = [];
	    $('.episode').each(function() {
	        var img = new Image();
	        img.src = $(this).data('url');
	        preloader.push(img);
	    });

		var episodeHover = {
			timeout: 0,
			over: function() {
				var episodeURL = $(this).attr('data-url');
				console.log(episodeURL);

				if(episodeURL) {
					var wrapURL = 'url(' + episodeURL + ')';
					$('#hero').css('background-image', wrapURL)
				}
			},
			out: function() {

			}
		}

		$('.episode').hoverIntent(episodeHover);
		
	});
</script>