<?php
define( 'WP_CACHE', true );

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

require_once dirname(__FILE__) . '/../etc/php/lib/CloudezSettings.php';

define('FS_METHOD', 'direct');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', CEZ_DBNAME);

/** MySQL database username */
define('DB_USER', CEZ_DBUSER);

/** MySQL database password */
define('DB_PASSWORD', CEZ_DBPASS);

/** MySQL hostname */
define('DB_HOST', CEZ_DBHOST);

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', CEZ_DBCHARSET);

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('WP_MEMORY_LIMIT', ini_get('memory_limit'));


/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'k:QUB^j;T@)kfFVKY6qy{`GHzN<nmQEw+3*)5c!Gg+HES$9dkf<$JA/w$QYJ');
define('SECURE_AUTH_KEY',  '5A|FkvvHdb_ZE_dAVMk>D(j#4.GH,RWU@mP6KHhfxJ%C/ynRcP V(Ct:c2Ey');
define('LOGGED_IN_KEY',    '4Sr#)S779FNGsXv,[C9SH)6Y@$(q/Lw2 *n8;x!cxk)[$(VHZ*yEMv7hh;*+');
define('NONCE_KEY',        '@2*:*+f#({g;[ 4bMCQbxGx$wBgtC}ED{XJYd|@c_BuQYyG;YEP]d_pAKju%');
define('AUTH_SALT',        '+XN .(,xW:[:|L2e8]H|;d_Zs6]MV|DQ.Hd]9UU+2}x##rCM Pznj4hwPBy.');
define('SECURE_AUTH_SALT', 'gHwcq2W{7F++K$:r>9AFLD6(4BzmtjNZ%Ry*6Gx#1%;bKv/eQ>+@b$>z/G_w');
define('LOGGED_IN_SALT',   '/Qd{3r}tX`(Yky!LT_L[Gv0e)Ca3PUW5120cg[5C.B5,G3C+umC4HQppfPAs');
define('NONCE_SALT',       '/R,$LU8)@zXQsv|<3g;M`gn+JFe43]YSW/*+AF024SK.,qv[ksx;ZvKeW0Gb');

define('WP_SITEURL', isset($_SERVER['HTTP_HOST']) ? (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? 'https://'.$_SERVER['HTTP_HOST'] : 'http://'.$_SERVER['HTTP_HOST'] : 'http://promohub.com.br');
define('WP_HOME', isset($_SERVER['HTTP_HOST']) ? (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? 'https://'.$_SERVER['HTTP_HOST'] : 'http://'.$_SERVER['HTTP_HOST'] : 'http://promohub.com.br');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);
define("DISABLE_WP_CRON", true); # CLOUDEZ-WP-CRON

/**
 * security
 */
define('DISALLOW_FILE_EDIT', true);
define('CONCATENATE_SCRIPTS', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
