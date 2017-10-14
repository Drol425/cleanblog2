<?php
/*

    Template: index

*/

?>
<?php get_header(); ?>
    <!-- end of header -->

<?php get_sidebar(); ?>

    </div> <!-- end of templatemo_left_column -->

    <div id="templatemo_right_column">

        <div id="featured_project">
            <div id="slider">
                <ul id="sliderContent">
                    <li class="sliderImage">
                        <a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/slider/1.jpg" alt="1"/></a>
                        <span class="top"><strong>Project 1</strong><br/>Suspendisse turpis arcu, dignissim ac laoreet a, condimentum in massa.</span>
                    </li>
                    <li class="sliderImage">
                        <a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/slider/2.jpg" alt="2"/></a>
                        <span class="bottom"><strong>Project 2</strong><br/>uisque eget elit quis augue pharetra feugiat.</span>
                    </li>
                    <li class="sliderImage">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/slider/3.jpg" alt="3"/>
                        <span class="left"><strong>Project 3</strong><br/>Sed et quam vitae ipsum vulputate varius vitae semper nunc.</span>
                    </li>
                    <li class="sliderImage">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/slider/4.jpg" alt="4"/>
                        <span class="right"><strong>Project 4</strong><br/>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                    </li>
                    <li class="clear sliderImage"></li>
                </ul>
            </div>
        </div>

        <div id="templatemo_main">
            <?php while (have_posts()): the_post(); ?>

                <div class="post_section">

                    <span class="comment"><?php echo get_comments_number(); ?></span>

                    <h2><a href="blog_post.html"><?php the_title() ?></a></h2>

                    <?php echo get_the_date("d F Y года"); ?> | <strong>Автор:</strong> <?php the_author(); ?> |
                    <strong>Категория: </strong><?php  the_category(', '); ?>

                    <p><?php the_content( 'Продолжить чтение...', TRUE ); ?></p>

                </div>

            <?php endwhile; ?>

        </div>

        <div class="cleaner"></div>
    </div>
    <!-- end of templatemo_main -->
    <div class="cleaner_h20"></div>
<?php get_footer(); ?>