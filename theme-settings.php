<?php function simple_blog_form_system_theme_settings_alter(&$form, $form_state) {

	$form['social_buttons'] = array(
		'#type' => 'fieldset',
		'#title' => t('Social buttons'),
		'#group' => 'instant_vertical_tabs',
		);

	$form['social_buttons']['social_website'] = array(
		'#type' => 'textfield',
		'#title' => t('Website'),
		'#default_value' => theme_get_setting('social_website'),
		);

	$form['social_buttons']['social_linkedin'] = array(
		'#type' => 'textfield',
		'#title' => t('LinkedIn'),
		'#default_value' => theme_get_setting('social_linkedin'),
		);

	$form['social_buttons']['social_github'] = array(
		'#type' => 'textfield',
		'#title' => t('Github'),
		'#default_value' => theme_get_setting('social_github'),
		);

	$form['social_buttons']['social_facebook'] = array(
		'#type' => 'textfield',
		'#title' => t('Facebook'),
		'#default_value' => theme_get_setting('social_facebook'),
		);

	$form['social_buttons']['social_twitter'] = array(
		'#type' => 'textfield',
		'#title' => t('Twitter'),
		'#default_value' => theme_get_setting('social_twitter'),
		);
	$form['social_buttons']['social_instagram'] = array(
		'#type' => 'textfield',
		'#title' => t('Instagram'),
		'#default_value' => theme_get_setting('social_instagram'),
		);
	$form['social_buttons']['social_youtube'] = array(
		'#type' => 'textfield',
		'#title' => t('Youtube'),
		'#default_value' => theme_get_setting('social_youtube'),
		);

	}

?>