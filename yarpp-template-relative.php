<?php if (have_posts()):?>
  <h3>PICK UP WORKS</h3>
  <?php
    $args = array(
      'post_type' => 'works',
      'tax_query' => array(
        array(
          'taxonomy' => 'picture_orientation',
          'field' => 'slug',
          'terms' => 'horizontal',
        )
      )
    );
    $the_query = new WP_Query($args); if($the_query->have_posts()):
  ?>
  <div class="related__list">
    <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
      <?php
        $post_terms = get_the_terms('', 'category_works')
      ?>
      <?php if (has_post_thumbnail()):?>
        <div class="related__item">
          <div class="related__itemInner">
            <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>" class="related__thumbnail">
              <?php the_post_thumbnail('large'); ?>
            </a>
            <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
              <h4 class="related__title"><?php the_title(); ?></h4>
              <span class="related__category">
                / <?php if (!empty($post_terms)) { echo strtoupper($post_terms[0]->slug);} ?>
              </span>
            </a>
          </div>
        </div>
      <?php endif; ?>
  <?php endwhile; ?>
  </div>
<?php else: ?>

<?php endif; endif; ?>