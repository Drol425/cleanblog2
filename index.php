<?
/*
    Template: index
*/

?>
<? get_header(); ?>
    <!-- end of header -->

<? get_sidebar(); ?>

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
	        <? while ( have_posts() ): the_post(); ?>

                <div class="post_section">

                    <span class="comment"><?= get_comments_number(); ?></span>

                    <h2><a href="<?= get_post_permalink(); ?>"><?= the_title() ?></a></h2>

			        <?= get_the_date( "d F Y года" ); ?> | <strong>Автор:</strong> <?= the_author(); ?> |
                    <strong>Категория: </strong><? the_category( ', ' ); ?>

                    <p><? the_content( 'Продолжить чтение...', true ); ?></p>

                </div>

	        <? endwhile; ?>
        </div>

        <div class="cleaner"></div>
    </div>
    <!-- end of templatemo_main -->
    <div class="cleaner_h20"></div>
<? get_footer(); ?>
