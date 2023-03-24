<?php
/* Template Name: Home */
get_header(); 
?>





<!-- ======= Hero Section ======= -->
      <?php if(have_rows('hero_section')):the_row();
          $heading = get_sub_field('heading');
          $paragraph = get_sub_field('paragraph');
          $bg_image = get_sub_field('bg_image'); 
          $types = get_sub_field('types'); ?>
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center" style="background: url(<?php echo $bg_image['url']; ?>); background-size:cover;">
    <div class="hero-container" data-aos="fade-in">
      <h1><?php echo $heading; ?></h1>
      <p><?php echo $paragraph; ?> <span class="typed" data-typed-items="<?php echo $types; ?>"></span></p>
    </div>
  </section><!-- End Hero -->
    <?php endif; ?>
  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">
        <?php if(have_rows('about_section')):the_row();
        	$main_heading = get_sub_field('main_heading');
        	$main_paragraph = get_sub_field('main_paragraph');
        	$image = get_sub_field('image'); 
        	$sub_heading = get_sub_field('sub_heading');
        	$sub_paragraph = get_sub_field('sub_paragraph');
        	$last_paragraph = get_sub_field('last_paragraph');?>
        <div class="section-title">
          <h2><?php echo $main_heading; ?></h2>
          <p><?php echo $main_paragraph; ?></p>
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="<?php echo $image['url']; ?>" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3><?php echo $sub_heading; ?></h3>
            <p class="fst-italic">
              <?php echo $sub_paragraph; ?>
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <?php while(have_rows('list1')): the_row();
                  	 $list_item = get_sub_field('list_item'); ?>
                  <li><i class="bi bi-chevron-right"></i> <?php echo $list_item; ?> </li>
                  <?php endwhile; ?>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <?php while(have_rows('list2')): the_row();
                  	 $list_item = get_sub_field('list_item'); ?>
                  <li><i class="bi bi-chevron-right"></i> <?php echo $list_item; ?> </li>
                  <?php endwhile; ?>
                </ul>
              </div>
            </div>
            <p>
              <?php echo $last_paragraph; ?>
            </p>
          </div>
        </div>
        <?php endif; ?>
      </div>
    </section><!-- End About Section -->




    <!-- ======= Facts Section ======= -->
    <section id="facts" class="facts">
      <div class="container">
        <?php if(have_rows('facts_section')):the_row();
        	$main_heading = get_sub_field('main_heading');
        	$main_paragraph = get_sub_field('main_paragraph');?>
        <div class="section-title">
          <h2><?php echo $main_heading; ?></h2>
          <p><?php echo $main_paragraph; ?></p>
        </div>

        <div class="row no-gutters">
           <?php while(have_rows('counter_list')): the_row();
                $item1 = get_sub_field('item1'); 
                $item2 = get_sub_field('item2'); 
                $item3 = get_sub_field('item3'); 
                $item4 = get_sub_field('item4'); ?>
          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
            <div class="count-box">
              <i class="bi bi-<?php echo $item1; ?>"></i>
              <span data-purecounter-start="0" data-purecounter-end="<?php echo $item2; ?>" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong><?php echo $item3; ?></strong> <?php echo $item4; ?></p>
            </div>
          </div>
          <?php endwhile; ?>

        </div>
        <?php endif; ?>
      </div>
    </section><!-- End Facts Section -->




    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
      <div class="container">
        <?php if(have_rows('skills_section')):the_row();
        	$heading = get_sub_field('heading');
        	$paragraph = get_sub_field('paragraph');?>
        <div class="section-title">
          <h2><?php echo $heading; ?></h2>
          <p><?php echo $paragraph; ?></p>
        </div>

        <div class="row skills-content">

          <div class="col-lg-6" data-aos="fade-up">
            <?php while(have_rows('progress_bar')): the_row();
                $course_name = get_sub_field('course_name'); 
                $course_no = get_sub_field('course_no'); ?>
            <div class="progress">
              <span class="skill"><?php echo $course_name; ?> <i class="val"><?php echo $course_no; ?>%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $course_no; ?>" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <?php endwhile; ?>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
             <?php while(have_rows('progress_bar2')): the_row();
                $course_name = get_sub_field('course_name'); 
                $course_no = get_sub_field('course_no'); ?>
            <div class="progress">
              <span class="skill"><?php echo $course_name; ?> <i class="val"><?php echo $course_no; ?>%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $course_no; ?>" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <?php endwhile; ?>
          </div>

        </div>
        <?php endif; ?>
      </div>
    </section><!-- End Skills Section -->





    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <?php if(have_rows('resume_section')):the_row(); ?>
      <div class="container">
        <?php while(have_rows('resume_top')):the_row();
          $top_heading = get_sub_field('top_heading');
          $top_paragraph = get_sub_field('top_paragraph');?>
        <div class="section-title">
          <h2><?php echo $top_heading; ?></h2>
          <p><?php echo $top_paragraph; ?></p>
        </div>
         <?php endwhile; ?>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-up">
            <?php while(have_rows('left_part')):the_row();
                $heading = get_sub_field('heading');
                $sub_heading = get_sub_field('sub_heading');
                $time_period = get_sub_field('time_period');
                $italic_paragraph = get_sub_field('italic_paragraph');
                $description = get_sub_field('description');?>
            <h3 class="resume-title"><?php echo $heading; ?></h3>
            <div class="resume-item">
              <h4><?php echo $sub_heading; ?></h4>
              <h5><?php echo $time_period; ?></h5>
              <p><em><?php echo $italic_paragraph; ?></em></p>
              <p><?php echo $description; ?></p>
            </div>
            <?php endwhile; ?>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title">Professional Experience</h3>
              <?php while(have_rows('right_part')):the_row();
                $designation = get_sub_field('designation');
                $time_period = get_sub_field('time_period');
                $address = get_sub_field('address');
                $description = get_sub_field('description');?>
            <div class="resume-item">
              <h4><?php echo $designation; ?></h4>
              <h5><?php echo $time_period; ?></h5>
              <p><em><?php echo $address; ?> </em></p>
              <ul>
                <?php echo $description; ?>
              </ul>
            </div>
            <?php endwhile; ?>
          </div>
        </div>
      </div>
      <?php endif; ?>
    </section><!-- End Resume Section -->         




  <?php
  $args = array(  
        'post_type' => 'portfolio',
        'post_status' => 'publish',
        'posts_per_page' =>-1, 
        'orderby' => 'title', 
        'order' => 'ASC',
        'taxonomy' => 'portfolio_category'
    );
    $result = new WP_Query( $args );       
