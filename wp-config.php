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
define('DB_NAME', 'wp');

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
define('AUTH_KEY',         's3T.O3:I*)s@7]!P+[PC5qN{z1ymC=Z1WlKOAEjd^]>i#^/4zE8;EC[t/t`xJ]hj');
define('SECURE_AUTH_KEY',  'eA_(OkaOCF @*@$AX4:79|U1jFpbwui)iV_z9(]*K5zw}Lva|3aGQ^f7~|sb=Hq!');
define('LOGGED_IN_KEY',    ')o@yZ4l!084WhhUaq1/I<@pGnE8BSXSA}u*gB`12r]t;j`% iM6-b:Klsc L:(1H');
define('NONCE_KEY',        '19z:=9%gf8nkx5/9-~WxwbcSe*!x?xp_W4`@:<KL!x{>[tw41e_uvp$`,fQ#/#,f');
define('AUTH_SALT',        'ZB2BlVS>M#D;TyT7:BOq02g8OtDG@c&lx34e$5f[CnX?$7<;u-bCPw_H]eDd&EUs');
define('SECURE_AUTH_SALT', '*k6;n<J=,$rMa@ jK!e/B2wPcTdGKE>tn8J8MF%IU&5<p,p#fs;_cb%Z{wdR&zHt');
define('LOGGED_IN_SALT',   'SB_/cCm,%?#k,$7ux1X]6#_!@G5{uBr&:}w7WHG*Zj<^+v r-<(M(RBq?$!C6$$.');
define('NONCE_SALT',       'v%bn&{v}w05`xkKY?D_b43|Y+f:}h#,)2g.su5$_94[REn:W>*mugw4C7Fu;I_M8');

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
