<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php bloginfo('name'); ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
    <style>
        body {
            padding-top: 60px;
            padding-bottom: 40px;
        }
    </style>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap-responsive.min.css" type="text/css" charset="utf-8" >
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/fonts.css" type="text/css" charset="utf-8" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/main.css" type="text/css" charset="utf-8" >
    
  <link href='http://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>  
    
    <script src="<?php bloginfo('template_url'); ?>/js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>
</head>
<?php 
$events_ID = 11;
$page_title = 'Jumbotron';
$jumbotron_data = get_page_by_title( $page_title );
$jumbotron_ID =  $jumbotron_data->ID;
?>
<body style="background-color: <?php the_field('background_colour', $jumbotron_ID); ?>" id="altfreshers">
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->

<? 
$other_page = 12;
 
?>
<p><?php the_field('field_name', $other_page); ?>

<div style="background-color: <?php the_field('background_colour', $jumbotron_ID); ?>">

<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
      </a>
      <a class="brand scroll cracked cracked-menu" style="position:relative; top:10px;" href="#altfreshers">AltFreshers2012!</a>
      <div class="nav-collapse collapse">
          <ul class="nav">
            <li><a href="#welcome" class="scroll">Welcome</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  Events
                  <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                <?php 
                  query_posts(array('post_parent' => $events_ID, 'post_type' => 'page')); 
                  while (have_posts()) { the_post(); 
                ?>
                <li><a href="#<?php the_title();?>" class="scroll"><?php the_field('title'); ?></a></li>
                <?php } ?>
                </ul>
              </li>
            <li><a href="#contact" class="scroll">Get Involved</a></li>
          </ul>
      </div><!--/.nav-collapse -->
    </div>
  </div>
</div>

<br />
<div class="container">
  <div class="hero-unit pagination-centered">
      <?php   
      echo apply_filters('the_content', $jumbotron_data->post_content);
      ?></div>
</div>

  
<div id="slider" class="slider-horizontal hidden-phone">
<?php 
  query_posts(array('post_parent' => $events_ID, 'post_type' => 'page')); 
  while (have_posts()) { the_post(); 
?>
<div class="item item-<?php the_ID(); ?>"><img src="<?php the_field('flyer'); ?>" /></div>
<?php } ?>
</div>

</div>

<?php 
$page_title = 'Welcome';
$welcome_data = get_page_by_title( $page_title );
$welcome_ID =  $welcome_data->ID;
?>

<div style="background-color: <?php the_field('background_colour', $welcome_ID); ?>; color:#fff;">
  <div class="container" id="welcome">
    <div class="row row-firstgap">
      <div class="span12">
      <?php   
      echo apply_filters('the_content', $welcome_data->post_content);
      ?>
      </div>
    </div>
    
    <?php 
query_posts(array('post_parent' => 8, 'post_type' => 'page')); 

while (have_posts()) { the_post(); ?>

    <div class="row row-halfgap">
      <div class="span4">
      <h4><?php the_field('question'); ?>
      </h4>
      </div>
      <div class="span8">
      <p><?php the_field('answer'); ?>
      </p></div>
     </div>


<?php } ?>
   
    </div> 
  </div>
</div>

<?php 
query_posts(array('post_parent' => $events_ID, 'post_type' => 'page')); 

while (have_posts()) { the_post(); ?>


<div style="background-color: <?php the_field('background_colour'); ?>">
  <div class="container">
    <div class="row row-gap" id="<?php the_title();?>">
      <div class="span6">
      <h2><?php the_field('title'); ?></h2>
      </div>
      <div class="span3">
      <h3><?php the_field('date'); ?> </h3>
      </div>
      <div class="span3">
      <h3><?php the_field('venue'); ?></h3>
      </div>
      <div class="span4">
        <img src="<?php the_field('flyer'); ?>" /> 
      </div>
      <div class="span8">
        <p>
        <?php the_field('description'); ?>
        </p>
        <h3>Tickets</h3>
        <p>
        <?php the_field('tickets'); ?>
        </p>
      </div>
    </div>
  </div>
</div>

<?php } ?>

<?php 
$page_title = 'Contact';
$contact_data = get_page_by_title( $page_title );
$contact_ID =  $contact_data->ID;
?>

<div  style="background-color: <?php the_field('background_colour', $contact_ID); ?>">
  <div class="container" id="contact">
    <div class="row row-gap" id="event21">
      <div class="span12">
      <h2><?php the_field('heading', $contact_ID); ?></h2>
      </div>
      <div class="span6">
        <form class="form-horizontal">
        <h3>Email Us!</h3>
          <div class="control-group">
            <label class="control-label" for="inputName">Name</label>
            <div class="controls">
              <input type="text" id="inputName" placeholder="Billybob Joe">
            </div>
          </div>

          <div class="control-group">
            <label class="control-label" for="inputEmail">Email</label>
            <div class="controls">
              <input type="text" id="inputEmail" placeholder="billybob@joe.com">
            </div>
          </div>
          
          <div class="control-group">
            <label class="control-label" for="inputTel">Mob. No.</label>
            <div class="controls">
              <input type="text" id="inputTel" placeholder="01234 123456">
            </div>
          </div>
          
          <div class="control-group">
            <label class="control-label" for="inputMsg">Message</label>
            <div class="controls">
              <textarea rows="4" id="inputMsg" type="text" placeholder="What have you got to say?"></textarea>
            </div>
          </div>
          
          <div class="control-group">
            <div class="controls">
              <button type="submit" class="btn">Sign in</button>
            </div>
          </div>
        </form>
      </div>
      <div class="span6">
      <?php   
      echo apply_filters('the_content', $contact_data->post_content);
      ?>
      </div>
    </div> 
  </div>
</div>

<div class="container">
  <div class="row row-halfgap pagination-centered">
    <h3><a href="#altfreshers" class="scroll" style="color:#000"><i class="icon-chevron-up"></i> Back to the Top! <i class="icon-chevron-up"></i></a></h3>
  </div>
</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php bloginfo('template_url'); ?>/js/vendor/jquery-1.8.1.min.js"><\/script>')</script>
<script src="<?php bloginfo('template_url'); ?>/js/vendor/jquery.easing.1.3.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/vendor/flowslider.jquery.js"></script>

<script src="<?php bloginfo('template_url'); ?>/js/vendor/bootstrap.min.js"></script>

<script src="<?php bloginfo('template_url'); ?>/js/plugins.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>


<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-34738587-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
  
</body>
</html>
