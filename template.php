<?php

/**
* @file
* Template overrides as well as (pre-)process and alter hooks for the
* Simple Blog theme.
*/

function simple_blog_css_alter(&$css) {
	
	
	 
	$exclude = array(
	// Remove Drupal core css - Avoid all the CSS battles
		
		'modules/aggregator/aggregator.css' => FALSE,
		'modules/block/block.css' => FALSE,
		'modules/book/book.css' => FALSE,
		'modules/comment/comment.css' => FALSE,
		'modules/dblog/dblog.css' => FALSE,
		'modules/field/theme/field.css' => FALSE,
		'modules/file/file.css' => FALSE,
		'modules/filter/filter.css' => FALSE,
		'modules/forum/forum.css' => FALSE,
		'modules/help/help.css' => FALSE,
		'modules/menu/menu.css' => FALSE,
		'modules/node/node.css' => FALSE,
		'modules/openid/openid.css' => FALSE,
		'modules/poll/poll.css' => FALSE,
		'modules/profile/profile.css' => FALSE,
		'modules/search/search.css' => FALSE,
		'modules/statistics/statistics.css' => FALSE,
		'modules/syslog/syslog.css' => FALSE,
		'modules/system/admin.css' => FALSE,
		'modules/system/maintenance.css' => FALSE,
		'modules/system/system.css' => FALSE,
		'modules/system/system.admin.css' => FALSE,
		// 'modules/system/system.base.css' => FALSE,
		'modules/system/system.maintenance.css' => FALSE,
		'modules/system/system.messages.css' => FALSE,
		'modules/system/system.menus.css' => FALSE,
		'modules/system/system.theme.css' => FALSE,
		'modules/taxonomy/taxonomy.css' => FALSE,
		'modules/tracker/tracker.css' => FALSE,
		'modules/update/update.css' => FALSE,
		'modules/user/user.css' => FALSE,
		'misc/vertical-tabs.css' => FALSE,
		 
		// Remove contrib module CSS
		// drupal_get_path('module', 'views') . '/css/views.css' => FALSE,

		);
	
	$css = array_diff_key($css, $exclude);
 
}