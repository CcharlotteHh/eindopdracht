<?php get_header();?>
<?php if (have_posts()):
    while(have_posts()): the_post();?>
    <header><h1><?php the_title();?></h1></header>
    <h4>Aangemaakt op <?php the_time('F jS, Y')?></h4>
    <P><?php the_content();?></P>
<?php endwhile;
    else:
        echo "Geen data gevonden";
    endif;
    
    get_sidebar();
    get_footer();
?>    
