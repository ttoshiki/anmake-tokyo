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
          <h1 class="page__title"><?php the_title(); ?><span class="singleWorks__category"> / <?php if (!empty($post_terms)) {
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
            <dl class="labelValue__row">
              <dt class="labelValue__label">MEMBER</dt>
              <dd class="labelValue__value singleWorks__members">
                <?php
                  $terms = get_the_terms($post->ID, 'member');
                  foreach ($terms as $term):
                ?>
                  <div class="singleWorks__profile">
                    <?php switch($term->name) {
                      case '佐藤 遼太郎':
                    ?>
                        <img src="<?php $upload_dir = wp_upload_dir(); echo $upload_dir['baseurl']; ?>/2020/09/img_001@2x.jpg" alt="佐藤 遼太郎">
                        <span class="singleWorks__name">佐藤 遼太郎</span>
                        <span class="singleWorks__position">PRODUCER</span>
                    <?php
                      break;
                      case '片寄 裕太郎':
                    ?>
                        <img src="<?php $upload_dir = wp_upload_dir(); echo $upload_dir['baseurl']; ?>/2020/09/img_002@2x.jpg" alt="佐藤 遼太郎">
                        <span class="singleWorks__name">片寄 裕太郎</span>
                        <span class="singleWorks__position">DIRECTOR/DP</span>
                    <?php
                      break;
                    ?>
                    <?php } ?>
                  </div>
                    <?php endforeach; ?>
              </dd>
            </dl>
            <?php if (get_field('website')): ?>
              <dl class="labelValue__row">
                <dt class="labelValue__label">WEBSITE</dt>
                <dd class="labelValue__value"><a href="<?php the_field('website'); ?>" class="singleWorks__link"><?php the_field('website'); ?></a></dd>
              </dl>
            <?php endif; ?>
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
