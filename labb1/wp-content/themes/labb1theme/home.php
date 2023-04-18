

<?php get_header(); ?>

<main>
  <section>
    <div class="container">
      <div class="row">
        <div id="primary" class="col-xs-12 col-md-9">
        
          <h2 class="<?php the_title();?> " ></h2>
          <?php
          if (have_posts()) {
            while (have_posts()) {
              the_post();
              get_template_part('article');
            }
          }

?>
 <?php the_posts_pagination(); ?>
        </div>
        <aside id="secondary" class="col-xs-12 col-md-3">
          <div id="sidebar">
            <ul>
              <li>
                <?php dynamic_sidebar('bloggerbar-1');?>
                </li>
                <li>
                <?php dynamic_sidebar('bloggerbar-2');?>
                </li>
                <li>
                <?php dynamic_sidebar('bloggerbar-3');?>
                </li>
                <li>
                <?php dynamic_sidebar('bloggerbar-4');?>
              </li>
            </ul>
          </div>
        </aside>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>