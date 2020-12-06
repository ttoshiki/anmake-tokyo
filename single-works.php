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
		<div class="singleWorks">
      <section class="l-mainVisual">
        <picture class="catch__mainVisualPicture">
          <?php if (get_field('header-image')): ?>
            <img src="<?php the_field('header-image'); ?>" alt="">
          <?php endif; ?>
        </picture>
      </section>
      <?php if (have_posts()): ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <?php while (have_posts()) : the_post(); ?>
          <?php
              $post_terms = get_the_terms('', 'category_works')
          ?>
          <h1 class="page__title -ja"><?php the_title(); ?><span class="singleWorks__category"> / <?php if (!empty($post_terms)) {
              echo strtoupper($post_terms[0]->slug);
          } ?></span></h1>
          <div class="singleWorks__movie">
            <div class="singleWorks__movieInner">
              <?php if (get_field('movie')): ?>
                <?php the_field('movie'); ?>
              <?php endif; ?>
            </div>
          </div>
          <div class="labelValue">
            <h2 class="singleWorks__headline">
              <?php the_title(); ?> / <?php if (!empty($post_terms)) { echo strtoupper($post_terms[0]->slug);} ?>
            </h2>
            <hr class="singleWorks__detailDivider">
            <?php if (get_field('client')): ?>
              <dl class="labelValue__row">
                <dt class="labelValue__label">CLIENT</dt>
                <dd class="labelValue__value"><?php the_field('client'); ?></dd>
              </dl>
            <?php endif; ?>
            <?php
              $taxonomy_name = 'member';
              $taxonomies = get_the_terms( $post->ID, $taxonomy_name);
              if (!is_wp_error($taxonomies) && $taxonomies):
            ?>
            <dl class="labelValue__row">
              <dt class="labelValue__label">DIRECTOR</dt>
              <dd class="labelValue__value singleWorks__members">
              <?php
                    foreach ($taxonomies as $taxonomy):
                      $term_id = esc_html($taxonomy->term_id);
                      $term_idsp = "member_".$term_id; //カスタムフィールドを取得するのに必要なtermのIDは「taxonomyname_ + termID」
                      $photo = get_field('member-photo', $term_idsp);
                      $photosp = wp_get_attachment_image_src($photo, 'full');
                      $position = get_field('member-position', $term_idsp);
                      ?>
                    <div class="singleWorks__profile">
                      <img src="<?php echo $photosp[0]; ?>" alt="<?php echo esc_html($taxonomy->name); ?>">
                      <span class="singleWorks__name"><?php echo esc_html($taxonomy->name); ?></span>
                      <span class="singleWorks__position"><?php echo strtoupper(esc_html($position)); ?></span>
                    </div>
                    <?php endforeach; ?>
                <?php endif; ?>
              </dd>
            </dl>
            <?php if (get_field('credit')): ?>
              <dl class="labelValue__row">
                <dt class="labelValue__label">CREDIT</dt>
                <dd class="labelValue__value"><?php the_field('credit'); ?></dd>
              </dl>
            <?php endif; ?>
            <?php if (get_field('service')): ?>
              <dl class="labelValue__row">
                <dt class="labelValue__label">SERVICE</dt>
                <dd class="labelValue__value">
                  <?php
                    $services = get_field('service');
                    foreach ($services as $service):
                  ?>
                      <span class="singleWorks__service"><?php echo $service; ?></span>
                    <?php endforeach; ?>
                </dd>
              </dl>
            <?php endif; ?>
          </div>
          <?php if (have_rows('works-photos')): ?>
            <div class="singleWorks__photos">
              <?php while (have_rows('works-photos')): the_row(); ?>
                <img src="<?php the_sub_field('works-photo'); ?>" alt="">
              <?php endwhile; ?>
            </div>
          <?php endif; ?>
          <?php endwhile; ?>
          <?php else: ?>
        </article>
        <!-- 投稿が無い場合の処理 -->
      <?php endif; ?>
      <hr class="singleWorks__divider">
      <div class="singleWorks__related">
        <?php related_posts(); ?>
      </div>
		</div>
	</main><!-- #main -->

<?php
get_footer();
