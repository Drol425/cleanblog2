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
