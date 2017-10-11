﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Clean Blog Post</title>
<meta name="keywords" content="clean blog post, 2-column, multi-level, comments, html css layout" />
<meta name="description" content="Clean Blog Post with multi-level commenting" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
</head>
<body>

<div id="templatemo_wrapper">

	<div id="templatemo_menu">
                
         <ul>
            <li><a href="index.html" class="current">Blog</a></li>
            <li><a href="portfolio.html">Portfolio</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="contact.html">Contact</a></li>
        </ul>   	
    
    </div> <!-- end of templatemo_menu -->

    <div id="templatemo_left_column">
    
        <div id="templatemo_header">
        
            <div id="site_title">
                <h1><a href="http://www.templatemo.com" target="_parent">Clean <strong>Blog</strong><span>Free HTML-CSS Template</span></a></h1>
            </div><!-- end of site_title -->
            
        </div> <!-- end of header -->  
        
        <div id="templatemo_sidebar">
    	
            <div id="templatemo_rss">
            
                <a href="#">SUBSCRIBE NOW <br /><span>to our rss feed</span></a>
                
            </div>
            
            <h4>Categories</h4>
            <ul class="templatemo_list">
                <li><a href="http://www.templatemo.com/page/1" target="_parent">Curabitur sed</a></li>
                <li><a href="http://www.templatemo.com/page/2" target="_parent">Praesent adipiscing</a></li>
                <li><a href="http://www.templatemo.com/page/3" target="_parent">Duis sed justo</a></li>
                <li><a href="http://www.templatemo.com/page/4" target="_parent">Mauris vulputate</a></li>
                <li><a href="#">Nam auctor</a></li>
                <li><a href="#">Aliquam quam</a></li>
            </ul>
            
            <div class="cleaner_h40"></div>
            
            <h4>Friends</h4>
            <ul class="templatemo_list">
                <li><a href="http://www.templatemo.com" target="_parent">Free CSS Templates</a></li>
                <li><a href="http://www.flashmo.com" target="_parent">Flash Templates</a></li>
                <li><a href="http://www.flashmo.com/store" target="_parent">Premium Themes</a></li>
                <li><a href="http://www.webdesignmo.com/blog" target="_parent">Web Design Blog</a></li>
                <li><a href="http://www.koflash.com" target="_parent">Flash Web Gallery</a></li>
                <li><a href="#">Curabitur sed lacinia</a></li>
                <li><a href="#">Vestibulum laoreet tincidunt</a></li>
                <li><a href="#">Nullam nec mi enim</a></li>
                <li><a href="#">Aliquam quam nulla</a></li>
                <li><a href="#">Curabitur non felis massa</a></li>
            </ul>
            
        </div> <!-- end of templatemo_sidebar --> 
    
    </div> <!-- end of templatemo_left_column -->
    
    <div id="templatemo_right_column">
        
        <div id="templatemo_main">
        
            <div class="post_section">
			<?php if( have_posts() ){ while( have_posts() ){ the_post(); ?> 
            
                <span class="comment"><a href="fullpost.html">256</a></span>
            
                <h2>Aliquam lorem ante dapibus in viverra </h2>
    
                December 28, 2048 | <strong>Author:</strong> John | <strong>Category:</strong> <a href="#">Freebies</a>
                
                <a href="http://www.templatemo.com/page/1" target="_parent"><img src="images/templatemo_image_01.jpg" alt="image" /></a>
                
              <p>Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow">XHTML</a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow">CSS</a>. Mauris venenatis quam non nunc convallis tincidunt. Aliquam tempus neque nec nisl pellentesque nec dignissim lorem cursus. Integer cursus ultrices massa non vehicula. <a href="#">Etiam vitae lacus</a> eu arcu rutrum fermentum. Nullam fringilla imperdiet magna, id sagittis nisl feugiat at. </p>
                <p>Donec eget lacus eros, et blandit odio. Maecenas et urna vitae sapien dictum dapibus. Aliquam id sem metus. Aenean sapien felis, congue porttitor elementum quis, <a href="#">pretium sit amet urna</a>.</p>
              <p> Vestibulum eget ligula et ipsum laoreet aliquam sed ut risus. Nulla facilisi. Phasellus nibh justo, lobortis nec vehicula sit amet, <a href="#">cursus vitae ligula</a>.</p>
               
			<?php } /* конец while */ ?>
			<?php
} ?>
		  </div>
            
            <div class="comment_tab">
           	    Comments           </div>
            
      <div id="comment_section">
                <ol class="comments first_level">
                        
                        <li>
                            <div class="comment_box commentbox1">
                                    
                                <div class="gravatar">
                                    <img src="images/avator.png" alt="author" />
                                </div>
                                
                                <div class="comment_text">
                                    <div class="comment_author">Steve<span class="date">December 10, 2048</span><span class="time">12:30 AM</span></div>
                                    <p>Phasellus mattis tellus eu risusLorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                  <div class="reply"><a href="#">Reply</a></div>
                                </div>
                                <div class="cleaner"></div>
                            </div>                        
                            
                        </li>
                        
                        <li>
                        
                        
                            	<ol class="comments">
                            
                                    <li>
                                        <div class="comment_box commentbox2">
                                        
                                        <div class="gravatar">
                                        <img src="images/avator.png" alt="author 2" />
                                        </div>
                                        <div class="comment_text">
                                        <div class="comment_author">Ethan<span class="date">December 14, 2048</span><span class="time">10:20 AM</span></div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                        <div class="reply"><a href="#">Reply</a></div>
                                        </div>
                                        
                                        <div class="cleaner"></div>
                                        </div>                        
                                    
                                    
                                    </li>
                                    
                                    <li>
                                    
                            
                                        <ol class="comments">
                                    
                                            <li>
                                                <div class="comment_box commentbox1">
                                                
                                                    <div class="gravatar">
                                                        <img src="images/avator.png" alt="author 3" />
                                                    </div>
                                                    <div class="comment_text">
                                                        <div class="comment_author">Walker<span class="date">December 18, 2048</span><span class="time">11:45 PM</span></div>
                                                        <p>Donec nunc neque, pulvinar a, vestibulum eget, luctus id, orci.   Pellentesque elementum enim a augue. Donec in nisi. <a href="#">Etiam sit amet turpis</a>.</p>
                                                      <div class="reply"><a href="#">Reply</a></div>
                                                    </div>
                                                    
                                                    <div class="cleaner"></div>
                                                </div>                        
                                                
                                                
                                            </li>
                                    
                                        </ol>
                        
                        			</li>
                                </ol>
                                
						</li>
                        
                        <li>
                            <div class="comment_box commentbox2">
                                    
                                     
                                <div class="gravatar">
                                    <img src="images/avator.png" alt="author 4" />
                                </div>
                                <div class="comment_text">
                                    <div class="comment_author">Steve<span class="date">December 24, 2048</span><span class="time">10:55 AM</span></div>
                                    <p>Nam sodales, pede vel dapibus lobortis, ipsum diam molestie risus, a vulputate risus nisl pulvinar lacus.</p>
                                  <div class="reply"><a href="#">Reply</a></div>
                                </div>
                                
                                <div class="cleaner"></div>
                            </div>                        
                            
                            
                        </li>
                        
                        <li>
                            <div class="comment_box commentbox1">
                                    
                                <div class="gravatar">
                                    <img src="images/avator.png" alt="author 5" />
                                </div>
                                <div class="comment_text">
                                    <div class="comment_author">Gates<span class="date">December 28, 2048</span><span class="time">12:00 PM</span></div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dictum ornare nulla ac laoreet.</p>
                                  <div class="reply"><a href="#">Reply</a></div>
                                </div>
                                
                                <div class="cleaner"></div>
                            </div>                        
                            
                            
                        </li>
                        
                    </ol>
                </div>
                
                <div id="comment_form">
                    <h3>Leave a comment</h3>
                    
              		<form action="#" method="post">
                        <div class="form_row">
                            <label><strong>Name</strong> (required)</label>
           					<br />
                            <input type="text" name="name" />
                        </div>
                        <div class="form_row">
                            <label><strong>Email</strong>  (required, will not be published)</label>
          					<br />
                            <input type="text" name="name" />
                        </div>
                        <div class="form_row">
                            <label><strong>Comment</strong></label>
           					<br />
                            <textarea  name="comment" rows="" cols=""></textarea>
                        </div>
                        <input type="submit" name="Submit" value="Submit" class="submit_btn" />
                    </form>
                    
                </div>
            
		</div> <!-- end of main -->
    
  <div class="cleaner"></div>
  </div> 
    <!-- end of templatemo_main -->
  <div class="cleaner_h20"></div>
  
  	<div id="templatemo_footer">
    
		Copyright © 2048 <a href="#">Your Company Name</a> | 
        <a href="http://www.iwebsitetemplate.com" target="_parent">Website Templates</a> by <a href="http://www.templatemo.com" target="_parent">Free CSS Templates</a>
        
    </div>
  
    <div class="cleaner"></div>
</div> <!-- end of warpper -->
</body>
</html>