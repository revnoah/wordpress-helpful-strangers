<?php

/**
 * Define settings fields
 *
 * @return array
 */
function helpful_strangers_settings_fields() {
	$settings = [
		'id' => 'helpful_strangers',
		'kabob' => 'helpful-strangers',
		'label' => __('Helpful Strangers'),
		'settings' => [
			[
				'id' => 'helpful_strangers_laravel',
				'label' => __('Laravel'),
				'description' => 
					__('Laravel helper functions'),
				'type' => 'boolean',
				'default' => true
			], [
				'id' => 'helpful_strangers_general',
				'label' => __('General'),
				'description' => 
					__('General helper functions not related to any framework'),
				'type' => 'boolean',
				'default' => true
			]
		]
	];

	return $settings;
}


/**
 * action admin_menu
 */
add_action('admin_menu', 'helpful_strangers_create_menu');

/**
 * Create admin menu item
 *
 * @return void
 */
function helpful_strangers_create_menu() {
	add_submenu_page(
		'options-general.php',
		'Helpful Strangers',
		'Helpful Strangers',
		'administrator',
		__FILE__,
		'helpful_strangers_admin',
		plugins_url('/images/icon.png', __FILE__)
	);
}

/**
 * action admin_init
 */
add_action('admin_init', 'helpful_strangers_settings');

/**
 * Register custom settings
 *
 * @return void
 */
function helpful_strangers_settings() {
	$settings = helpful_strangers_settings_fields();

	//register settings
	foreach ($settings['settings'] as $setting) {
		register_setting($settings['kabob'] . '-settings-group', $setting['id']);
	}	
}

/**
 * Admin settings
 *
 * @return void
 */
function helpful_strangers_admin() {
	//load user settings
	$settings = helpful_strangers_settings_fields();
	?>
	<div class="wrap">
	<h1><?php echo $settings['label']; ?></h1>

	<form method="post" action="options.php">
		<?php settings_fields($settings['kabob'] . '-settings-group'); ?>
		<?php do_settings_sections($settings['kabob'] . '-settings-group'); ?>

		<table class="form-table">
			<?php
			foreach ($settings['settings'] as $setting) {
				$setting['saved'] = get_option($setting['id'], $setting['default']);
				echo helpful_strangers_get_formatted_field($setting);
				?>
			<?php
			}
			?>
		</table>

		<?php submit_button(); ?>
	</form>

</div>
<?php
}
