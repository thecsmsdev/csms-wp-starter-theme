<!DOCTYPE html>
<html class="no-js">
<head>
  <title><?php wp_title('•', true, 'right'); bloginfo('name'); ?></title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <link rel="shortcut icon" href="" />


  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
  
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


<div class="main-header">
  <div class="header container">
    <div class="logo-container">
      <a href="<?php echo home_url('/'); ?>"><img alt="Logo" src="<?php bloginfo('template_directory'); ?>/theme/img/logo.png"></a>
    </div>
  </div>
  <div class="row nav-maincontainer">
    
      <div class="col-lg-12">
    
            <nav class="navbar navbar-topbar">
              <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
                &#9776;
              </button>
              <div class="collapse navbar-toggleable-xs" id="collapsingNavbar">
                
              <?php
                  wp_nav_menu( array(
                      'menu'              => 'mainmenu',
                      'theme_location'    => 'navbar',
                      'menu_class'        => 'nav navbar-nav', 
                      'echo'              => true,
                      'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                      'depth'             => 10,
                  ) ); 
              ?>
              </div>
            </nav>
        
        </div>

  </div>
</div>
  
<?php /*
Site Title
==========
If you are displaying your site title in the "brand" link in the Bootstrap navbar, 
then you probably don't require a site title. Alternatively you can use the example below. 
See also the accompanying CSS example in theme/css/b4st.css .

<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <h1 id="site-title">
        <a class="text-muted" href="<?php echo home_url('/'); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><?php bloginfo('name'); ?></a>
      </h1>
    </div>
  </div>
</div>
*/ ?>
