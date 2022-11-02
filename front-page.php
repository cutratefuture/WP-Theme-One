<?php

/**
 *  front page template
 * 
 * @package lauren
 */
get_header();
?>

<!-- Home -->
<article id="home" class="panel special">
  <div class="image">
    <!-- TODO: pull in featured image per page 6/7 -->
    <img src="images/pic01.jpg" alt="" data-position="center center" />
  </div>
  <div class="content">
    <div class="inner">
      <header>
        <!-- TODO: pull wp title 6/7-->
        <!-- get logo -->
        <?php
        if (function_exists('the_custom_logo')) {
          the_custom_logo();
        }
        if (is_front_page() && is_home()) :
        ?>
          <h1 class="site-title">
            <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
          </h1>
        <?php
        else :
        ?>
          <h1 class="site-title">
            <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
          </h1>
        <?php
        endif;
        $_s_description = get_bloginfo('description', 'display');
        if ($_s_description || is_customize_preview()) :
        ?>
          <p class="site-description"><?php echo $_s_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
                                      ?></p>
        <?php endif; ?>
      </header>
      <!-- get nav -->
      <?php get_template_part('template-parts/header/nav'); ?>
      <!-- 
            todo make footer menu editable via customizer.
            add ur own social media with icons
          -->
      <ul class="icons">
        <li>
          <a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a>
        </li>
        <li>
          <a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a>
        </li>
        <li>
          <a href="#" class="icon brands fa-github"><span class="label">GitHub</span></a>
        </li>
        <li>
          <a href="#" class="icon solid fa-envelope"><span class="label">Email</span></a>
        </li>
      </ul>
    </div>
  </div>
</article> <!-- end -->
<?php get_footer(); ?>