<?php
/*
  Template Name: Ol-Li page Template
 */
?>

<?php get_header(); ?>

<style type="text/css">
p#resource {
    border:1px solid red;
    outline:green dotted thick;
    text-align: center;
    font-weight: bold;
    font-size: 1.3em;
    color: #f58421;
    font-family: Cambria,Arial,Helvetica,'Times New Roman',Sans-Serif,Museo,Rockwell,Serif,cursive;
    padding: 0;
}
/* -------------------------------------- */
div.ol-li-container ol{
    counter-reset: li;
    list-style: none;
    *list-style: decimal;
    font: 13px 'trebuchet MS', 'lucida sans', 'SolaimanLipi';
    padding: 0;
    margin-bottom: 1em;
    text-shadow: 0 1px 0 rgba(255,255,255,.5);
}

div.ol-li-container ol ol{
    margin: 0 0 0 2em;
}
.rectangle-list a{
    position: relative;
    display: block;
    padding: .4em .4em .4em .8em;
    *padding: .4em;
    margin: .4em 0 .4em 2.4em;
    background: #ddd;
    color: #444;
    text-decoration: none;
    -webkit-transition: all .3s ease-out;
    -moz-transition: all .3s ease-out;
    -ms-transition: all .3s ease-out;
    -o-transition: all .3s ease-out;
    transition: all .3s ease-out;	
}

.rectangle-list a:hover{
    background: #eee;
}	

.rectangle-list a:before{
    content: counter(li);
    counter-increment: li;
    position: absolute;	
    left: -2.4em;
    top: 50%;
    margin-top: -1em;
    background: #fa8072;
    height: 2em;
    width: 2em;
    line-height: 2em;
    text-align: center;
    font-weight: bold;
}

.rectangle-list a:after{
    position: absolute;	
    content: '';
    border: .5em solid transparent;
    left: -1em;
    top: 50%;
    margin-top: -.5em;
    -webkit-transition: all .3s ease-out;
    -moz-transition: all .3s ease-out;
    -ms-transition: all .3s ease-out;
    -o-transition: all .3s ease-out;
    transition: all .3s ease-out;				
}
.rectangle-list a:hover:after{
    left: -.5em;
    border-left-color: #fa8072;				
}
</style>

<?php get_sidebar(); ?>

<div id="content">
    <div id="contheader">
        <h2>Welcome to my Site!</h2>
    </div>		
    <div id="content2">
        
        <?php the_content();?>
        
        <?php the_tags( 'Tags: ', ', ', ''); ?>
        
    </div><!-- content2 -->
</div><!-- content -->

<?php get_footer(); ?>