?>
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container">
        <?php if(have_rows('portfolio_section')):the_row();
            $top_heading = get_sub_field('top_heading');
            $description = get_sub_field('description'); ?>
        <div class="section-title">
          <h2><?php echo $top_heading; ?></h2>
          <p><?php echo $description; ?></p>
        </div>
        <?php endif; ?>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <?php $categories = get_categories($args);
              foreach($categories as $category){  ?>
              <li data-filter=".filter-<?php echo $category->slug; ?>"><?php echo $category->name; ?></li>
             <?php } ?>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">
          <?php while ($result->have_posts()) : $result->the_post(); 
              $categories = get_the_terms(get_the_ID(), "portfolio_category")[0];
              $cat_slug=$categories->slug;
              $cat_name=$categories->name; 
              $portfolio_image=wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));?>
          <div class="col-lg-4 col-md-6 portfolio-item filter-<?php echo $cat_slug; ?>">
            <div class="portfolio-wrap">
              <img src="<?php echo $portfolio_image; ?>" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="<?php echo $portfolio_image; ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?php the_title(); ?>"><i class="bx bx-plus"></i></a>
                <a href="<?php the_permalink(); ?>" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
          <?php endwhile; 
             wp_reset_postdata();?>
        </div>

      </div>
    </section><!-- End Portfolio Section -->




    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">
         <?php if(have_rows('services_section')):the_row();
        	$heading = get_sub_field('heading');
        	$paragraph = get_sub_field('paragraph');?>
        <div class="section-title">
          <h2><?php echo $heading; ?></h2>
          <p><?php echo $paragraph; ?></p>
        </div>

        <div class="row">
        	<?php while(have_rows('list_items')):the_row();
        	$item1 = get_sub_field('item1');
        	$item2 = get_sub_field('item2');
        	$item3 = get_sub_field('item3');?>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
            <div class="icon"><i class="bi bi-<?php echo $item1; ?>"></i></div>
            <h4 class="title"><a href=""><?php echo $item2; ?></a></h4>
            <p class="description"><?php echo $item3; ?></p>
          </div>
        <?php endwhile; ?>
        </div>

        <?php endif; ?>
      </div>
    </section><!-- End Services Section -->




    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container">
        <?php if(have_rows('testimonial_section')):the_row();
        	$main_heading = get_sub_field('main_heading');
        	$main_paragraph = get_sub_field('main_paragraph');?>
        <div class="section-title">
          <h2><?php echo $main_heading; ?></h2>
          <p><?php echo $main_paragraph; ?></p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">
            <?php while(have_rows('swipe_slider')):the_row();
	        	$description = get_sub_field('description');
	        	$team_image = get_sub_field('team_image');
	        	$name = get_sub_field('name');
	        	$position = get_sub_field('position');?>
            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="fade-up">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  <?php echo $description; ?>
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="<?php echo $team_image['url']; ?>" class="testimonial-img" alt="">
                <h3><?php echo $name; ?></h3>
                <h4><?php echo $position; ?></h4>
              </div>
            </div><!-- End testimonial item -->
            <?php endwhile; ?>
          </div>
          <div class="swiper-pagination"></div>
        </div>

       <?php endif; ?>
      </div>
    </section><!-- End Testimonials Section -->





    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">
        <?php if(have_rows('contact_section')):the_row();
          $main_heading = get_sub_field('heading');
          $main_paragraph = get_sub_field('paragraph');
          $google_map = get_sub_field('google_map');?>
        <div class="section-title">
          <h2><?php echo $main_heading; ?></h2>
          <p><?php echo $main_paragraph; ?></p>
        </div>

        <div class="row" data-aos="fade-in">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <?php while(have_rows('list_items')):the_row();
                  $icon = get_sub_field('icon');
                  $item1 = get_sub_field('item1');
                  $item2 = get_sub_field('item2'); ?>
              <div class="address">
                <i class="bi bi-<?php echo $icon; ?>"></i>
                <h4><?php echo $item1; ?>:</h4>
                <p><?php echo $item2; ?></p>
              </div>
              <?php endwhile; ?>
              
             <?php echo $google_map; ?>
             
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            
              <div class="row">
                <?php the_content(); ?>
              </div>
            
          </div>

        </div>
       <?php endif; ?>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

 


<?php get_sidebar();?>
<?php get_footer();?>