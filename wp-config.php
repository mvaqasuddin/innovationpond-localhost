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
/** The name of the database for WordPress */
define('DB_NAME', 'innovationpond');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'Tj9D>ff8H|kUr|i!_V.,c4AJ|j^yZ(NWJM?J)deOa]5k#|EK#LTht5gLUi>_d62|');
define('SECURE_AUTH_KEY',  'W|]JhNHW?ppw#Av-19}RT=T}~R*AK+}PM}*3Hta{q:yyznfh9K$#R(R/Xig`DhVv');
define('LOGGED_IN_KEY',    'B*Zsng(8P(S(Eo&<Kuh!6kO=O-v*L})ct|{Y|%ldHe(+t ]A&v^Fihlh-W2VKy4i');
define('NONCE_KEY',        'A>%36K@+EK3&;0Q[2> |+;RnaM)(5i<eR{#7xm|rmv-@DABgmqZg3x_m/|)!TbXC');
define('AUTH_SALT',        '_a7>I]*S0=l0RPzM5Jb|B.J5gQnlL<E1d()]gyUg|{pI|}BJ<KhFYZg$0[V@rxxD');
define('SECURE_AUTH_SALT', 't1_S9*#Msh1dL+@~|*tEV%V!{.@:~z>L]Q9w0:Pb>5Jh2[/O$_#$,I[^vgH[C=iw');
define('LOGGED_IN_SALT',   '0bRhf7%/!S(ngQM&7OwG_h!f092 s=,sw&I&nr?>qIZ8)1Y1dtl!.^2|+-2S03YD');
define('NONCE_SALT',       '|t[QFFo~WTX{;0dV,NZ*jzktSx%SiDbPM.cr~h<^$]><UGH7l++Ag}E,jzy6Jzd3');

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
define('WPLANG', '');

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
