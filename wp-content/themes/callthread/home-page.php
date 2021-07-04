<?php /* Template Name: Home Page */
get_header();
?>

	<div class="row no-gutters main-container">
        <div class="col-md-6 hero-text">
            <div class=" bg-primary">
                <div class="hero-title">
                    <?php the_field('intro_text'); ?>
                </div>
                <div class="hero-sub">
                    <span><?php the_field('subtitle_text'); ?></span>
                    <div class="hero-buttons">
					<?php
						$main = get_field('main_action');
						$secondary = get_field('secondary_action');
					if( $main && $secondary ): ?>
                        <a class="btn btn-warning btn-lg" href="<?php echo esc_url( $main['link'] ); ?>" tabindex="-1" aria-disabled="true"><?php echo $main['text']; ?></a>
                        <a class="btn btn-outline-light btn-lg ml-3" href="<?php echo esc_url( $secondary['link'] ); ?>" tabindex="-1" aria-disabled="true"><?php echo $secondary['text']; ?></a>
						<?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 hero-img">
            <div class="hero-img--container">
                <?php 
				$image = get_field('intro_image');
				if( !empty( $image ) ): ?>
					<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
				<?php endif; ?>
            </div>
        </div>
        <div class="col-12 bg-half">
            <section class="container section text-center">
			<?php
						$CTAdata = get_field('cta');
						$CTAbutton = $CTAdata['button'];
			 ?>
                <div class="headline"><?php echo $CTAdata['title']; ?></div>
                <div class="headline-subtitle">
                    <?php echo $CTAdata['subtitle']; ?>
                </div>
                <a class="btn btn-primary btn-lg" href="<?php echo esc_url( $CTAbutton['link'] ); ?>" tabindex="-1" aria-disabled="true"><?php echo $CTAbutton['text']; ?></a>
                <div class="section-img">
                    <img src="<?php echo esc_url($CTAdata['image']['url']); ?>" alt="<?php echo esc_attr($image['image']['alt']); ?>" />
                </div>
            </section>
        </div>
        <div class="col-12 bg-gray">
            <div class="container">
                <div class="row value-content">
				<?php 
				$rows = get_field('value_proposition');
				if( $rows ) {
					foreach( $rows as $row ) {
						echo '<div class="col-md-6 value-content--item">';
						$title = $row['title'];
						$icon = $row['icon'];
						$content = $row['content'];
						echo '<div class="align-items-center d-flex item justify-content-center">';
						echo '<div class="item-icon"><img src="'.$row['icon'].'"alt="">';
						echo '</div>';
						echo '<div class="item-text">';
						echo '<span class="item-title">'.$row['title'].'</span>';
						echo '<span class="item-content">'.$row['content'].'</span>';
						echo '</div>';
						echo '</div>';
						echo '</div>';
					}
				}
				?>
                </div>
            </div>
        </div>
    </div>

<?php
get_sidebar();
get_footer();
