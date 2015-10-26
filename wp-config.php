<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'dpm_wdp');

/** MySQL database username */
define('DB_USER', 'dpm_wdp');

/** MySQL database password */
define('DB_PASSWORD', 'rhinonfx1258');

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
define('AUTH_KEY',         'fsT7[Lxgl-q~!+$[zkgb,Bmzv+xtsv-Gvd[v!6J|_A^yTwz*#-{tH-y67a>9Z2e8');
define('SECURE_AUTH_KEY',  'Cf~-=U5ta#84w)0]0TTbh:Ax3%z2WY>PCF!p&>a4L|Qp6`&-,L8m;e>7Z6x3xd)c');
define('LOGGED_IN_KEY',    'cDLBns/#3sIS|N3U D(Bov52`>k[Bh1msx3,aw|,-)K;XT^~|uG!M?C<::IGGMeQ');
define('NONCE_KEY',        'H2#.:a `9BRBb{:u#RIU:-*SHP,A=-|zqRh6:tv`~NXiv:bxi-R%t=)h-%tF8?*f');
define('AUTH_SALT',        'N-_yVJ/SWJSx13kt&}TGff4U>02PX_yB{5@fr{5QZLy6h7Js|]ZYwA%%nqfGASQx');
define('SECURE_AUTH_SALT', '@A/(l@Rz|nG eh^u]4h$|-ys<vUMhm]Pzw{u(]{4(Ars+]Gy=arx),OJ6<JT^.$P');
define('LOGGED_IN_SALT',   'tPvDph[CKe`=jKp(@Nr>B+:ls[fjDOPtC!i@Vo~XB+H(=Z|n,C~lN:I0;|m!d_A+');
define('NONCE_SALT',       'w=prB9He)B%7> ?fMNz.,l,z95{H3!t7kd2^iU,:x-+|,KajU7m/pd-GaI+?$Omr');

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
