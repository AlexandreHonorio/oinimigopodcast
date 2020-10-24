<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //


/**
*  The name of the database for WordPress
*/
define('DB_NAME', 'PodcastOInimigo');

/**
*  MySQL database username
*/
define('DB_USER', 'hipermoderno');

/**
*  MySQL database username
*/
define('DB_PASSWORD', 'm#t$m0rf0s#');

/**
*  MySQL hostname
*/
define('DB_HOST', 'localhost');

/**
*  Database Charset to use in creating database tables.
*/
define('DB_CHARSET', 'utf8');

/**
*  The Database Collate type. Don't change this if in doubt.
*/
define('DB_COLLATE', '');

/**
*  WordPress Database Table prefix.
*  You can have multiple installations in one database if you give each a unique
*  prefix. Only numbers, letters, and underscores please!
*/
$table_prefix = 'wp_';

/**
*  disallow unfiltered HTML for everyone, including administrators and super administrators. To disallow unfiltered HTML for all users, you can add this to wp-config.php:
*/
define('DISALLOW_UNFILTERED_HTML', false);

/**
*  
*/
define('ALLOW_UNFILTERED_UPLOADS', false);

/**
*  The easiest way to manipulate core updates is with the WP_AUTO_UPDATE_CORE constant
*/
define('WP_AUTO_UPDATE_CORE', true);

/**
*  forces the filesystem method
*/
define('FS_METHOD', 'direct');

/**
*  Authentication Unique Keys and Salts.
*  Change these to different unique phrases!
*  You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
*  You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
*  @since 2.6.0
*/
define('AUTH_KEY', '^4+[!IZ.4^QhHhjEl*wg32Aa^M}cBiN~.x_79(7]DxF1f9!<5<N*)2!Q{/>uqK^]');
define('SECURE_AUTH_KEY', '&&4{hbP4ILM&>hgb)$eJCak%G^Sb4I[/=)e|p [EE|v.wdllt(9`sdt),q)MkKgP');
define('LOGGED_IN_KEY', 'a>r&zEN7v]84cC.}*gKm0|<e>q{d6 0j|nkV8$<!.WE*$W[~>|q|=},Ct%>-j-t]');
define('NONCE_KEY', 'MY|A~4~J%7/2A>,?xQ1e2ha(s29gD@n@f0MK^A#9gO//B,#o]>tPD%yU|gRn|KqQ');
define('AUTH_SALT', 'V|#+.Y2jvira&4HY/b@Km-I+N6s-o%PX/GV0u|Nl-|5(mFi=Cj@sI8)=bse|{.AN');
define('SECURE_AUTH_SALT', 'IpSKAU;.yLr{_wKfd-Y5YMN.BC_7`qg%sB4Qv(Kk?1u_[6aY_&>g5A9,AQO7Ck>}');
define('LOGGED_IN_SALT', 'zrz|Ng-|n;}(YrW&*vg7{TT+lR0e#-Xc}a9AGk2<%P-buj5r_d<&B56zcj4wzPoj');
define('NONCE_SALT', 'l9/} T=B#[D LDYg:z?84$> Q}Zg&/^&_8|^, QI,;Hku! 9+KGY|[dn0iyCCkgK');

/**
*  For developers: WordPress debugging mode.
*  Change this to true to enable the display of notices during development.
*  It is strongly recommended that plugin and theme developers use WP_DEBUG
*  in their development environments.
*/
define('WP_DEBUG', false);
define('WP_DEBUG_LOG', false);
define('WP_DEBUG_DISPLAY', true);

/**
*  For developers: WordPress Script Debugging
*  Force Wordpress to use unminified JavaScript files
*/
define('SCRIPT_DEBUG', false);

/**
*  WordPress Localized Language, defaults to English.
*  Change this to localize WordPress. A corresponding MO file for the chosen
*  language must be installed to wp-content/languages. For example, install
*  de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
*  language support.
*/
define('WPLANG', '');

/**
*  Setup Multi site
*/
define('WP_ALLOW_MULTISITE', false);

/**
*  Memory Limit
*/
define('WP_MEMORY_LIMIT', '256M');

/**
*  Post Autosave Interval
*/
define('AUTOSAVE_INTERVAL', 60);

/**
*  Disable / Enable Post Revisions and specify revisions max count
*/
define('WP_POST_REVISIONS', true);

/**
*  this constant controls the number of days before WordPress permanently deletes 
*  posts, pages, attachments, and comments, from the trash bin
*/
define('EMPTY_TRASH_DAYS', 30);

/**
*  Make sure a cron process cannot run more than once every WP_CRON_LOCK_TIMEOUT seconds
*/
define('WP_CRON_LOCK_TIMEOUT', 60);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
