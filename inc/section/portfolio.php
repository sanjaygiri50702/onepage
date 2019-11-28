<?php
function onepage_add_portfolio_section(){
    $options = onepage_get_theme_options();
    if(intval($options['portfolio_section_enable'])!==1){
        return ;
    }
    $section_details = onepage_portfolio_section_details();
    onepage_render_portfolio_section($section_details);

}
function onepage_portfolio_section_details(){
    $options = onepage_get_theme_options();
    $args = [];
    $contents = [];
    switch ($options['portfolio_content_type']){
        case 'category':
            $args = array(
                'post_type'=> 'post',
                'order' =>'DSC',
                'cat'=>(!empty($options['portfolio_category'])) ? $options['portfolio_category'] : '',
                'posts_per_page'=>$options['portfolio_post_number']
            );
            break ;
        case 'post':
            $post_id = [];
            for ($i = 1; $i <= $options['portfolio_post_number']; $i ++){
                array_push($post_id,$options['portfolio_post'.$i.'']);
            }
            $args = array(
                'post_type'=> 'post',
                'posts_per_page'=>$options['portfolio_post_number'],
                'post__in' => (array) $post_id
            );
            break ;
        case 'page':
            $page_id = [];
            for ($i = 1; $i <= $options['portfolio_post_number']; $i ++){
                array_push($page_id,$options['portfolio_page'.$i.'']);
            }
            $args = array(
                'post_type'=> 'page',
                'posts_per_page'=>$options['portfolio_post_number'],
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
            array_push($contents,$content);
        }
    }
    return $contents;
}
function onepage_render_portfolio_section($contents = array()){
    $options = onepage_get_theme_options();
    ?>
    <div id="portfolio" class="page-section relative">
        <div class="container">
            <div class="portfolio-content-title clear">
                <header class="entry-header section-title">
                    <h2 class="entry-title"><?php echo $options['portfolio_title']; ?></h2>
                </header><!-- .entry-header -->
                <p class="description"><?php echo $options['portfolio_description'];?></p>
            </div><!-- portfolio-content -->
            <div class="entry-content col-<?php echo $options['portfolio_post_col'];?>">
                <div class="row">
                    <div class="portfolio-item">
                        <?php foreach ($contents as $content) { ?>
                            <div class="hentry">
                                <figure>
                                    <a href="<?php echo esc_url($content['permalink']);?>">
                                        <img src="<?php echo esc_url($content['thumbnail_url']);?>" alt="">
                                    </a>
                                </figure>
                                <div class="portfolio-title">
                                    <h4><a href="<?php echo esc_url($content['permalink']);?>"><?php echo esc_html__($content['title'],'onepagetheme');?></a></h4>
                                </div><!-- .portfolio-title -->

                                <div class="entry-summary">
                                    <?php esc_html_e($content['excerpt'],'onepagetheme');?>
                                </div><!-- .entry-summary -->
                            </div><!---.hentry--->
                        <?php } ?>
                    </div><!-- portfolio-item -->
                </div><!-- .row -->
            </div><!-- .entry-content / col-2 -->

            <div class="align-center">
                <a href="#" class="load-more">Load more portfolio
                    <i class="fa fa-angle-down"></i>
                </a>
            </div><!-- .align-center -->
        </div><!-- .container -->
    </div><!-- #portfolio -->
<?php } ?>
