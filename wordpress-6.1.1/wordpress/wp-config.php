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

// ** Heroku ClearDB settings - from Heroku Environment ** //
$db = parse_url($_ENV["mysql://b65e39120f53ef:c6ff7a75@us-cdbr-east-06.cleardb.net/heroku_1832e5447931d08?reconnect=true"]);

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', trim($db["path"],"/"));

/** MySQL database username */
define('DB_USER', $db["user"]);

/** MySQL database password */
define('DB_PASSWORD', $db["pass"]);

/** MySQL hostname */
define('DB_HOST', $db["host"]);

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '&-dpUM)*zaKXJEr3L=54NA?vRjvsvKiwVHR!b9AiA|GfLteytFdu)]mTaGf+?Su]');
define('SECURE_AUTH_KEY',  'oIbK=tQa,hrdK!.E}DADGk]||1w;y-/1.K6PJ2{S@u=[7vQn&XOyqT.sF-gFF(R>');
define('LOGGED_IN_KEY',    '0m3I@&,m{wqglaC?MWNIehQxHme_vgN>9X?5h/FdhPl{gsuwO#rgqH2IBi cv,g|');
define('NONCE_KEY',        '+3 GO%fPxa;#1J>9VxZ}C-[vZrXNzI Z~L|A[fc-[4Keh9J7Wt>,v&Z&s6-iBUAt');
define('AUTH_SALT',        'I|*|7g5p~uHmv+e(-(8==VLH@JN#k#mXc</t{rmJ=gyfMkm9(*O3^%]cHu9H)1o2');
define('SECURE_AUTH_SALT', '5Y=qcn0rMuEEPa)/[|%pLN1(:Nb]7|q:}$cY~&U0RH[|-sg)0oKtb?O^hzI5Oi:p');
define('LOGGED_IN_SALT',   'mx$_L(j%2!g7,X;`:1WKCEjs2H)&/m}O@1 mzPeY2rvM<a@A-3GV!Q%>-+BsEC0#');
define('NONCE_SALT',       'd1c|a~iLx!HtR1%M[?6,`kj2)D4B<j@rm)O(S3m,D?(^|^m:|7<!+C;@a}%-r{y+');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', $_ENV["WORDPRESS_LANG"]);

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');