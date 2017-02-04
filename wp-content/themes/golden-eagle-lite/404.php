<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 */
?>
<?php get_header(); ?>
<div class="clear"></div>
<div class="page-content">
    <div class="eleven columns alpha">
        <div class="content-bar">
            <h1 class="page-title">
                <a><?php the_title(); ?>
                </a>
            </h1>
            <?php the_content(); ?>	
            <header class="entry-header">
                <h1 class="entry-title">
                    <?php _e('This is somewhat embarrassing, isn&rsquo;t it?', 'golden_eagle'); ?>
                </h1>
            </header>
            <p>
                <?php _e('It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching, or one of the links below, can help.', 'golden_eagle'); ?>
            </p>
            <?php get_search_form(); ?>
            <?php the_widget('WP_Widget_Recent_Posts', array('number' => 10), array('widget_id' => '404')); ?>
            <div class="widget">
                <h2 class="widgettitle">
                    <?php _e('Most Used Categories', 'golden_eagle'); ?>
                </h2>
                <ul>
                    <?php wp_list_categories(array('orderby' => 'count', 'order' => 'DESC', 'show_count' => 1, 'title_li' => '', 'number' => 10)); ?>
                </ul>
            </div>
            <?php
            /* translators: %1$s: smilie */
            $archive_content = '<p>' . sprintf(__('Try looking in the monthly archives. %1$s', 'golden_eagle'), convert_smilies(':)')) . '</p>';
            the_widget('WP_Widget_Archives', array('count' => 0, 'dropdown' => 1), array('after_title' => '</h2>' . $archive_content));
            ?>
            <?php the_widget('WP_Widget_Tag_Cloud'); ?>
        </div>
    </div>
    <div class="five columns alpha">
        <!--Start Sidebar-->
        <?php get_sidebar(); ?>
        <!--End Sidebar-->
    </div>
</div>
</div>
<?php get_footer(); ?>