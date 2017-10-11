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
                        <a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/slider/1.jpg" alt="1" /></a>
                        <span class="top"><strong>Project 1</strong><br />Suspendisse turpis arcu, dignissim ac laoreet a, condimentum in massa.</span>
                    </li>
                    <li class="sliderImage">
                        <a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/slider/2.jpg" alt="2" /></a>
                        <span class="bottom"><strong>Project 2</strong><br />uisque eget elit quis augue pharetra feugiat.</span>
                    </li>
                    <li class="sliderImage">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/slider/3.jpg" alt="3" />
                        <span class="left"><strong>Project 3</strong><br />Sed et quam vitae ipsum vulputate varius vitae semper nunc.</span>
                    </li>
                    <li class="sliderImage">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/slider/4.jpg" alt="4" />
                        <span class="right"><strong>Project 4</strong><br />Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                    </li>
                    <li class="clear sliderImage"></li>
                </ul>
            </div>
        </div>
        
        <div id="templatemo_main">
        
            <div class="post_section">
            
                <span class="comment"><a href="blog_post.html">128</a></span>
            
                <h2><a href="blog_post.html">Aliquam lorem ante dapibus</a></h2>
                
    
            	December 28, 2048 | <strong>Author:</strong> John | <strong>Category:</strong> <a href="#">Freebies</a>
                
                <img src="<?php echo get_template_directory_uri(); ?>/images/templatemo_image_01.jpg" alt="image 1" />
                
                <p>Clean Blog is a <a href="http://www.templatemo.com" target="_parent">Free HTML-CSS Template</a> provided by <a href="#">templatemo.com</a> for everyone. Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow">XHTML</a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow">CSS</a>. Donec enim enim, imperdiet quis, mollis a, elementum a, diam. Lorem ipsum  dolor sit amet, consectetur adipiscing elit. Nulla et nunc commodo ante ornare imperdiet.</p>
              <a href="blog_post.html">Continue reading...</a>
                
            </div>
                
            <div class="post_section">
                    
                <span class="comment"><a href="blog_post.html">256</a></span>
            
                <h2><a href="blog_post.html">Lorem ipsum dolor sit amet</a></h2>
                
                December 24, 2048 | <strong>Author:</strong> Steve | <strong>Category:</strong> <a href="#">Web Design</a>
                
                <img src="<?php echo get_template_directory_uri(); ?>/images/templatemo_image_02.jpg" alt="image 2" />
                
                <p>Credits go to <a href="http://www.smashingmagazine.com/2008/09/23/practika-a-free-icon-set/" target="_blank">Smashing Magazine</a> for icons, <a href="http://www.photovaco.com" target="_blank">Free photos</a> for photos, and <a href="http://www.serie3.info/s3slider/" target="_blank">Serie3</a> for the slider. Ut nec vestibulum odio. Vivamus vitae nibh eu sem malesuada rutrum et sit amet magna. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
              <a href="blog_post.html">Continue reading...</a>
            
            </div>
		</div>
    
  <div class="cleaner"></div>
  </div> 
    <!-- end of templatemo_main -->
  <div class="cleaner_h20"></div>
  <?php get_footer(); ?>