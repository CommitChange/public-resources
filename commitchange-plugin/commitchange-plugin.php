<?php
/*
Plugin Name: CommitChange Plugin
Plugin URI: https://commitchange.com/pages/wp-plugin
Description: The simplest way to embed CommitChange widgets into your WordPress site.
Author: CommitChange
Author URI: https://commitchange.com
Version: 0.1
*/

$cc_options = get_option('cc_settings');

include('scripts.php');
include('settings.php');