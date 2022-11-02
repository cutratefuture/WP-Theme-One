<?php

/**
 * nav menu template
 * 
 * @package lauren
 */

$menu_class = \LAUREN_THEME\Inc\Menus::get_instance();
$header_menu_id = $menu_class->get_menu_id('lauren-header-menu');
$header_menus = wp_get_nav_menu_items($header_menu_id);

?>
<nav id="nav">
	<?php
	if (!empty($header_menus) && is_array($header_menus)) {
	?>
		<ul class="actions stacked special animated spinY">
			<?php
			foreach ($header_menus as $menu_item) {
				if (!$menu_item->menu_item_parent) {

					$child_menu_items = $menu_class->get_child_menu_items($header_menus, $menu_item->ID);
					$has_children = !empty($child_menu_items) && is_array($child_menu_items);
					$has_sub_menu_class = !empty($has_children) ? 'has-submenu' : '';

					if (!$has_children) {
			?>
						<li>
							<a class="button" href="<?php echo esc_url($menu_item->url); ?>">
								<?php echo esc_html($menu_item->title); ?>
							</a>
						</li>
					<?php
					} else {
					?>
						<!-- TODO: Make custom dropdown menu 6/6 -->
						<ul class="tree">
							<!-- for  grand child menu items -->
							<li class="section">
								<a class="button" href="<?php echo esc_url($menu_item->url); ?>">
										<?php echo esc_html($menu_item->title); ?>
									</a>
								<ul>

									<!-- SUB-SECTION -->
									<li class="section">
										<ul>
											<li>
												<?php
												foreach ($child_menu_items as $child_menu_item) {
												?>

											<li>
												<span>
													<a href="<?php echo esc_url($child_menu_item->url); ?>">
														<?php echo esc_html($child_menu_item->title); ?>
													</a>
												</span>
											</li>
										<?php
												}
										?>
									</li>
								</ul>
							</li>
						</ul>
						</li>
		</ul>
	<?php
					}
	?>
<?php
				}
			}
?>
</ul>
<?php
	}
?>
</nav>