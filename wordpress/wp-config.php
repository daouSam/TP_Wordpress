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
define( 'DB_NAME', 'db_word_press' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '5,N8HG*/gE`!tI!$R+Cw<D:!|X**8Wt_->HjW6{=hT9d9NgGqb_qt/Pw1 %;PDWJ' );
define( 'SECURE_AUTH_KEY',  'qq;p`&QJ$z8I=V3Dl@p/;w2|OW^SQghO&bxa3Z/t@D4+(}[O9dX~6wuP}cG#EN-T' );
define( 'LOGGED_IN_KEY',    '2Z7LBTh ^?7X8{`,0hFyp>Z.GaXp4l1lSE}%q4Y^HiuN~|T%S(=^8Pw-f=s&xc-]' );
define( 'NONCE_KEY',        '9Uh3nsW_zHb%%UcFhx^1ipU3||Q?$RH$MY.vjSQAg Bfe.<jI{v2?,T@h}gZF7xT' );
define( 'AUTH_SALT',        'bLo(bL!MQ(m1Km`|7BzTC@t,C%h,e`}@!wXVh.m(srqcS%WCSA@!NYZ5T;4)`- <' );
define( 'SECURE_AUTH_SALT', ':* gP#R,kq[&) (?yw3>]9Za~9vZZc;i.h?;e]|~yZ,/?r=M^EKAIY,q,i>fWC Y' );
define( 'LOGGED_IN_SALT',   'S$FOBU*F,[Q(x11CeW^b].m-(%Arv?ArZso0CSyCfinxDF%1=Qrdr_+5OpMHoZkT' );
define( 'NONCE_SALT',       'VL{I?=*pgEos]%s>*ZeB43>X7Y&u)>>Sbu4eEgnWV3RqW%35kC$.^v((r@R%H$BA' );

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
