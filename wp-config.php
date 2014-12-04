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
define('DB_NAME', 'wpdb');

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
define('AUTH_KEY',         'Br?b[]`]#D|o4|dw;Ec#~]S>5 dc1%mi_Z96ykNn,hRG }?mGM-[/`Oj<&6<51hC');
define('SECURE_AUTH_KEY',  '3|JzLTCOAk{lM/#oL.ZF]}yZAq6?n*yzMDp,bMTS,)h?Ovx8,Yu|tqvc;X.g{W+ ');
define('LOGGED_IN_KEY',    'Zk]&[Lc|yh=w+-.%il|Gmk|70w2 3Nt+@UGSu3+rKkqU]tj)C,^TM14.1RUcAB=p');
define('NONCE_KEY',        'OM#Z IKEIoKrm/^I&qQ|^@z|^FU&{@Dtl-+o>d_$Cj)VO+/y+LIqHt(e-x}$ade@');
define('AUTH_SALT',        'HNY1$xy4q,xh1zT+C]!R}zs fTW#9Xs5%jQVu:]g++%|=-Ab;}cEPFq,:k@P8yh6');
define('SECURE_AUTH_SALT', '6$zJ,j3RwGkF?=FdJGE(^|WQ1xFi#h}+YD(b.zjUnFru}Lcj_lp=NK]N]d9V[*mu');
define('LOGGED_IN_SALT',   ':~}TLE}0RXE>+%#M>jbP@6+D@:>NMMY7z:WB-dYz{Yz=8^-W9E9zEPtLZ6MEd4+o');
define('NONCE_SALT',       'sj`Io&8vhkaup{:Yzdi|c/)}*4.+R8|d0=P9GS/H4 /#JfF|JZOc7d{GBAc2E;|j');

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
