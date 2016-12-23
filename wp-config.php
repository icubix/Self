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
define('DB_NAME', 'Self');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'g];zPIqLwmi/0.-4&#vQ)W<~yXk4FM^():B1+sKAjv`tMoiu&5^kve~]IQ>6QG1?');
define('SECURE_AUTH_KEY',  'uxFII|jhL$J#6eqf}&%~B~a]f+Dz8I[|)Ff&X#vetu-S@K7dP7fYe LATJ%>I4JA');
define('LOGGED_IN_KEY',    'M_!_e&Df{Exzj,VF7QyT_T[V3H=9%7gYgtQ8|sCs8O77*5e(HJgs:tL6)m1i[?zq');
define('NONCE_KEY',        'QkB&WhHypJF`N0dS0mL%.r2QUHhRBh>EBkjvd}:S/qjFRD;}+dv~Wq]y y5=xE4o');
define('AUTH_SALT',        '[zEW(eNP@PQYP.^;Ugymx&Ql~ K{ykMUt2.Ue@/h+O8cd0$GL;5+z9FyTn_U[bth');
define('SECURE_AUTH_SALT', 'Hj:mO#kOeOD&z}G)#p{2E>$lE-W6xc3EAE3bS2E-_*eyCCQTP|&pBqcJP2!RP9N1');
define('LOGGED_IN_SALT',   '!JB{0|fH*NCjs2+,;iL+7?X_bY&o8DznERpv{!JYEkj I,#yScpJq6VCw<d8S9qb');
define('NONCE_SALT',       '55pGS&CW1SZy/+em<{V/OMX)9[vEpl([Y:8aqB+7!|y%HukI64`}@8E)X6xJkAz/');

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
