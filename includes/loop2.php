<?php
/**
 * Loop related functions
 *
 * @package fluida
 */


/**
 * Sets the post excerpt length to the number of words set in the theme settings
 */
function fluida_excerpt_length_words( $length ) {
	return absint( cryout_get_option( 'fluida_excerptlength' ) );
}
/**
 * Adds a pretty "Continue Reading" link to custom post excerpts.
 */
function fluida_custom_excerpt_more() {
	if ( ! is_attachment() ) {
		 echo wp_kses_post( fluida_continue_reading_link() );
	}
}
/**
 * Returns a "Continue Reading" link for excerpts
 */
function fluida_continue_reading_link() {
	$fluida_excerptcont = cryout_get_option( 'fluida_excerptcont' );
	return '<a class="continue-reading-link" href="'. esc_url( get_permalink() ) . '"><span>' . wp_kses_post( $fluida_excerptcont ). '</span><i class="icon-right-dir"></i></a>';
}

add_filter( 'excerpt_length', 'fluida_excerpt_length_words' );
add_action( 'cryout_post_excerpt_hook', 'fluida_custom_excerpt_more',10 );
add_filter( 'the_content_more_link', 'fluida_continue_reading_link' ); // 'More' tag


/**
 * Replaces "[...]" (appended to automatically generated excerpts) with an ellipsis and fluida_continue_reading_link().
 */
function fluida_auto_excerpt_more( $more ) {
	return cryout_get_option( 'fluida_excerptdots' );
}
add_filter( 'excerpt_more', 'fluida_auto_excerpt_more' );


/**
 * Adds a "Continue Reading" link to post excerpts created using the <!--more--> tag.
 */
function fluida_more_link( $more_link, $more_link_text ) {
	$fluida_excerptcont = cryout_get_option( 'fluida_excerptcont' );
	$new_link_text = $fluida_excerptcont;
	if ( preg_match( "/custom=(.*)/", $more_link_text, $m ) ) {
		$new_link_text = $m[1];
	}
	$more_link = str_replace( $more_link_text, $new_link_text, $more_link );
	$more_link = str_replace( 'more-link', 'continue-reading-link', $more_link );
	return $more_link;
}
add_filter( 'the_content_more_link', 'fluida_more_link', 10, 2 );


/**
 * Remove inline styles printed when the gallery shortcode is used.
 * Galleries are styled by the theme in style.css.
 */
function fluida_remove_gallery_css( $css ) {
	return preg_replace( "#<style type='text/css'>(.*?)</style>#s", '', $css );
}
add_filter( 'gallery_style', 'fluida_remove_gallery_css' );

/**
 * Posted in category
 */
if ( ! function_exists( 'fluida_posted_category' ) ) :
function fluida_posted_category() {
	$fluida_meta_category = cryout_get_option( 'fluida_meta_category' );

	if ( $fluida_meta_category && get_the_category_list() ) {
		echo '<div class="entry-meta">
				<span class="bl_categ"' . cryout_schema_microdata( 'category', 0 ) . '>
					<i class="icon-folder-open icon-metas" title="' . __( "Categories", "fluida" ) . '"></i>'
					. get_the_category_list( ', ' ) .
				'</span>
			  </div>';
	}
} // fluida_posted_category()
endif;

/**
 * Posted by author
 */
if ( ! function_exists( 'fluida_posted_author' )) :
function fluida_posted_author() {
	$fluida_meta_author = cryout_get_option( 'fluida_meta_author' );

	if ( $fluida_meta_author ) {
		echo sprintf(
			'<span class="author vcard"' . cryout_schema_microdata( 'author', 0 ) . '>
				<em>' . __( 'By', 'fluida' ) . '</em>
				<a class="url fn n" rel="author" href="%1$s" title="%2$s"' . cryout_schema_microdata( 'author-url', 0 ) . '>
					<em' .  cryout_schema_microdata( 'author-name', 0 ) . '>%3$s</em>
				</a>
			</span>',
			esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
			sprintf( esc_attr__( 'View all posts by %s', 'fluida' ), get_the_author() ),
			get_the_author()
		);
	}
} // fluida_posted_author
endif;

/**
 * Posted date/time, tags
 */
