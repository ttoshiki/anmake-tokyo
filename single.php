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
 * @package SHIELD
 */

get_header();
?>

	<main class="site-main">
		<div class="single">
      <section class="l-mainVisual">
        <h1 class="l-mainVisualHeading roboto" id="effect_01">NEWS</h1>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/news/mv.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/news/mv.jpg, <?php echo get_template_directory_uri(); ?>/assets/img/news/mv@2x.jpg 2x" alt="" class="l-mainVisualBg">
			</section>
			<div class="l-doubleCol">
				<div class="single__main">
					<?php if (have_posts()): ?>
							<article id="post-<?php the_ID(); ?>" <?php post_class('single__article'); ?>>
								<?php while (have_posts()) : the_post(); ?>
									<?php get_template_part('template-parts/breadcrumb'); ?>
									<span class="single__cat roboto"><?php the_category(' '); ?></span><time datetime="<?php echo get_the_date('Y-m-d'); ?>" class="single__date roboto"><?php echo get_post_time('Y.m.d'); ?></time>
									<h3 class="single__title"><?php echo get_the_title(); ?></h3>
										<?php
                                            if (has_post_thumbnail()) {
                                                the_post_thumbnail();
                                            } else { ?>
												<img src="" alt="no-image" width="240" height="240">
										<?php } ?>
										<div class="single__meta">
											<p class="single__content"><?php the_content(); ?></p>
										</div>
									<?php endwhile; ?>
									<?php else: ?>
							</article>
						<!-- 投稿が無い場合の処理 -->
					<?php endif; ?>
					<a href="<?php echo home_url('/download/') ?>">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/news/banner.jpg" alt="" class="single__banner">
					</a>
				</div>
				<aside class="l-aside">
					<?php get_sidebar(); ?>
				</aside>
			</div>
	</main><!-- #main -->

<?php
get_footer();
