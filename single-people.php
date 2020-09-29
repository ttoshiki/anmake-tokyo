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
		<div class="single-people">
      <section class="l-mainVisual">
        <picture class="catch__mainVisualPicture">
          <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/people/mv.webp" type="image/webp">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/people/mv.jpg" alt="">
        </picture>
      </section>
      <?php if (have_posts()): ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class('single__article'); ?>>
          <?php while (have_posts()) : the_post(); ?>
          <h1 class="page__title"><?php echo get_the_title(); ?></h1>
          <div class="singlePeople__wrapper">
            <div class="singlePeople__metaData">
              <div class="singlePeople__personalInfo">
                <h2 class="singlePeople__category">
                  <?php
                    $term = get_the_terms($post->ID, 'in_house_or_outsourced');
                    echo str_replace(" ", "<br>", $term[0]->name);
                  ?>
                </h2>
                <div class="singlePeople__name">
                  <h3 class="singlePeople__nameKanji">
                    <?php if (get_field('name-kanji')): ?>
                      <?php the_field('name-kanji'); ?>
                    <?php endif; ?>
                  </h3>
                  <span class="singlePeople__position">
                    <?php if (get_field('position')): ?>
                      <p class="singlePeople__position">
                        <?php strtoupper(the_field('position')); ?>
                      </p>
                    <?php endif; ?>
                  </span>
                </div>
              </div>
              <div class="singlePeople__personalDetail">
                <div class="singlePeople__contents">
                  <p class="singlePeople__content"><?php the_content(); ?></p>
                </div>
                <div class="singlePeople__sns">
                  <?php if (get_field('twitter')): ?>
                      <a href="<?php the_field('twitter'); ?>">
                        <?php echo file_get_contents(get_template_directory() . '/assets/img/icons/icon_twitter.svg'); ?>
                      </a>
                  <?php endif; ?>
                  <?php if (get_field('instagram')): ?>
                      <a href="<?php the_field('instagram'); ?>">
                        <?php echo file_get_contents(get_template_directory() . '/assets/img/icons/icon_instagram.svg'); ?>
                      </a>
                  <?php endif; ?>
                  <?php if (get_field('facebook')): ?>
                      <a href="<?php the_field('facebook'); ?>">
                        <?php echo file_get_contents(get_template_directory() . '/assets/img/icons/icon_fb.svg'); ?>
                      </a>
                  <?php endif; ?>
                </div>
              </div>
            </div>
            <?php
            if (has_post_thumbnail()) {
              the_post_thumbnail();
            } else { ?>
            <img src="" alt="no-image" width="240" height="240">
            <?php } ?>
          </div>
          <?php endwhile; ?>
          <?php else: ?>
        </article>
        <!-- 投稿が無い場合の処理 -->
      <?php endif; ?>
      <hr class="divider">
      <section class="singlePeople__works">
        <h2 class="singlePeople__headline">WORKS</h2>
        <?php
          global $post;
          $slug = $post->post_name;
          $args = array(
            'post_type' => 'works',
            'post_status' => 'publish',
            'tax_query' => array(
                array (
                  'taxonomy' => 'member',
                  'field' => 'slug',
                  'terms' => $slug,
                ),
                array (
                  'taxonomy' => 'picture_orientation',
                  'field'    => 'slug',
                  'terms'    => 'horizontal'
                )
            )
          );

          $the_query = new WP_Query($args); if ($the_query->have_posts()):
        ?>
        <div class="works__listWrapper">
          <ul class="works__list -horizontal">
            <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
              <?php if (has_post_thumbnail()) { ?>
                <li class="works__item">
                  <a href="<?php echo get_permalink($tax_post->ID); ?>" class="works__thumbnailLink">
                    <?php the_post_thumbnail(); ?>
                  </a>
                </li>
                <?php } else { ?>
                <img src="" alt="no-image" width="240" height="240">
              <?php } ?>
            <?php endwhile; ?>
          </ul>
        </div>
        <?php wp_reset_postdata(); ?>
        <?php else: ?>
        <p class="works__paragraph">Coming Soon...</p>
        <?php endif; ?>
      </section>
		</div>
	</main><!-- #main -->

<?php
get_footer();
