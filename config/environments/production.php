<?php
/**
 * Configuration overrides for WP_ENV === 'production'
 */

use Roots\WPConfig\Config;

/**
 * You should try to keep staging as close to production as possible. However,
 * should you need to, you can always override production configuration values
 * with `Config::define`.
 *
 * Example: `Config::define('WP_DEBUG', true);`
 * Example: `Config::define('DISALLOW_FILE_MODS', false);`
 */
Config::define('WP_DEBUG', true);
Config::define('WP_DEBUG_DISPLAY', false);
Config::define('WP_DEBUG_LOG', false);
Config::define('DISALLOW_FILE_MODS', false);
Config::define('FS_METHOD', 'direct');

Config::define('WP_ROCKET_EMAIL', env('WP_ROCKET_EMAIL'));
Config::define('WP_ROCKET_KEY', env('WP_ROCKET_KEY'));