<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'webprojectdb' );

/** MySQL database username */
define( 'DB_USER', 'hadi' );

/** MySQL database password */
define( 'DB_PASSWORD', 'yes' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'zCK<!F,:FQ:JHl:/Jy.<g5]_4,qC9&r|c*U9(A4cF;_jph_DHCVPpm!GnrVgHWM4' );
define( 'SECURE_AUTH_KEY',  't#f:lrc:&5<exfoc_sD10GjdYN?`N}#MKS9]GqGE56}92ND 0y&aSGx^<*W=ZDzf' );
define( 'LOGGED_IN_KEY',    '.`z]W8<p!/g4qPWzfY,82m^&(SGEAkZ ,VU_+dN${^mp8P_-3U1Z*iLHA:=ruDtz' );
define( 'NONCE_KEY',        ' ,1RXkA+FNFHODhBtg8phrkvv}J3!h=(VgfpFV 3X]:!w5`wNN@eG--<2|[;wERk' );
define( 'AUTH_SALT',        '&_gp^5Y73wNQ8_aRjt2kY~&E`ga/&@a&i+n?|)(UyqsW(.]`1{GbQJya*cC@DWdS' );
define( 'SECURE_AUTH_SALT', 'bD^->bR4>DfBa}q}[ys#VJtgcCN!y-&fYS{y=IqP)pzPdV>-gimt_,/G@wFPDV$8' );
define( 'LOGGED_IN_SALT',   '<!]V_[TiBEMT@KQRGGkQ0{bs?}+v1;Fx*_1n,Ssu-&7xilaU9vyM1-yuOXQ`#zW)' );
define( 'NONCE_SALT',       'LM{3T,5,VYa,L.3o~BRcA$0sV5W2Y^t;VOa^L{PI}WM2J075Y&;t:*MAM?qoT[,!' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