if ( ! function_exists( 'fluida_posted_meta' ) ) :
function fluida_posted_meta() {
	$fluida_meta_date = cryout_get_option( 'fluida_meta_date' );
	$fluida_meta_time = cryout_get_option( 'fluida_meta_time' );
	$fluida_meta_tag  = cryout_get_option( 'fluida_meta_tag' );

	// Post date/time
	if ( $fluida_meta_date || $fluida_meta_time ) {
		$date = ''; $time = '';
		if ( $fluida_meta_date ) { $date = get_the_date(); }
		if ( $fluida_meta_time ) { $time = esc_attr( get_the_time() ); }
		?>

		<span class="onDate date" >
				<i class="icon-time icon-metas" title="<?php _e( "Date", "fluida" ) ?>"></i>
				<time class="published" datetime="<?php echo get_the_time( 'c' ) ?>" <?php cryout_schema_microdata( 'time' ) ?>>
					<?php echo $date . ( ( $fluida_meta_date && $fluida_meta_time ) ? ', ' : '' ) . $time ?>
				</time>
				<time class="updated" datetime="<?php echo get_the_modified_time( 'c' )  ?>" <?php cryout_schema_microdata( 'time-modified' ) ?>><?php echo get_the_modified_date();?></time>
		</span>
		<?php
	}

	// Retrieves tag list of current post, separated by commas.
	$tag_list = get_the_tag_list( '<span style="font-weight:500;font-size:18px;margin-top:2px;"><span style="border:2px solid #222222;border-radius:3px;background-color:#222222;margin-right:2px;padding:0px;">&nbsp;<i class="fa fa-tags" aria-hidden="true" style="color:#ff0000;"></i>&nbsp;', '&nbsp;</span><span style="border:2px solid #222222;border-radius:3px;background-color:#222222;margin-right:2px;padding:0px;">&nbsp;<i class="fa fa-tags" aria-hidden="true" style="color:#ff0000;"></i>&nbsp;', '&nbsp;</span></span>' );
	if ( $fluida_meta_tag && $tag_list ) { ?>
		<span class="footer-tags" <?php cryout_schema_microdata( 'tags' ) ?> style="">
		</span>
		<?php
	}

}; // fluida_posted_meta()
endif;


/**
 * Post edit link for editors
 */
if ( ! function_exists( 'fluida_posted_after' ) ) :
function fluida_posted_after() {
	edit_post_link( __( 'Edit', 'fluida' ), '<span class="edit-link icon-metas"><i class="icon-edit icon-metas"></i> ', '</span>' );
	cryout_post_footer_hook(); /* ?!? */

}; // fluida_posted_after()
endif;


function fluida_meta_format() {

	$format = get_post_format();
	if ( current_theme_supports( 'post-formats', $format ) ) {
		printf( '<span class="entry-format"><a href="%1$s"><i class="icon-%2$s" title="%3$s"></i></a></span>',
			esc_url( get_post_format_link( $format ) ),
			$format,
			get_post_format_string( $format )
		);
	}

}

function fluida_meta_infos() {
	add_action( 'cryout_post_title_hook', 'fluida_posted_category' );
	add_action( 'cryout_post_meta_hook', 'fluida_posted_author', 10 );
	add_action( 'cryout_post_meta_hook', 'fluida_posted_meta', 11 );
	add_action( 'cryout_post_meta_hook', 'fluida_posted_after', 12 );
	add_action( 'cryout_post_meta_hook', 'fluida_comments_on', 13 );
	add_action( 'cryout_meta_format_hook', 'fluida_meta_format' );
}
add_action( 'wp_head', 'fluida_meta_infos' );


/* Remove category from rel in category tags */
function fluida_remove_category_tag( $text ) {
	$text = str_replace( 'rel="category tag"', 'rel="tag"', $text );
	return $text;
}
//add_filter( 'the_category', 'fluida_remove_category_tag' );
//add_filter( 'get_the_category_list', 'fluida_remove_category_tag' );


/**
 * Backup navigation
 */
if ( ! function_exists( 'fluida_content_nav' ) ) :
function fluida_content_nav( $nav_id ) {
	global $wp_query;
	if ( $wp_query->max_num_pages > 1 ) : ?>

		<nav id="<?php echo $nav_id; ?>" class="navigation">

			<span class="nav-previous">
				 <?php next_posts_link( '<i class="icon-left-dir"></i>' . __( 'Older posts', 'fluida' ) ); ?>
			</span>

			<span class="nav-next">
				<?php previous_posts_link( __( 'Newer posts', 'fluida' ) . '<i class="icon-right-dir"></i>' ); ?>
			</span>

		</nav><!-- #<?php echo $nav_id; ?> -->

	<?php endif;
}; // fluida_content_nav()
endif;


/**
 * Adds a post thumbnail and if one doesn't exist the first post image is returned
 * @uses cryout_get_first_image( $postID )
 */
