<?php

return array(
	'enable_facebook' => array(
		'group_name' => 'CiviSocial Account Credentials',
		'group' => 'civisocial',
		'name' => 'enable_facebook',
		'type' => 'Boolean',
		'is_domain' => 1,
		'is_contact' => 0,
		'default' => FALSE,
		'title' => 'Enabled',
		'description' => 'Enable User Authentication via Facebook',
		'help_text' => '',
		'html_type' => 'CheckBox',
		'quick_form_type' => 'YesNo',
	),
	'facebook_api_key' => array(
		'group_name' => 'CiviSocial Account Credentials',
		'group' => 'civisocial',
		'name' => 'facebook_api_key',
		'type' => 'String',
		'is_domain' => 1,
		'is_contact' => 0,
		'title' => 'App ID',
		'description' => 'Facebook Application ID',
		'help_text' => 'Appid for facebook app. Please look <a href="https://developers.facebook.com/docs/facebook-login/login-flow-for-web/v2.3">here</a> for more details.',
		'html_type' => 'Text',
		'quick_form_type' => 'Element',
	),
	'facebook_api_secret' => array(
		'group_name' => 'CiviSocial Account Credentials',
		'group' => 'civisocial',
		'name' => 'Secret',
		'type' => 'String',
		'is_domain' => 1,
		'is_contact' => 0,
		'title' => 'Secret',
		'description' => 'Facebook Application Secret',
		'help_text' => 'Application Secret for facebook.',
		'html_type' => 'Text',
		'quick_form_type' => 'Element',
	),
	'enable_googleplus' => array(
		'group_name' => 'CiviSocial Account Credentials',
		'group' => 'civisocial',
		'name' => 'enable_googleplus',
		'type' => 'Boolean',
		'is_domain' => 1,
		'is_contact' => 0,
		'default' => FALSE,
		'title' => 'Enabled',
		'description' => 'Enable User Authentication via Google Plus',
		'help_text' => '',
		'html_type' => 'CheckBox',
		'quick_form_type' => 'YesNo',
	),
	'googleplus_api_key' => array(
		'group_name' => 'CiviSocial Account Credentials',
		'group' => 'civisocial',
		'name' => 'googleplus_api_key',
		'type' => 'String',
		'is_domain' => 1,
		'is_contact' => 0,
		'title' => 'Client ID',
		'description' => 'Google Plus Application Key',
		'help_text' => 'Google Plus OAuth Key',
		'html_type' => 'Text',
		'quick_form_type' => 'Element',
	),
	'googleplus_api_secret' => array(
		'group_name' => 'CiviSocial Account Credentials',
		'group' => 'civisocial',
		'name' => 'googleplus_api_secret',
		'type' => 'String',
		'is_domain' => 1,
		'is_contact' => 0,
		'title' => 'Client Secret',
		'description' => 'Google Plus Application Secret',
		'help_text' => 'Google Plus OAuth Secret',
		'html_type' => 'Text',
		'quick_form_type' => 'Element',
	),
	'enable_twitter' => array(
		'group_name' => 'CiviSocial Account Credentials',
		'group' => 'civisocial',
		'name' => 'enable_twitter',
		'type' => 'Boolean',
		'is_domain' => 1,
		'is_contact' => 0,
		'default' => FALSE,
		'title' => 'Enabled',
		'description' => 'Enable User Authentication via Twitter',
		'help_text' => '',
		'html_type' => 'CheckBox',
		'quick_form_type' => 'YesNo',
	),
	'twitter_api_key' => array(
		'group_name' => 'CiviSocial Account Credentials',
		'group' => 'civisocial',
		'name' => 'twitter_api_key',
		'type' => 'String',
		'is_domain' => 1,
		'is_contact' => 0,
		'title' => 'Consumer Key (API Key)',
		'description' => 'Twitter Consumer Key',
		'help_text' => 'Twitter Consumer Key for Twitter app. <a href="https://apps.twitter.com/">Visit Twitter Apps</a> to create one.',
		'html_type' => 'Text',
		'quick_form_type' => 'Element',
	),
	'twitter_api_secret' => array(
		'group_name' => 'CiviSocial Account Credentials',
		'group' => 'civisocial',
		'name' => 'twitter_api_secret',
		'type' => 'String',
		'is_domain' => 1,
		'is_contact' => 0,
		'title' => 'Consumer Secret (API Secret)',
		'description' => 'Twitter Consumer Secret',
		'help_text' => 'Consumer Secret for Twitter app',
		'html_type' => 'Text',
		'quick_form_type' => 'Element',
	),
);