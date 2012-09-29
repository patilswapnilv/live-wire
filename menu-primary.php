<?php
/**
 * Primary Menu Template
 *
 * Displays the Primary Menu if it has active menu items.
 *
 * @package Live Wire
 * @subpackage Template
 * @since 0.1.0
 */
 
 if ( has_nav_menu( 'primary' ) ) : ?>
 
	<?php do_atomic( 'before_menu_primary' ); // live-wire_before_menu_primary ?>
 
		<div id="menu-primary" class="menu-container">

			<div class="wrap">
				
				<?php do_atomic( 'open_menu_primary' ); // live-wire_open_menu_primary ?>	
					
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container_class' => 'menu', 'menu_class' => '', 'menu_id' => 'menu-primary-items', 'items_wrap' => '<ul id="%1$s" class="%2$s"><li class="tinynav-select-menu"><a href="#">' .  __( 'Primary Navigation...', 'live-wire' ) . '</a></li>%3$s</ul>',  'fallback_cb' => '' ) ); ?>
				
				<?php do_atomic( 'close_menu_primary' ); // live-wire_close_menu_primary ?>
						
			</div><!-- .wrap -->

		</div><!-- #menu-primary .menu-container -->
	
	<?php do_atomic( 'after_menu_primary' ); // live-wire_after_menu_primary ?>
	
<?php endif; ?>