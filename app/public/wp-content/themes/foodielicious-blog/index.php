<? get_header(); ?>

This is the index page.
<?php if(have_posts()) { ?>
    <? while(have_posts()) { ?>
        <?php the_post(); ?>
        <h2 class="article-header">
            <a class="title" href="<?php the_permalink() ?>" title="<?php the_title_attribute();?>"><?php the_title()?></a>
        </h2>
        <div class="post-info">
            Posted on 
            <a href="<?php echo get_permalink()?>">
                <time class="post-date-cutomizable" datetime="<?php echo get_the_date('c')?>"><?php echo get_the_date()?> </time>
            </a>
            By 
            <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'))?>">
                <?php echo get_the_author(); ?>
            </a>
        </div>
        <div class="post excerpt">
            <?php the_excerpt();?>
        </div>
        <a href="<?php echo get_the_permalink()?>" title="<?php the_title_attribute(); ?>">
            Read More
        </a>
    <?php } ?>
    <?php the_posts_pagination() ?>
<?php } else{ ?>
    <p>Sorry no posts match your criteria</p>
<?php } ?>

<? get_footer(); ?>