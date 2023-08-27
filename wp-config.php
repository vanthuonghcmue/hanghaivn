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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'hanghaivn' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', '192.168.139.128' );

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
define( 'AUTH_KEY',         '=x[I2+1e66,$ZtC>ukFcJ;u$ ?z+;fa0kz>lhdvp/S|aBL0$WZp9l$;l[nW}wbE#' );
define( 'SECURE_AUTH_KEY',  '<jfW]vTI(u1v6I!Hv-jOOPIC<{->h!*z0U*C(XPE#p} [uqJOm;p=I?F3MWtiQp`' );
define( 'LOGGED_IN_KEY',    'Y63FD5](;P5<@e-^w6FXfbpHrfG6#q`#H@XsO+&_%TqdRsN9C~BT38 0~KL;!FMR' );
define( 'NONCE_KEY',        '= *(EPK>i;lB73 /S>8h9~i3R;!]Pm[[}t-x[PFD(PJ7Huz}:h9X;WY]X*1dvCRd' );
define( 'AUTH_SALT',        'R<-NWz35xL=4Gq6ZGb4YNaw1lol-A))W0 .+67ujSTi>dI|#=&9;v)2JW`aYcX?<' );
define( 'SECURE_AUTH_SALT', '}0;_KNbl{W4fkQZ1nrU+98y]7f-c.5_{O(7W6HUv,A4_n,i:Dmp4&*P.>>tXg<,6' );
define( 'LOGGED_IN_SALT',   '}{bWNF+1- zUVFr(chho;2ft>E)nnDU,PpU)^,,BR/H~&8v|dB8F7$@~gPwP#`;l' );
define( 'NONCE_SALT',       '$nk.*O>h T:{iWzrA[/N:&/+18S_64oBye+An/GqV~infYs..Ua E|#axCs$*RP>' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
