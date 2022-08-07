<div id="dokan-secondary" class="dokan-store-sidebar" role="complementary">
    <?php if ( dokan_get_option( 'enable_theme_store_sidebar', 'dokan_appearance', 'off' ) === 'off' ) { ?>
		<div class="dokan-widget-area widget-collapse">
			<div id="sidebar" class="content-secondary site-sidebar">
				<div class="site-scroll">
					<div class="sidebar-inner">

						<div class="sidebar-mobile-header">
							<h3 class="entry-title"><?php esc_html_e('Filter Products','bacola'); ?></h3>

							<div class="close-sidebar">
								<i class="klbth-icon-x"></i>
							</div>
						</div>

						<?php do_action( 'dokan_sidebar_store_before', $store_user->data, $store_info ); ?>
						<?php
						if ( ! dynamic_sidebar( 'sidebar-store' ) ) {
							$args = [
								'before_widget' => '<aside class="widget dokan-store-widget %s">',
								'after_widget'  => '</aside>',
								'before_title'  => '<h3 class="widget-title">',
								'after_title'   => '</h3>',
							];

							dokan_store_category_widget();

							if ( ! empty( $map_location ) ) {
								dokan_store_location_widget();
							}

							dokan_store_time_widget();
							dokan_store_contact_widget();
						}
						?>

						<?php do_action( 'dokan_sidebar_store_after', $store_user->data, $store_info ); ?>

					</div>
				</div>
			</div>
		</div>
    <?php } else { ?>
        <?php get_sidebar( 'store' ); ?>
    <?php } ?>

</div><!-- #secondary .widget-area -->