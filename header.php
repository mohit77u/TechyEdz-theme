<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php wp_title('|', true, 'right'); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>
<body>

<header class="sticky-top">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 top">
        <div class="top-navbar">
          <div class="top-icons">
            <div class="contact">
                <a class="btn" href="#"><i class="fa fa-phone" target="blank"></i>+91 9032803832</a>
                <a class="btn" href="#"><i class="fa fa-envelope-o" target="blank"></i>contact@techyedz.com</a>
            </div>
            <div class="social-icons">
                <ul>
                    <li><a href="/corporate-training">Corporate Training</a></li>
                    <li><a href="/about">About us</a></li>
                    <li><a href="/blog">Blog</a></li>
                    <li><a href="/contact">Contact us</a></li>
                </ul>
                <a class="btn" href="https://www.instagram.com/techyedz/" target="blank"><i class="fa fa-instagram" ></i></a>
                <a class="btn" href="https://www.youtube.com/channel/UC-sNBOmDUsFLt0m9TDiiVHg" target="blank"><i class="fa fa-youtube-play" ></i></a>
                <a class="btn" href="https://www.facebook.com/techyedztraining/" target="blank"><i class="fa fa-facebook" ></i></a>
                <a class="btn" href="#" target="blank"><i class="fa fa-linkedin" ></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-12">
        <div class="navbar navbar-expand-lg">
          <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="logo"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse ml-auto" id="navbarTogglerDemo01">
          <form role="search" method="get" class="form search-form" action="/">
            <div class="input-group">
                <input name="s" type="text" class="form-control" placeholder="Search for courses here..." data-toggle="modal" data-target="#searchcourse">
                <button value="Search" class="btn" type="button" data-target="#searchcourse"><i class="fa fa-search" aria-hidden="true"></i></button>
            </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item"><a class="nav-link" href="/">HOME</a></li>
              <li class="nav-item"><a class="nav-link" href="/courses">COURSES</a></li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">CAREERS</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="/placement-process">PLACEMENT PROCESS</a>
                  <a class="dropdown-item" href="/apply-for-job">APPLY FOR JOB</a>
                </div>
              </li>
              <li class="nav-item"><a class="nav-link" href="/master-courses">MASTER COURSES</a></li>
              <li class="nav-item"><a class="nav-link" href="/combo-courses">COMBO COURSES</a></li>
            </ul>
        </div>
      </div> 
      </div>
    </div>
  </div>
</header>