<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Fluida
 */

get_header();?>

<div id="container" class="<?php echo fluida_get_layout_class(); ?>">
	<main id="main" role="main"  class="main">
		<?php cryout_before_content_hook(); ?>

		<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); cryout_schema_microdata('page');?> style="margin:10px;">
				<div class="article-inner">
					<header>
						<?php cryout_post_title_hook(); ?>
						<?php the_title( '<h1 class="entry-title" ' . cryout_schema_microdata('entry-title', 0) . 'style="font-size:30px;margin-left:10px;white-space:normal;margin-bottom:10px;">', '</h1>' ); ?> 
                            <div class="entry-meta">
							<?php cryout_post_meta_hook(); ?>
						    </div><!-- .entry-meta -->
					</header> <!-- header ed -->
				    <!-- Div: Entry Content Start -->
					<div class="entry-content" <?php cryout_schema_microdata('entry-content'); ?>>
                     <!--Video Tags -->
                     <?php the_tags( '<div class="hentaitags" style="list-style-type:none;font-weight:500;font-size:20px;"><span style="border:2px solid #222222;border-radius:3px;display:-webkit-inline-box;margin:5px;"><i class="fa fa-tags" aria-hidden="true" style="color:#ff0000;margin:5px;"></i>&nbsp;', '&nbsp;</span><span style="border:2px solid #222222;border-radius:3px;display:-webkit-inline-box;margin:5px;">&nbsp;<i class="fa fa-tags" aria-hidden="true" style="color:#ff0000;"></i>&nbsp;', '&nbsp;</span></div>'); ?>
                     <!-- Video Tags End -->
                     <div class="col-lg-12 text-center">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-xs-12">
                                <?php the_content(); ?>
                            </div> <!-- col-lg end -->
                            <div class="col-lg-4 col-md-4 col-xs-12"> 
                            <!--<?php if(is_mobile()){ 
                            echo '<iframe style="background-color: white;" width="300" height="100" scrolling="no" frameborder="0" allowtransparency="true" marginheight="0" marginwidth="0" name="spot_id_10001817" src="//a.adtng.com/get/10001817?ata=adminzer0"></iframe>';
                            else  {
                            echo '<iframe style="background-color: white;" width="300" height="250" scrolling="no" frameborder="0" allowtransparency="true" marginheight="0" marginwidth="0" name="spot_id_10001808" src="//a.adtng.com/get/10001808?ata=adminzer0"></iframe>';
                            }
				?> -->
                            </div> <!-- col-lg end -->
                        </div> <!-- row end -->
                    </div>
                    <hr>
                    <div class="text-center" style="font-size:15px;"><em>Report Dead Links and Faulty Releases. For downloading, just right-click and save it.</em></div>
              
                   <div style="font-size:18px;border-top: 2px solid #fff;border-bottom: 2px solid #fff;margin-top:20px;"></div><br>
                   <div style="font-size:22px;">
                        <?php $category = get_the_category(); echo '<a style="color:red;float:left;" href="' . esc_url( get_category_link( $category[0]->term_id ) ) .  '"><span style="color:#fff;font-size:23px;">Series Name:</span>&nbsp;' . esc_html( $category[0]->name ) . '</a>'; echo '<a style="color:red;float:right;margin-right:25px;" href="' . esc_url( get_category_link( $category[0]->term_id ) ) .  '"><span style="color:#fff;font-size:23px;">Number of Episode(s):</span>&nbsp;' . esc_html( $category[0]->category_count ) . '</a><br>';?><br><div><?php $categories = get_the_category(); $category_id = $categories[0]->cat_ID; echo category_description( $category_id ); ?>
                    </div>
                </div>
                <div style="margin-top:150px;"><?php wp_related_posts()?></div>
						<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'fluida' ), 'after' => '</span></div>' ) ); ?>
					</div><!-- .entry-content -->
										
						<?php if ( get_the_author_meta( 'description' ) ) {
							// If a user has filled out their description, show a bio on their entries
							get_template_part( 'content/author-bio' );
					} ?>

					<footer class="entry-meta">
						<?php cryout_post_footer_hook(); ?>
					</footer><!-- .entry-meta -->

					<nav id="nav-below" class="navigation" role="navigation">
						<div class="nav-previous"><?php previous_post_link( '%link', '<i class="icon-left-dir"></i> <span>%title</span>' ); ?></div>
						<div class="nav-next"><?php next_post_link( '%link', '<span>%title</span> <i class="icon-right-dir"></i>' ); ?></div>
					</nav><!-- #nav-below -->

					<?php comments_template( '', true ); ?>
				</div><!-- .article-inner -->
			</article><!-- #post-## -->

		<?php endwhile; // end of the loop. ?>

		<?php cryout_after_content_hook(); ?>
	</main><!-- #main -->

	<?php fluida_get_sidebar(); ?>
</div><!-- #container -->

<?php get_footer(); ?>
