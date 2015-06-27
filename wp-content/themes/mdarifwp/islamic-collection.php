<?php
/*
  Template Name: Islamic Collection
 */
?>

<?php get_header(); ?>

<style type="text/css">
    ul.islamicBook {
        padding: 0;
        border: 0;
        margin-top: 10px;
        overflow: hidden;
        display: block;
        list-style: none outside none;
    }
    .islamicBook li {
        margin: auto;
        border: 0;
        float: left;
        text-align: center;
        padding: 0 4px;
        display:inline
    }
    .islamicBook a:link{
        text-decoration:none;
        color: #09f;
        font-weight: bold;
    }
    .islamicBook a:visited{
        color:#FFF;
        text-decoration:none;
        font-weight: bold;
    }
    .islamicBook a:hover{
        color: #00FF00;
        font-weight: bold;
    }
    .islamicBook .attachment-129x129{
        width: 129px;
        height: 129px;
    }
</style>

<?php get_sidebar(); ?>

<div id="content">
    <div id="contheader">
        <h2>Welcome to my Site!</h2>
    </div>
    <div id="content2">
        <div style="text-align: center;"><?php the_post_thumbnail(); ?></div>
        
        <?php $item = count(query_posts("posts_per_page=-1&post_type=page&post_parent={$post->ID}&order=ASC")); ?>
        
        <?php $i=0; while (have_posts()) : the_post();?>
        
         <?php if($i==0){echo "<ul class='islamicBook'>";}?>
        
        <?php 
            $title = $post->post_title;
            $id = $post->ID;
        ?>
        
            <li>
                <a href="<?=array_values(get_post_meta($id))[3][0]?>" title="<?=$title?>" target="_blank">
                    <?php the_post_thumbnail(array(129,129));?>
                </a>
                
                <?php if($link = get_post_meta($id, "read", true)){?>
                <br/>
                <a href="<?=$link?>" target="_blank" title="<?=$title?>">
                    Read
                </a>
                <?php } ?>
                
                <?php if($link = get_post_meta($id, "download", true)){?>
                <br/>
                <a href="<?=$link?>" target="_blank" title="<?=$title?>">
                    Download
                </a>
                <?php } ?>
                
                <?php if($link = get_post_meta($id, "download_read", true)){?>
                <br/>
                <a href="<?=$link?>" target="_blank" title="<?=$title?>">
                    Download &amp; Read
                </a>
                <?php } ?>
                
                <?php if($link = get_post_meta($id, "watch_read", true)){?>
                <br/>
                <a href="<?=$link?>" target="_blank" title="<?=$title?>">
                    Watch &amp; Read
                </a>
                <?php } ?>
            </li>
        
         <?php $i++; ?>
          
         <?php if($i==4||$i==$item){echo "</ul>"; $i=0;}?>

	<?php endwhile; wp_reset_query(); ?>
    </div><!-- content2 -->
</div><!-- content -->

<?php get_footer(); ?>