if ( ! function_exists( 'fluida_set_featured_thumb' ) ) :
function fluida_set_featured_thumb() {

	global $post;
	$fluids = cryout_get_option( array( 'fluida_fpost', 'fluida_fauto', 'fluida_falign' ) );

	if ( function_exists('has_post_thumbnail') && has_post_thumbnail() && $fluids['fluida_fpost']) {
		// has featured image
		$featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'fluida-featured' );

	} elseif ( $fluids['fluida_fpost'] && $fluids['fluida_fauto'] && empty($featured_image) ) {
		// get the first image from post
		$featured_image = cryout_post_first_image( $post->ID, 'fluida-featured' );

	} else {
		// featured image not enabled or not obtainable
		$featured_image = '';
	};

	if ( ! empty( $featured_image[0] ) ):
		$featured_image_url = esc_url( $featured_image[0] );
		$featured_image_w = $featured_image[1];
		$featured_image_h = $featured_image[2]; ?>
		<div class="post-thumbnail-container"  <?php cryout_schema_microdata( 'image' ); ?>>

			<a href="<?php echo esc_url( get_permalink( $post->ID ) ) ?>" title="<?php echo esc_attr( get_post_field( 'post_title', $post->ID ) ) ?>"
				<?php cryout_echo_bgimage( $featured_image_url, 'post-featured-image' ) ?>>

			</a>
      <div class="used">
        <!-- <div id="loader" style="display:none;">
  <div id="shadow"></div>
  <div id="box"></div>
</div> -->
       <div id="preloaders" style="display:none;">
  <div id="loaders"></div>
</div>
			<a class="responsive-featured-image dumpo" href="<?php echo esc_url( get_permalink( $post->ID ) ) ?>" title="<?php echo esc_attr( get_post_field( 'post_title', $post->ID ) ) ?>">
				<img class="post-featured-image duffer" alt="" <?php cryout_schema_microdata( 'url' ); ?> data-src="<?php echo $featured_image_url; ?>" src="<?php echo $featured_image_url; ?>" />
       //<?php if(is_mobile()){ echo '<i id="player" class="fa fa-play" aria-hidden="true" style="padding:2.5px 2.5px;position:absolute;left:2%;bottom:87%;border-radius:4px; color:red;font-size:20px;"></i>'; if(has_tag("2020")) { echo '<i class="destroy" aria-hidden="true" style="padding:2.5px 2.5px;position:absolute;right:2%;top:53%;">2020</i>'; }if((has_tag("uncensored") && has_tag("1080p")) { echo '<a href="/tags/uncensored-hentai" target="_blank"><i class="fa fa-eye" aria-hidden="true" style="padding:2.5px 2.5px;position:absolute;right:2.5%;bottom:87%;background:red;border-radius:4px;"></i></a><a href="/tags/1080p" target="_blank"><i class="destroy" aria-hidden="true" style="padding:2.5px;position:absolute;right:2.4%;bottom:76%;color:#fff;background:red;border-radius:4px;font-size:10px;">HD+</i></a>'; } elseif(has_tag("uncensored")) { echo '<a href="/tags/uncensored-hentai" target="_blank"><i class="fa fa-eye" aria-hidden="true" style="padding:2px;position:absolute;right:2.5%;bottom:90%;background:red;border-radius:4px;"></i></a>'; }  else { if(has_tag("1080p")) { echo '<a href="/tags/1080p" target="_blank"><i class="destroy" aria-hidden="true" style="padding:1px;position:absolute;right:2.5%;bottom:90%;color:#fff;background:red;border-radius:4px;font-size:10px;">HD+<br></i></a>';}}} if(!is_mobile()) { if(has_tag("2020")) { echo '<a href="/tags/2020/" target="_blank"><i class="destroy" aria-hidden="true" style="padding:2.5px 2.5px;position:absolute;right:2%;top:60%;">2020</i></a>'; } if(has_tag("uncensored") && has_tag("1080p")) { echo '<a href="/tags/uncensored-hentai" target="_blank"><i class="fa fa-eye" aria-hidden="true" style="padding:2.5px 2.5px;position:absolute;right:2.5%;bottom:90%;background:red;border-radius:4px;"></i></a><a href="/tags/1080p" target="_blank"><i class="destroy" aria-hidden="true" style="padding:2.5px;position:absolute;right:2.4%;bottom:80%;;color:#fff;background:red;border-radius:4px;font-size:11px;">HD+</i></a>'; } elseif(has_tag("uncensored")) { echo '<a href="/tags/uncensored-hentai" target="_blank"><i class="fa fa-eye" aria-hidden="true" style="padding:2px;position:absolute;right:2.5%;bottom:90%;background:red;border-radius:4px;"></i></a>'; }  else { if(has_tag("1080p")) { echo '<a href="/tags/1080p" target="_blank"><i class="destroy" aria-hidden="true" style="padding:1px;position:absolute;right:2.5%;bottom:90%;color:#fff;background:red;border-radius:4px;font-size:11px;">HD+</i></a>'; }}} ?>
        <!--<span class="video" data-video="<?php $a = "https://hfdl.site/fucked.php?postID=".  $post->ID ; echo $a; ?>"></span>-->
        </a></div>
			<meta itemprop="width" content="<?php echo $featured_image_w; ?>">
			<meta itemprop="height" content="<?php echo $featured_image_h; ?>">

		</div>
	<?php
	endif;
};
endif; // fluida_set_featured_thumb()
if ( cryout_get_option( 'fluida_fpost' ) ) add_action( 'cryout_featured_hook', 'fluida_set_featured_thumb' );

/* FIN */
