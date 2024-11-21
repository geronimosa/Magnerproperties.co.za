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
define('WP_HOME','https://www.magnerproperties.co.za');
define('WP_SITEURL','https://www.magnerproperties.co.za');
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_ehnke' );

/** MySQL database username */
define( 'DB_USER', 'wp_bszfg' );

/** MySQL database password */
define( 'DB_PASSWORD', '@devaj19$%eT_1RL' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define('AUTH_KEY', '[OKlX48]4Ao5)whs*_d4(1qC[5D1_J/76-qq10e0bsxDtg2Co*3V:W4a&xPTc66B');
define('SECURE_AUTH_KEY', 'E~AQj**[Z@#lg4S4g82!9qR5]I8jC03JS88#J60Kgj)PKB+M9eCtxu;]80D(3dAp');
define('LOGGED_IN_KEY', '8#30qI-a(h7y15/wj8M]2/&)Ne-+%NS%S&FtnaLz04s673048/CX1-930/m-4rp4');
define('NONCE_KEY', '/8sJYv8(87aMQ7@UtG36:34R2&*d;Mgd/1dgRjP2QJ;i41N0+2SyMN17B_T-D7*)');
define('AUTH_SALT', 'G+N|1&*apB8(/_d:axA!2y3c6zvF/~7;mRi4|-5#9E5FF33Y4lQ7/AaHKd1B(!U9');
define('SECURE_AUTH_SALT', 'g2-+wZ4jL24|V;*y6bCdI6r_+cr540d0]kT+0ptIFT4K07[%fh0m(7H~VT47hm;U');
define('LOGGED_IN_SALT', 'm]PNoD65LubA*[z97l_n]AXt3l2)75~00#Q!CY@0t5874PC60(j0mU4@NxpSIE0B');
define('NONCE_SALT', 'W3eigFS|1A)+59AU-8r7Q04vd~OZp(:7!+:IWt)5w6C9MyBn:_D+-QV4/G/N|@25');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'YsN3v_';


define('WP_ALLOW_MULTISITE', true);

define( 'DISALLOW_FILE_EDIT', true );
define( 'CONCATENATE_SCRIPTS', false );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
