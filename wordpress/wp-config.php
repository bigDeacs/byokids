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
define('DB_NAME', 'ourvacat_byokids');

/** MySQL database username */
define('DB_USER', 'ourvacat_byokids');

/** MySQL database password */
define('DB_PASSWORD', 'blade123');

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
define('AUTH_KEY',         '}~57WX@j8zP?Si(.M[l!00r6s)/Ue`NWs $ww,.D@(B^om!c_+[.{[,jHtgw8cx+');
define('SECURE_AUTH_KEY',  '0L@DC<TPf>||IAP7AwES[z7zDD%0l,Xt%A+mV0d4n@AHN(?A}s= FKc8;$/+HO.3');
define('LOGGED_IN_KEY',    'X/n/Wy.p H{4!g,/C$PY>4%eKy&dn(;~p`hnd]DhAbh]WSzwIio emQ@-z>cOJNQ');
define('NONCE_KEY',        'Mr*!]h~t<eFx{SD+JxLwY3~=ye?.|;dl-)P*`kD@6x2Cxbu_U&(|Cq{[[2<@cMl+');
define('AUTH_SALT',        '~sHT1 U-=I2YP)RJvE?q_HnSzx<`z$Sw?bybrY2[biD1<v5,bfGRJ6 6uII>oc^e');
define('SECURE_AUTH_SALT', '?VQo<4td`@O4>jD}BdQ0~/Q^):U=~~feV_5%d?w]=(u~D6$+)+8=Y1vni7EnYJ&s');
define('LOGGED_IN_SALT',   'j}DVf:{vZJ}pG5o G.KY}]Tc%Pp)}_$G|%s?-7>Q*r,y6_-hZySvds2ayD<_DK3p');
define('NONCE_SALT',       'D%N4X!w-<VA$W6{xQ^E!0JH i3$4*Z`ZKJ3t.GX,tAAO/.S&Sa7UVPXzfAR0t,0*');

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
