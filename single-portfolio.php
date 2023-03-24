<?php get_header();?>




  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Portfolio Details</h2>
          <ol>
            <li><a href="http://192.168.100.26/wp8/">Home</a></li>
            <li>Portfolio Details</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <?php $images = get_field('product_gallery');?>
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                  <?php foreach( $images as $image ): ?>
                <div class="swiper-slide">
                  <img src="<?php echo $image['url']; ?>" alt="">
                </div>
                  <?php endforeach; ?>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

              <?php while(have_rows('description')):the_row();
                  $heading1 = get_sub_field('heading1');
                  $client = get_sub_field('client');
                  $project_url = get_sub_field('project_url');
                  $heading2 = get_sub_field('heading2');
                  $paragraph = get_sub_field('paragraph');?>
          <div class="col-lg-4">
            <div class="portfolio-info" style="padding:16px;">
              <h3><?php echo $heading1; ?></h3>
              <ul style="margin-left: 0px;">
                <?php $category= get_the_terms(get_the_ID(), "portfolio_category")[0];?>
                <li><strong>Category</strong>: <?php echo $category->name; ?> </li>
                <li><strong>Client</strong>: <?php echo $client; ?></li>
                <li><strong>Project date</strong>: <?php echo get_the_date(); ?> </li>
                <li><strong>Project URL</strong>: <a href="#" style="text-decoration:none;"><?php echo $project_url; ?></a></li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2><?php echo $heading2; ?></h2>
              <p>
               <?php echo $paragraph; ?>
              </p>
            </div>
          </div>
         <?php endwhile; ?>
        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->







  <?php get_sidebar();?>
  <?php get_footer();?>