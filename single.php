<?php get_header(); ?>
<!-- end of header -->  
        
 <?php get_sidebar(); ?>
<div id="templatemo_wrapper">    
    
    <div id="templatemo_right_column">
        
        <div id="templatemo_main">
        
            <div class="post_section">
			<?php if( have_posts() ){ while( have_posts() ){ the_post(); ?>             
                <h2><?php the_title(); ?></h2>
    
                <strong>Date:</strong> <a><?php the_date('Y-m-d'); ?></a>| <strong>Author:</strong> <?php echo get_the_author_link(); ?> | <strong>Category:</strong> <a href="#">Freebies</a>        
              <p><?php the_content(); ?></p>
               
			<?php } /* конец while */ ?>
			<?php
} ?>
		  </div>
  </div> 
  </div>
    <div class="cleaner"></div>
</div><!-- end of templatemo_left_column -->
 <?php get_footer(); ?>
