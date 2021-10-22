<?php
/**
* Template Name: Cover Page
*/

get_header(); 
?>

<div class="cover-container d-flex mx-auto mr-0 ams-frnt">
  <header class="mb-auto"></header>

    <main class="mt-120 px-3">

      <h1 class="display-1 text-center text-secondary"><?php echo get_bloginfo('name'); ?></h1>
      <div class="">
        <picture>
          <source srcset="<?php echo esc_url( home_url( "/wp-content/uploads/2021/10/2amdo-square.svg" )); ?>" type="image/svg+xml">
          <img src="<?php echo esc_url( home_url( "/wp-content/uploads/2021/10/2amdo-square.svg" )); ?>" class="img-fluid d-block mx-auto" width="65%">
        </picture> 
      
        <p class="lead text-center">
          <a href="/blog" class="btn btn-primary fw-bold text-white mt-3 btn-lg">Blog</a>
        </p>
      </div>
    </main>

    <footer class="text-white-50">
      <div class="container-fluid fixed-bottom d-flex">
      
        <div class="justify-content-start">
          <?php echo do_shortcode( '[am_scls]' );?> 
        </div> 
        
        <div class="justify-content-end">
          <?php echo do_shortcode( '[am_github]' );?> 
        </div>

      </div>
    </footer>
</div>
  
<?php
get_footer();