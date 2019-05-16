<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
  <title><?php wp_title('•', true, 'right'); bloginfo('name'); ?></title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <!-- Favicons -->
    <link rel="shortcut icon" href="/wp-content/themes/INSERT-THEME-NAME-HERE/theme/images/favicons/favicon.ico" />
    <link href="/wp-content/themes/INSERT-THEME-NAME-HERE/theme/images/favicons/apple-touch-icon.png" rel="apple-touch-icon" />
    <link href="/wp-content/themes/INSERT-THEME-NAME-HERE/theme/images/favicons/apple-touch-icon-76x76.png" rel="apple-touch-icon" sizes="76x76" />
    <link href="/wp-content/themes/INSERT-THEME-NAME-HERE/theme/images/favicons/apple-touch-icon-120x120.png" rel="apple-touch-icon" sizes="120x120" />
    <link href="/wp-content/themes/INSERT-THEME-NAME-HERE/theme/images/favicons/apple-touch-icon-152x152.png" rel="apple-touch-icon" sizes="152x152" />
    <link href="/wp-content/themes/INSERT-THEME-NAME-HERE/theme/images/favicons/apple-touch-icon-180x180.png" rel="apple-touch-icon" sizes="180x180" />
    <link href="/wp-content/themes/INSERT-THEME-NAME-HERE/theme/images/favicons/icon-hires.png" rel="icon" sizes="192x192" />
    <link href="/wp-content/themes/INSERT-THEME-NAME-HERE/theme/images/favicons/icon-normal.png" rel="icon" sizes="128x128" /> 


  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
  
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


<div class="container">

	<div class="row">
    
    	<div class="col-lg-12">
    
            <!-- Menu Container -->
            <nav class="header-nav">
                <?php
                    wp_nav_menu( array(
                        'theme_location' => 'navbar',
                        'menu_class' => 'nav navbar-nav', 
                        'echo' => true,
                        'fallback_cb' => '__return_false',
                        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'depth' => 10, 
                        'walker' => new themeslug_walker_nav_menu
                    ) );
                ?>
            </nav>
        
        </div>

	</div>

</div>
