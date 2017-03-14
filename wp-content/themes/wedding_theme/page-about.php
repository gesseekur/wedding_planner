<?php get_header(); ?>

<div class="container ">
  <div class="col-md-10 col-md-offset-1 text-center sweet-notes">
    <!-- <p class='.sweet-notes'> -->
      <?php
        echo apply_filters('the_content', get_post_field('post_content', $id));
      ?>
    <!-- </p> -->
  </div>

</div>

<?php get_footer(); ?>
