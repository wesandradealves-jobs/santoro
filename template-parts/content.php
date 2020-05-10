<?php
/**
 * Template part for displaying posts and search results.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Acme Themes
 * @subpackage Lawyer Zone
 */
global $lawyer_zone_customizer_all_values;
$content_from = $lawyer_zone_customizer_all_values['lawyer-zone-blog-archive-content-from'];
$no_blog_image = '';

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="content-wrapper">
        <?php
        $thumbnail = $lawyer_zone_customizer_all_values['lawyer-zone-blog-archive-img-size'];
        if( has_post_thumbnail() && 'disable' != $thumbnail):
	        ?>
            <!--post thumbnal options-->
            <div class="image-wrap">
                <div class="post-thumb">
                    <a href="<?php the_permalink(); ?>">
				        <?php the_post_thumbnail( $thumbnail ); ?>
                    </a>
                </div><!-- .post-thumb-->
            </div>
	        <?php
        else:
	        $no_blog_image = 'no-image';
        endif;
        ?>
        <div class="entry-content <?php echo $no_blog_image?>">
	        <?php
	        if ( 'post' === get_post_type() && has_category() ) : ?>
            <header class="entry-header <?php echo $no_blog_image; ?>">
                <div class="entry-meta">
			        <?php
			        lawyer_zone_cats_lists()
			        ?>
                </div><!-- .entry-meta -->
            </header><!-- .entry-header -->
	        <?php
	        endif; ?>
			<div class="entry-header-title">
				<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
			</div>
            <footer class="entry-footer">
				<?php lawyer_zone_entry_footer(); ?>
            </footer><!-- .entry-footer -->
			<?php
            if ( 'content' == $content_from ) :
	            the_content( sprintf(
	            /* translators: %s: Name of current post. */
		            wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'lawyer-zone' ), array( 'span' => array( 'class' => array() ) ) ),
		            the_title( '<span class="screen-reader-text">"', '"</span>', false )
	            ) );
	            wp_link_pages( array(
		            'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'lawyer-zone' ),
		            'after'  => '</div>',
	            ) );
            else :
                the_excerpt();
            endif;
			?>
		</div><!-- .entry-content -->
	</div>
</article><!-- #post-## -->