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
		<div class="works">
      <section class="l-mainVisual">
        <picture class="catch__mainVisualPicture">
          <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/works/mv.webp" type="image/webp">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/works/mv.jpg" alt="">
        </picture>
      </section>
      <h1 class="page__title"><?php echo strtoupper($cp_slug = get_query_var('post_type')); ?></h1>
      <section class="works__gallery">
        <div class="works__categories">
          <?php
            $terms = get_terms('category_works', 'hide_empty=0');
            foreach ($terms as $term) { ?>
                <a href="#<?php echo esc_html(strtolower($term->name)); ?>"><?php echo esc_html($term->name); ?></a>
                 <?php if ($term !== end($terms)) {
                echo '/';
            } ?>
          <?php } ?>
        </div>

        <?php
          $taxonomy_name = 'category_works';
          $taxonomies = get_terms($taxonomy_name, 'hide_empty=0');
          if (!is_wp_error($taxonomies) && count($taxonomies)):
            foreach ($taxonomies as $taxonomy):
              $tax_posts_horizontal = get_posts(
                array(
                  'post_type' => get_post_type(),
                  'taxonomy' => $taxonomy_name,
                  'term' => $taxonomy->slug,
                  'tax_query' => array(
                    array(
                      'taxonomy' => 'picture_orientation',
                      'field'    => 'slug',
                      'terms'    => 'horizontal'
                    )
                  )
                )
              );
              $tax_posts_vertical = get_posts(
                array(
                  'post_type' => get_post_type(),
                  'taxonomy' => $taxonomy_name,
                  'term' => $taxonomy->slug,
                  'tax_query' => array(
                    array(
                      'taxonomy' => 'picture_orientation',
                      'field'    => 'slug',
                      'terms'    => 'vertical'
                    )
                  )
                )
              );
          ?>
          <h2 class="works__category" id="<?php echo esc_html(strtolower($taxonomy->name)); ?>"><?php echo esc_html($taxonomy->name); ?></h2>
          <?php if (!empty($tax_posts_horizontal) || (!empty($tax_posts_vertical))): ?>
            <div class="works__listWrapper">
              <?php if(!empty($tax_posts_horizontal)): ?>
                <ul class="works__list -horizontal">
                  <?php foreach ($tax_posts_horizontal as $tax_post): ?>
                    <li class="works__item">
                      <a href="<?php echo get_permalink($tax_post->ID); ?>" class="works__thumbnailLink">
                        <?php
                        if (has_post_thumbnail($tax_post->ID)) {
                            echo get_the_post_thumbnail($tax_post->ID, 'post-thumbnail');
                        }
                        ?>
                      </a>
                    </li>
                  <?php endforeach; ?>
                </ul>
              <?php endif; ?>
              <?php if (!empty($tax_posts_vertical)): ?>
                <ul class="works__list -vertical">
                  <?php foreach ($tax_posts_vertical as $tax_post): ?>
                    <li class="works__item">
                      <a href="<?php echo get_permalink($tax_post->ID); ?>" class="works__thumbnailLink">
                        <?php
                        if (has_post_thumbnail($tax_post->ID)) {
                            echo get_the_post_thumbnail($tax_post->ID, 'post-thumbnail');
                        }
                        ?>
                      </a>
                    </li>
                  <?php endforeach; ?>
                </ul>
              <?php endif; ?>
            </div>
          <?php else: ?>
            <p class="works__paragraph">Coming Soon...</p>
          <?php endif; endforeach; endif; ?>

      </section>
		</div>
	</main><!-- #main -->

<?php
get_footer();
