<?php
// Do not allow directly accessing this file.
if (!defined('ABSPATH')) {
    exit('Direct script access denied.');
}
/**
 * @var $author_Id
 * @var $author_name
 */
?>
<a href="<?php echo get_author_posts_url( $author_Id ); ?>" title="<?php esc_attr_e('Browse Author Articles','crown') ?>">
    <span><?php esc_html_e( 'By', 'crown' ) ?></span> <span><?php echo esc_html($author_name); ?></span>
</a>
