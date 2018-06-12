<?php

/*
  Template Name: Gallery
 */
?>

<?php get_header(); ?>

<?=wp_enqueue_script('youtubeJS')?>

<?php get_sidebar(); ?>

<div id="content">
    <div id="contheader">
        <h2>Welcome to my Site!</h2>
    </div>		
    <div id="content2">
        <h2 style="text-align: center;margin-bottom: 3px;">Video Collection</h2>
        <div id="player"></div>
        
        <h2 style="text-align: center;margin: 3px 0;">Photo Album</h2>
        <iframe class="imgur-album" width="100%" height="450" frameborder="0" src="http://imgur.com/a/NNbeO/embed"></iframe>
    </div><!-- content2 -->
</div><!-- content -->
<script type="text/javascript">
    $(function() {
        $('#player').youTubeChannel({user:'ArifBarisal'});
    });
</script>
<?php get_footer(); ?>