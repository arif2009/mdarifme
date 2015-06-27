<div id="sidebar">

    <div id="login">
        <h2>Recent Posts</h2>
        <div class="box2 rpAndCat">
            <ul>
                <?php
                $recentPost_query = new WP_Query('showposts=5');
                while ($recentPost_query->have_posts()) : $recentPost_query->the_post();
                ?>
                <li <?=($post->ID===$wp_query->post->ID)?'class="current-post"':''?>>
                    <a href="<?=the_permalink()?>" rel="bookmark">
                        <?=the_title(); ?>
                    </a>
                </li>
                <?php endwhile; ?>
                <?php wp_reset_query();?>
            </ul>
        </div>
    </div><!-- login -->
    
    <div class="box">
        <h2>Categories</h2>
        <div class="box2 rpAndCat">
            <ul>
                <?= wp_list_categories(array('depth' => 1, 'title_li' => '','show_count' => 1)) ?>
            </ul>
        </div>
    </div><!-- box -->	
    
    <div class="box" style="overflow: hidden;">
        <h2>Archives</h2>
        <div class="box2 widget-archive">
            <?php include(TEMPLATEPATH.'/include/archives.php');?>
        </div>
    </div><!-- box -->

    <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar Widgets')) : else : ?>

        <!-- All this stuff in here only shows up if you DON'T have any widgets active in this zone -->

    <?php endif; ?>

</div><!-- sidebar -->