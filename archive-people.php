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
          <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/people/mv.webp" type="image/webp">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/people/mv.jpg" alt="">
        </picture>
      </section>
      <h1 class="page__title"><?php echo strtoupper($cp_slug = get_query_var('post_type')); ?></h1>
      <section class="people__list">
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

        <div class="people__position">
          <h2 class="people__category -pc">
            CREATORS<br class="-pc">
            IN<br class="-pc">
            HOUSE
          </h2>
          <div class="people__thumbnail">
            <h2 class="people__category -sp">
              CREATORS<br>
              IN<br>
              HOUSE
            </h2>
            <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
              <?php if (has_post_thumbnail()) { ?>
                <a href="<?php the_permalink(); ?>" class="people__link">
                  <div class="people__detailInfo">
                    <?php if (get_field('name-kanji')): ?>
                      <span class="people__kanji"><?php the_field('name-kanji'); ?></span>
                    <?php endif; ?>
                    <span class="people__name">
                    <?php
                      $name = get_the_title();
                      echo strtoupper($name);
                    ?></span>
                    <?php if (get_field('position')): ?>
                      <p class="people__positionName">
                        <?php echo strtoupper(get_field('position')); ?>
                      </p>
                    <?php endif; ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/icon_angle.png" alt="矢印" class="people__icon">
                  </div>
                  <?php the_post_thumbnail(); } ?>
                </a>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <?php else: ?>
            <?php endif; ?>
          </div>
        </div>

        <div class="people__position">
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
          <h2 class="people__category -pc">CREATORS</h2>
          <div class="people__thumbnail">
            <h2 class="people__category -sp">
              CREATORS
            </h2>
            <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
              <?php if (has_post_thumbnail()) { ?>
                <a href="<?php the_permalink(); ?>" class="people__link">
                  <div class="people__detailInfo">
                    <?php if (get_field('name-kanji')): ?>
                      <span class="people__kanji"><?php the_field('name-kanji'); ?></span>
                    <?php endif; ?>
                    <span class="people__name">
                    <?php
                      $name = get_the_title();
                      echo strtoupper($name);
                    ?></span>
                    <?php if (get_field('position')): ?>
                      <p class="people__positionName">
                        <?php echo strtoupper(get_field('position')); ?>
                      </p>
                    <?php endif; ?>
                  </div>
                  <?php the_post_thumbnail(); } ?>
                </a>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <?php else: ?>
            <?php endif; ?>
          </div>
        </div>
      </section>
		</div>
	</main><!-- #main -->

<?php
get_footer();
