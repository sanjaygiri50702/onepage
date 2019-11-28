<?php
function onepage_add_blog_section(){
    $options = onepage_get_theme_options();
    if(intval($options['blog_section_enable'])!==1){
        return ;
    }
    $section_details = onepage_blog_section_details();
    onepage_render_blog_section($section_details);

}
function onepage_blog_section_details(){
    $options = onepage_get_theme_options();
    $contents = [];
    $args = [];
    switch ($options['blog_content_type']){
        case 'category':
            $args = array(
                'post_type'=> 'post',
                'order' =>'DSC',
                'cat'=>(!empty($options['blog_category'])) ? $options['blog_category'] : '',
                'posts_per_page'=>$options['blog_post_number']
            );
            break ;
        case 'post':
            $post_id = [];
            for ($i = 1; $i <= $options['blog_post_number']; $i ++){
                array_push($post_id,$options['blog_post'.$i.'']);
            }
            $args = array(
                'post_type'=> 'post',
                'posts_per_page'=>$options['blog_post_number'],
                'post__in' => (array) $post_id
            );
            break ;
        case 'page':
            $page_id = [];
            for ($i = 1; $i <= $options['blog_post_number']; $i ++){
                array_push($page_id,$options['blog_page'.$i.'']);
            }
            $args = array(
                'post_type'=> 'page',
                'posts_per_page'=>$options['blog_post_number'],
                'post__in' => (array) $page_id,
                'orderby'=> 'post__in',
            );
            break ;
        default:
            break;

    }
    $query = new WP_Query($args);
    if($query->have_posts()){
        while ($query->have_posts()){
            $query->the_post();
            $content['title'] = get_the_title();
            $content['excerpt'] = get_the_excerpt();
            $content['permalink'] = get_the_permalink();
            $content['thumbnail_url'] = has_post_thumbnail() ? get_the_post_thumbnail_url( get_the_id(), 'post-thumbnail' ) : '';
            $content['cat_name'] = get_category_name(get_the_ID());
            $content['date'] = get_the_date();
            array_push($contents,$content);
        }
    }
    return $contents;
}
function onepage_render_blog_section($contents = array()){
    $options = onepage_get_theme_options();
    ?>
    <div id="latest-blog" class="page-section relative">
        <div class="container">
            <div class="latest-content-title clear">
                <header class="page-header section-title">
                    <h2 class="page-title"><?php echo esc_html($options['blog_title']);?></h2>
                </header><!-- .entry-header -->
                <p class="description"><?php echo esc_html($options['blog_description']);?></p>
            </div><!-- latest-content -->
            <div class="blog-posts-wrapper col-3 clear">
                <?php foreach ($contents as $content):?>
                <article id="post-1" class="hentry">
                    <div class="featured-image">
                        <a href="<?php esc_url($content['permalink']);?>"><img src="<?php echo esc_url($content['thumbnail_url']);?>"></a>
                    </div><!--.featured-image-->
                    <div class="entry-container">
                        <div class="entry-meta">
                            <span class="cat-links">
                                <span class="screen-reader-text">Categories</span>
                                <a href="#" rel="category tag"><?php echo esc_html($content['cat_name']);?></a>
                            </span><!-- .cat-links -->

                            <span class="posted-on">
                                <span class="screen-reader-text">Posted on</span>
                                <a href="<?php esc_url($content['permalink']);?>" rel="bookmark">
                                <time class="entry-date published" datetime="2016-07-21T10:00:09+00:00"><?php echo $content['date'];?></time>
                                </a>
                            </span><!-- .posted-on -->
                        </div><!-- .entry-meta -->

                        <header class="entry-header">
                            <h2 class="entry-title"><a href="<?php esc_url($content['permalink']);?>"><?php echo esc_html($content['title']); ?></a></h2>
                        </header>

                        <div class="entry-content">
                            <p><?php echo esc_html($content['excerpt']); ?></p>
                            <a href="<?php echo esc_url($content['permalink']); ?>" class="btn btn-fill">Read More</a>
                        </div><!--.blog-content-->
                    </div><!-- .entry-container -->
                </article><!-- #post-1 -->
                <?php endforeach;?>
            </div><!-- .blog-wrapper -->
            <div class="align-center">
                <a href="#" class="load-more">Load more blog
                    <i class="fa fa-angle-down"></i>
                </a>
            </div><!-- .align-center -->
        </div><!-- .container -->
    </div><!-- #latest-blog -->
<?php } ?>