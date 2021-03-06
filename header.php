<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Clean Blog Template</title>
<meta name="keywords" content="clean blog template, html css layout" />
<meta name="description" content="Clean Blog Template is provided by templatemo.com" />
<link href="<?php echo get_template_directory_uri(); ?>/templatemo_style.css" rel="stylesheet" type="text/css" />

<link href="<?php echo get_template_directory_uri(); ?>/s3slider.css" rel="stylesheet" type="text/css" />
<!-- JavaScripts-->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/s3Slider.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#slider').s3Slider({
            timeOut: 1600
        });
    });
</script>

</head>

<body>
<div id="templatemo_wrapper">

	<div id="templatemo_menu">
                
        <ul>
            
    <div id="additionalmenu">
        <?php wp_nav_menu( array( 'theme_location' => 'additionalmenu' ) ); ?>
    </div>
<!--
            <li><a href="index.html" class="current">Blog</a></li>
            <li><a href="portfolio.html">Portfolio</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="contact.html">Contact</a></li>
-->
        </ul>	
    
    </div> <!-- end of templatemo_menu -->

    <div id="templatemo_left_column">
    
        <div id="templatemo_header">
        
            <div id="site_title">
                <h1><a href="journey365.ru" target="_parent">Блог <strong>о Туризме</strong><span>Все о путешествиях!</span></a></h1>
            </div><!-- end of site_title -->
            
        </div> 