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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '-{7EFQMIb1+91v-;^8#-NE~&;Z65/nJ}[Ogk=CF7zwsm=g|pqX8LcaFQ$m(WEHC#' );
define( 'SECURE_AUTH_KEY',   'TKH{17*1k(_azx:@t${93dVu,zhyt_<tny-#s)QxiDdx/<EDSYB10o&!tz3v|VA]' );
define( 'LOGGED_IN_KEY',     '>-;?dCxFzfIHa71N70`/nG`Q^O4DAQ,(n6rSBi%IKuq+i`rC<?Z$f7 {hv]FSDtu' );
define( 'NONCE_KEY',         'Q>k~VIeTE6!&cLzf:6W&KRbH?(WDj[%3{_xQqcw$6,Iyd.s-gI1^<g zK9D0olYP' );
define( 'AUTH_SALT',         'CNS!QnV`]3=g?N(NW;w}1;(=C2oenKI^Gs.p3d xge 2BUJ](*2Fd;6{>?gU0(s@' );
define( 'SECURE_AUTH_SALT',  'F uMHOsXCsr1_X%Hfy^H.rssNHa#NvH:LMowqE!h]ocQoh8ofnI$k3mW.>2)Joz)' );
define( 'LOGGED_IN_SALT',    'FU<u() o3yekl1mD=~g A7fA cvTlVDO>a7,yDI3Ymo!-k/]jb{k5k C6J=}jm;b' );
define( 'NONCE_SALT',        '7gk*1a3H,t8%OA0|x_lbN=Blj8}TRSEL7-c1a[`qZ|sxooq#;5`!!9O<8TGp!Y^B' );
define( 'WP_CACHE_KEY_SALT', '~5.X<k <,!)A7:IkzfK!{7Q{m5DEc} wk|W>0)DwHxgkt@Tg77V1QN~PE!U~TK!6' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
