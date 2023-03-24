<?php get_header();?>

<style>
 .nav-menu * {
 	margin-left:16px;
 	margin-top: -2px;
 	font-weight: 500;
 }
 .custom-logo{
  border-radius:50%;
 }
 </style>
<i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
         <?php the_custom_logo();?>
         <h1 style="color:white;"><?php echo get_bloginfo(); ?></h1>

        <div class="social-links mb-0 text-center"> 
          <?php dynamic_sidebar( 'sidebar-1' ); ?>
        </div>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <?php wp_nav_menu();?>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->