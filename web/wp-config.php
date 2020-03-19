<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */
require_once(__DIR__ . '/../vendor/autoload.php');
(new \Dotenv\Dotenv(__DIR__ . '/../'))->load();

$host = getenv('APP_URL');

define('DB_NAME', getenv('DB_DATABASE'));
define('DB_USER', getenv('DB_USERNAME'));
define('DB_PASSWORD', getenv('DB_PASSWORD'));
if (defined('WP_CLI') && WP_CLI) {
	define('DB_HOST', getenv('DB_HOST_WP_CLI')); // A work around for laradock and wp-cli usage
} else {
	define('DB_HOST', getenv('DB_HOST'));
}

define('WP_HOME', $host);
define('WP_SITEURL', $host);


/** Turn off automatic updates by default */
define('AUTOMATIC_UPDATER_DISABLED', true);
define('WP_AUTO_UPDATE_CORE', false);

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
define('AUTH_KEY',         'U8y:|#TFN{T.L(+zk8pT&$tjuP/-,<;wW_um5Q:$jqJ]w>Wz#w p[Lmt4W|ikb~3');
define('SECURE_AUTH_KEY',  '^i4|$cmmX.nw;P|{-U-MB`&k$odfU0se2/6$}r07*7_6l ?kdK>QKC8$Ux^&? s-');
define('LOGGED_IN_KEY',    'w`1)$}*wn*dHk,EJh`aYahMASo5+Bth2FNnigq!LYH%{(Ns(0/zC;)R_0`3#@|T&');
define('NONCE_KEY',        ';7k`<{|&-<-0lrn<).^|goqXmAXWDsuu(t])%w/N{RP~DFfBPT$K]5UpF{y_yj# ');
define('AUTH_SALT',        'O-]EP C34D?#e r]R(X~&J)=pl4mG [vac}Hr^]{T4`ou+3(574&UhF >_C6skOq');
define('SECURE_AUTH_SALT', '[U>BS3-I#a[PH{-M}vOjq.N,NE/-fm:hq5,+7w7lb-~=VU=[{H>:zixx%#`Tl*6s');
define('LOGGED_IN_SALT',   'po3$J#!Q!*;9NOPcZGCXA_&196)Xf?fu+l-OFhV&6-~-3K`Gj]8v^8vhA*!uvj1[');
define('NONCE_SALT',       ' tJ]{N<1M|BeyY[.u^CP1=nS?jy:=UJ;}t9K-@joxQt `-gG mS-EvhUgych|Jkj');


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', filter_var(getenv('APP_DEBUG'), FILTER_VALIDATE_BOOLEAN));

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH'))
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');