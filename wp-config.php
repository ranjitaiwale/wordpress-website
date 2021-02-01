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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ranjit' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'l0k]6Cc5Px5sY|P`])wL@=TrD,lWE9&`9u>f6m71*Muq>eD5/xyUhP!W]s=9BH|q' );
define( 'SECURE_AUTH_KEY',  '.:cv7pIGD)Ax3obl*n]Q~hgdh}u#q)2O^,RD@X$Am(x#>I;{>mpgo=MF/j%iei[/' );
define( 'LOGGED_IN_KEY',    'L$]J?+{Q.jW8v#~de):[/bY&zR4-@FZO*>$)a/4c.KAzS`*4eL?T$f=&]A^E 0UY' );
define( 'NONCE_KEY',        '%dpIbT1*C=SN3w*sHP|{5A$n! jOEl:7,XZ.Kwi?OnKUC,gbv;zQiU$P[Ij;KU`S' );
define( 'AUTH_SALT',        ',?)U_M<o|e#cbZ`mllhPC2~}?$P@VH!tigbI?],-b{2?mU839/J9*m .q(z!15IF' );
define( 'SECURE_AUTH_SALT', 'Wz*R;EnUel<=^C(Dzp_[G;O?o_)J{NCgAz4mUj:z<R)kOm$]oZ8F!JZ4]myRnf?k' );
define( 'LOGGED_IN_SALT',   'T#oh)zoy*p/C5Sa%Ts4|q.Uv0y5M/rA*^w*=<Q7n%K-K-ZAV<nrvt)Cczo58f>zk' );
define( 'NONCE_SALT',       '[V+bpRa<^*L1R&/dxSEvM@>|m58OE69dVb_#78?QDITmE!Rz69ZZ=+bL3<&}QG*@' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
