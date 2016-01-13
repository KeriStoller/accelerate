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
define('DB_NAME', 'accelerate');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '9+HLmP{4W`HNuRO2@D];$K@6p+dXSxu/Ue+jB8|8=bg.rP`JSC]e$4l*TKw;7z _');
define('SECURE_AUTH_KEY',  'X,tMe}mg$a|dIXEJ^%=v{Y*5J36^+SoeI@@S^)7D]7eojXm)CZ>knv|PF)1M#uJS');
define('LOGGED_IN_KEY',    'juC!p/+IAElai_nP~zkuK?wc8W82dr=<CZWNvG?w}T vE.,}#0`[Z+D^*ZPEQ20g');
define('NONCE_KEY',        '-n_(0&q2]}z[B;L79M8U8EVK^ajpZT586&C_/{tE6 N0alY/vAmZa.|4Lg][zFuB');
define('AUTH_SALT',        'o:tfju,?4E1%D bSwU{NpGd]yI1])L*kS@+|F2EP.wc6-R(EQ1e~)7p)|>*xa%|V');
define('SECURE_AUTH_SALT', 'PUdY16/+N>[E-GoG)]-|zc.*U-k`{P]IBSg?diBq&XGc|T&S(:U*-9D[ReTet8/M');
define('LOGGED_IN_SALT',   '^]?584#0)~!v7iwqf6H)|KTS}6L!SUqVuSZAYKWTpD2Ka%kHnv}dmbb)[B*|F+CK');
define('NONCE_SALT',       '-vW]([Ute:I=o|Y-h|nDI,pjV< Qr8MWfaJ00P#8}XMgHC>45nU^rq_;bD>#1X+G');

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
