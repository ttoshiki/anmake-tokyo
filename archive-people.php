<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package anmake-tokyo
 */

get_header();
?>

	<main class="site-main">
		<div class="people">
      <section class="l-mainVisual">
        <picture class="catch__mainVisualPicture">
          <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/people/mv-sp.webp" media="(max-width: 480px)" type="image/webp">
          <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/people/mv.webp" media="(min-width: 481px)" type="image/webp">
          <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/people/mv-sp.jpg" media="(max-width: 480px)">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/people/mv.jpg" alt="">
        </picture>
      </section>
      <section>
        <h1 class=""><?php echo $cp_slug = get_query_var('post_type'); ?></h1>
        <?php
          $args = array(
            'post_type' => 'people',
            'tax_query' => array(
              array(
                'taxonomy' => 'in_house_or_outsourced',
                'field' => 'slug',
                'terms' => 'inhouse',
              )
            )
          );
          $the_query = new WP_Query($args); if ($the_query->have_posts()):
        ?>
        <h2 class="people__inhouseOrOutsourced">
          CREATORS<br>
          IN<br>
          HOUSE
        </h2>
        <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
          <?php
            if ( has_post_thumbnail() ) {
              the_post_thumbnail();
            }
          ?>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <?php else: ?>
        <?php endif; ?>

        <?php
          $args = array(
            'post_type' => 'people',
            'tax_query' => array(
              array(
                'taxonomy' => 'in_house_or_outsourced',
                'field' => 'slug',
                'terms' => 'outsourced',
              )
            )
          );
          $the_query = new WP_Query($args); if ($the_query->have_posts()):
        ?>
        <h2 class="people__inhouseOrOutsourced">
          CREATORS<br>
          IN<br>
          HOUSE
        </h2>
        <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
          <?php
            if ( has_post_thumbnail() ) {
              the_post_thumbnail();
            }
          ?>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <?php else: ?>
        <?php endif; ?>
      </section>
		</div>
	</main><!-- #main -->

<?php
get_footer();
