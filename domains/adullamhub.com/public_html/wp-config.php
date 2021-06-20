<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u460895145_YBM7D' );

/** MySQL database username */
define( 'DB_USER', 'u460895145_onh8a' );

/** MySQL database password */
define( 'DB_PASSWORD', '1SgQ7OuZZV' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          ',G#N~Xc(J6R`X8`YxaB0Id%6j0!UDMG3__UFjdK_t2)2]VQy-h*^)!t04vKZA+{(' );
define( 'SECURE_AUTH_KEY',   'xkuBk(ly!v*wYyjx3rZ<*QRq!I,}=.hnPZ^!Ki,{Y(T;5=g=]l Fr,j{u><*nX~w' );
define( 'LOGGED_IN_KEY',     '^K3J.}2]0SG<S#5}cqUlJKnxrwI{&,|=f{3DRdzNtH`/(cdqoJYZ6G$4Zg$H]ILL' );
define( 'NONCE_KEY',         '~l$)8Q]?9FPMttHGW!N]o-1|,(jESvZp8o-B%(}F$(5n[Yl~S|g_/R|Jy#CrF.@6' );
define( 'AUTH_SALT',         '[{0fPXfr07z HDXR,tgOsEo12H24:N#WF+ @c=>X^RCy81}3l{5ad#p{cS}/1G=$' );
define( 'SECURE_AUTH_SALT',  '{]^odpA;g7?K=on3G,1F]96r>6G`~D3xHHh$_Y|27C=H}2h6o<43M-d{tcl:T.ID' );
define( 'LOGGED_IN_SALT',    'W>=v_`WT~R*Gd;s-)J(43YH;vT}t5.<2QqnU4&J#yEh7WZR_?)}-bWe894^3OtsF' );
define( 'NONCE_SALT',        'e:@obC.ErBiyYCg-dwKMk(O.`V%gMcE8+C||MsM?^j|etN<hwgoaZkXG_e}8FfmZ' );
define( 'WP_CACHE_KEY_SALT', 'a<{;21w_H+BP*jU4,Z>MmwdmSW?u~9IA?KR(&rH$UveOUHF|tg)*N<as4g%Ck7JN' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
