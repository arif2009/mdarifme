<?php

/*
  Template Name: About Me
 */
?>

<?php get_header(); ?>

<?php get_sidebar(); ?>
<style type="text/css">
    .about{
        font: 15px/19px EmbSolaimanLipi,EmbAdorshoLipi,Arial;
        font-family: EmbSolaimanLipi,EmbAdorshoLipi,Arial;
        margin-top: 20px;
        margin-left: 20px;
    }
    .font{
        font: Helvetica, Arial, "Time New Romans", tahoma, sans-serif;
        font-family: Helvetica, Arial, "Time New Romans",tahoma, sans-serif;
    }
</style>
<div id="content">
    <div id="contheader">
        <h2>Welcome to my Site!</h2>
    </div>		
    <div id="content2">
        <div class="about">
            <h1 style="font-size: 2em;">About Me</h1>
            <br/>
            <div class="para font">
              I am Md.Arifur Rahman(Sazal). Born and raised in Bangladesh, Mehendiganj upazila of Barisal district. 
              There I studied till SSC. Then completed Diploma Engineering on "Computer Technology" and 
              then completed B.Sc Engineering on the field of "Computer Science &AMP; Engineering" from Dhaka University of Engineering and Technology(DUET).
              Now working as a "Software Engineer" at <a href="http://www.brainstation-23.com/" target="_blank">"Brain&nbsp;Station-23"</a>.
            </div>
            <br/>
            <div class="para">
                My 
                <br />GTalk <span style="color: #09f;">arif.rahman2009@gmail.com</span>
                <br/>Facebook <a href="https://www.facebook.com/arif.duet" target="_blank">www.facebook.com/arif.duet</a>
                <br/>Twitter <a href="https://twitter.com/ArifRahmanSazal" target="_blank">twitter.com/ArifRahmanSazal</a>
                <br/>ACM programming blogspot <a href="http://www.programmingsoln.blogspot.com/" target="_blank">www.programmingsoln.blogspot.com</a><br />
            </div>
            <br/>
            <h1 style="font-size: 2em;">আমার কথা</h1>
            <br/>
            <div class="para"> 
                আমি মো: আরিফুর রহমান(সজল)। জন্ম ও বেড়ে ওঠা বরিশাল জেলাধীন মেহেন্দীগঞ্জ উপজেলাতে। এস এস সি পর্যন্ত লেখাপড়া করেছি 
                সেখানেই। এরপর পটুয়াখালি পলিটেকনিক ইন্‌ষ্টিটিউট থেকে "কম্পিউটার প্রযুক্তিতে" ডিপ্লোমা ইঞ্জিনিয়ারিং ও ঢাকা প্রকৌশল ও প্রযুক্তি 
                বিশ্ববিদ্যালয় (ডুয়েট) থেকে "কম্পিউটার বিজ্ঞান ও প্রকৌশল" বিভাগে স্নাতক শেষ করে এখন<a href="http://www.brainstation-23.com/" target="_blank">"Brain Station-23"</a> তে 
                "সফটওয়্যার প্রকৌশলী" হিসেবে কর্মরত আছি। 
            </div>
            <br/>
            <div class="para">
                প্রচণ্ড ভালোবাসি প্রোগ্রামিং। আর এ ভালোবাসাটুকু মানুষের মাঝে ছড়িয়ে দিতে চাই। আমার যেসব বিষয়ে ধারনা আছে <span class="font">( php, CI Framework, jQuery, Asp.Net, C#.Net, CSS 960 Framework ) </span>, তা সম্পর্কে কারওর কোন প্রশ্ন থাকলে আমাকে প্রশ্ন করতে পারেন <span style="color: #09f;">arif.rahman2009@gmail.com</span> এ ইমেইল পাঠিয়ে অথবা <a href="https://www.facebook.com/arif.duet" target="_blank">www.facebook.com/arif.duet</a> এ মেসেজ পাঠিয়ে। আমি যথা সম্ভব উত্তর দেয়ার চেষ্টা করবো।
            </div>
            <br/>
            <div class="para">
                আমার <br />
                jQuery টিউটোরিয়াল <a href="http://www.tutorialbd.com/jquery/" target="_blank">www.tutorialbd.com/jquery</a><br />
                jQuery ব্লোগ <a href="http://www.tutorialbd.com/bn/?cat=1527" target="_blank">www.tutorialbd.com/bn/?cat=1527</a><br />
                ACM প্রোগ্রামিং ব্লোগ <a href="http://www.programmingsoln.blogspot.com/" target="_blank">www.programmingsoln.blogspot.com</a><br />
            </div><br />
            <div class="para">
                আলোকিত একটা সুন্দর সমৃদ্ধ পৃথিবী আমাদের প্রত্যেকেরই স্বপ্ন । আসুন আমরা আমাদের মেধা পরিশ্রম কে বিজ্ঞান সম্মতভাবে ব্যবহার করে, আমাদের স্বপ্ন পূরণে অংশ গ্রহণ করি। "HAVE A GOOD PROGRAMMING".
            </div>
            <?php 
            $args = array(
                'numberposts' => 1,
                'order'=> 'DESC',
                'post_mime_type' => 'image',
                'post_parent' => $post->ID,
                'post_type' => 'attachment'
            );

            $get_children_array = get_children($args,ARRAY_A);  //returns Array ( [$image_ID]... 
            $rekeyed_array = array_values($get_children_array);
            $first_attached_image = $rekeyed_array[0];
            ?>
            <br/>
            <a rel="lightbox" href="<?=$first_attached_image['guid']?>">
            <img src="<?=$first_attached_image['guid']?>" alt="Where is ARIF" width="100%" />
            </a>
        </div>
    </div><!-- content2 -->
</div><!-- content -->

<?php get_footer(); ?>