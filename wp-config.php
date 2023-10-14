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
define( 'DB_NAME', 'learnwp_elementor' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'ke!}#Cf2%hYQC#:nv%rBv~ z,rQ]N!Nb0oM1_~LO~Zaam2}c?(A?#S{{l+Fa0&~4' );
define( 'SECURE_AUTH_KEY',  'J77|:qh!9Whd5!RrP{KS&rsdKqZZcC8*vCF.TpfW^[O|K)b-Gy0zsd@h]V6sU6b1' );
define( 'LOGGED_IN_KEY',    'UGnkvp0_(W/ vi|Wa:p6JTz|`1%x_;h;ty*ZG%40Pyx]ZBwe;{;M4y,tR`V0{2-+' );
define( 'NONCE_KEY',        '>^9PFRIu_8<QW;FbXuX:&Vx{?wd{((4elEv^}>{g|hGKQ)31^$6 #zoVIqMZg#;v' );
define( 'AUTH_SALT',        '(ZF6|RrCR:IMf*K%)zg0~;WFJ|4BY./n=iY #gR<&_fo<G@jaW4OpTf)pruJ7SZQ' );
define( 'SECURE_AUTH_SALT', '|&4be<J)!-]cEWL0HOo:ix!dHu~{PUpDqTdh)Yiq#Oik<r~L6|duT50@i:Ae`m V' );
define( 'LOGGED_IN_SALT',   'FSzFSG?fQ[-j&6*40q8wzZHLSydO GfoJ}9Qt*1UD16*ui55adb~]&=jNcRE/] 5' );
define( 'NONCE_SALT',       'Y?p+~HS*tiaXhKxP`t:s|PD0EN4r}tT^G$PFkZRe9~3_0b-6lNIc13OUZ0{rbhiZ' );

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
