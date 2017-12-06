<?php
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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'midlife');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'Q3o;D~ZmC_G#jZElHasaT7ArN:KDPubeAF~Inl1bG%;544~ d;WE|-.uSt+bFM8p');
define('SECURE_AUTH_KEY',  '<zD+7%iTy-nD=s30wH9R6Xd[X%w_&F{4?oe^m<6T~<wexBg:,`:*O)qyyY=,mAc-');
define('LOGGED_IN_KEY',    't2yYAfQmJR#t@;f<7,J1SW4~P]uZHBL99Ekd4EU/Kny%FzU`pgy~,<9$)C_UlX)N');
define('NONCE_KEY',        'mCR<O2t0vFlM<l~NjHHr]|[|#6Ta^)]dE%~91@cavol RBQuwm,yp }Monx2O-7M');
define('AUTH_SALT',        'v:QC8u0%&+9MOx9BFbY#!~mxp:x+UO57JN/+@ZjFVE_6;-eb/=X#wWN|P]3N4Y#.');
define('SECURE_AUTH_SALT', '/[D>&=OpSs_R1K%zSq+D!8){g3m(Cu1/9XO4IV-&;;y?@%P}j/31KX4G}?#lODMW');
define('LOGGED_IN_SALT',   '5*R.P(Km{T4%rTci/T^x=c7.zTA=WvF0fL(RIj<?^1Ax(t&98 %AG0a2Lp?S@<h?');
define('NONCE_SALT',       'tbgmqG{_l#Q>l{bxE&4`i W!_ue.yd0[6BWUNW0f;/%95J!0w} kfDDu2fZ@o%z!');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
