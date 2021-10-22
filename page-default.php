<?php
/**
* Template Name: Default Page
* Überschreibt page.php oder single.php
*/

get_header(); 
?>

<main class="ams-frnt" style="padding-top:200px">
<div class="container">
<div class="col-8 mx-auto">
<div class="row">

<?php
    if ( have_posts() ) : 
        while ( have_posts() ) : the_post();?>
        <header>
            <h1 class="display-2"><?php echo the_title();?></h1>
        </header>

        <div class="mt-4">
            <?php the_content();?>
        </div>
            
<?php   
    endwhile;
    else :
      _e( 'Sorry, keine Inhalte gefunden!', 'textdomain' );
    endif;  
?>

</div>
</div>
</div>
</main>

<?php
get_footer();