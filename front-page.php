<?php get_header(); ?>

  <div class="banner clearfix">
    <div class="flexslider">
      <ul class="slides">

        <?php
          $args = array(
          'post_type' => 'Banner',
          'order' => 'ASC',

          );

          $banner = new WP_Query($args);
  
          while($banner->have_posts()) {
              $banner->the_post();
            
        ?>
            <li style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')">
              <div class="overlay">
                <div class="flex-caption">
                  <div class="slide_header slideInLeft"><?php echo the_content(); ?></div>
                  <div class="slide_desc slideInLeft"><?php echo the_excerpt(); ?></div>
                </div>
              </div>
            </li>

        <?php
          } wp_reset_query();
        ?>
      </ul>
    </div>
  </div>

  <div class="section clearfix no-lft-rght-pad">
    <div class="inner-wrap pt-60">
      <div class="main">
        <div class="major-cap"><?php echo get_field('major_caption'); ?></div>
      </div>

      <div class="minor-det">
        <?php echo get_field('minor_caption'); ?>
        <div class="cta">
          <a href="<?php echo site_url('/about'); ?>">
            <span>More About Us</span>
            <span class="f-arrow"><i class="fas fa-arrow-right"></i></span>
          </a>
        </div>
      </div>

    </div>
  </div>


  <div class="mid-section" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')">
    <div class="overlay">
      <div class="mid-caption"><?php echo get_field('brochure_caption'); ?></div>
      <div class="cta">
        <a href="<?php echo get_field('brochure_link'); ?>">
          <span>Download Brochure</span>
          <span class="f-arrow"><i class="fas fa-arrow-right"></i></span>
        </a>
      </div>
    </div>
  </div>

  <div class="section srv no-lft-rght-pad clearfix">
    <div class="inner-wrap">

      <div class="caption-wrap">
        <div class="sec-title center">What we do</div>
      </div>
      
      <div class="hm-srv-wrap pt-60 clearfix">

        <?php
          $args = array(
          'post_type' => 'Services',
          'posts_per_page' => 3,

          );

          $details = new WP_Query($args);
  
          while($details->have_posts()) {
              $details->the_post();
              
        ?>
        <div class="srv-hld">
          <div class="srv-photo" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')"></div>
          <a href="<?php echo the_permalink(); ?>"><span><?php echo the_title(); ?></span></a>
        </div>

        <?php
          } wp_reset_query();
        ?>
      </div>


      <div class="cta srv">
        <a href="<?php echo site_url('/what-we-do'); ?>">
          <span>Discover More</span>
          <span class="f-arrow"><i class="fas fa-arrow-right"></i></span>
        </a>
      </div>

    </div>
  </div>

  <div class="section no-pad">
    <div class="inner-wrap top-bd clearfix">
      <div class="car-cap"><?php echo get_field('careers_caption'); ?></div>
      <div class="car-det">
        <div class="car-text"><?php echo get_field('careers_details'); ?></div>
        <div class="cta">
          <a href="<?php echo site_url('/careers'); ?>">
            <span>Learn More</span>
            <span class="f-arrow"><i class="fas fa-arrow-right"></i></span>
          </a>
        </div>
      </div>
    </div>
  </div>

      
<?php get_footer(); ?>