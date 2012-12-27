<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'db_13a6c8e4');

/** MySQL database username */
define('DB_USER', 'user_13a6c8e4');

/** MySQL database password */
define('DB_PASSWORD', 'fBIAOOz%%DH0v9');

/** MySQL hostname */
define('DB_HOST', 'a.db.shared.orchestra.io');

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
define('AUTH_KEY',         '!R4&Wz}lwcm@~q#afC2NBQG*~k}Rl_ ]~`L&mFi_UBON-(}b$8g{;+[+xQx$R-}|');
define('SECURE_AUTH_KEY',  'T7cU_Dn+LwX*s4o@JQ3GwN3@;~>FHaTnE#+a2>F:|4:GHlYhzL^-y|dv&iT~<5D_');
define('LOGGED_IN_KEY',    '/!#ef&T6cQlWDa.s-.X?hT9kU+TzvcN-|IvOa9ZkF){+?u?7NJ~1fKms,^790!lK');
define('NONCE_KEY',        '-]dZ5-`Pb Pc{sg<[n^kh$U*U5=p}V lEG#f_|5X$H)l9<P1j6Sg{0~|GY]&rT!h');
define('AUTH_SALT',        '+<S8uA3|8e%]*};a|#rS:ZvxvkFC2ln@.]#y_R27Q1-e8+*ceSzk>*8I8flnjUr6');
define('SECURE_AUTH_SALT', ' WgPM2ukyj*bb|P <(2pTg]c},(fX93;|E?s~ah<N -f[[8y]45$M-Z/fP+=>zqR');
define('LOGGED_IN_SALT',   'Y!r&5(SG&pC8<F8]j|#Epz*D7Iel`8*=3,]Vli=r2HnOhvKjZ<8-2||;E6Rz~xY{');
define('NONCE_SALT',       'sAKmBq1vRF>QU1fVVrniH|m9Q94j0bZL((k9*@`.>-(D>6PPo!~f$=`o/edX0#@Y');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
  define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
