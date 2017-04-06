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
define('DB_NAME', 'wordpress_db');

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
define('AUTH_KEY',         'n@tf+w:}kbX3tJ+v&E]GGuS~bEaE+T?R;<ezVTxEzX7}H:XjrGU`vxgR:KR6X/O(');
define('SECURE_AUTH_KEY',  'hx..q7jZ39@v R</ohkx(y`WeQ/^$FAIe<~t=M^Ys.xcE;&V.53d8z|SMCi%taP:');
define('LOGGED_IN_KEY',    'uS+okst0cRR:&?CrqHb$$NdSP@^)AZjHr{m>p|&P1sap4Pm;%)Mf.,?;;Cj[Cg,A');
define('NONCE_KEY',        'IKPiv F?8#sF<lAO#t?zVc?F=hZ%]`B{>_]pC8 *DB>_%~<n<iSChJ+XbRo-#TOr');
define('AUTH_SALT',        '(H!FQ$uXZd Csg89*d.C*$vg$#I]2]M3$G7QBr?.8Gh0FQLpxt!ZF$;;jewuSaMP');
define('SECURE_AUTH_SALT', '$|+$&4wm2w PHM`d_;p*:rvWFKWH^5/is{$%=_P%$-*W @T9=Y1m0*uXwe^KR;~q');
define('LOGGED_IN_SALT',   'i6tD Aw1iLW%nNw/$:P_Z_H*Or0JJ)dLH<r@nNf=B2be)<Zz3F zJe+Z%>t]b4x2');
define('NONCE_SALT',       'i0@rNcZ8SZW#l,qkx:cHiNWcMZRE4**dS$-]qWcB.d1io&PVd&i@vQfO0x{*blnC');

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

// allow dp repairs
// define('WP_ALLOW_REPAIR', true);
