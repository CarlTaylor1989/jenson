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
define('DB_NAME', 'jenson_database');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'wildangel123');

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
define('AUTH_KEY',         '=,kv>}yK+P1-rxT:D L8sffsVp=xt77SixM!<GG5R[7>.Tl+7@Vd@pVKl3OR2q)H');
define('SECURE_AUTH_KEY',  'RhK2i{d-/0 GHE:?{udpC6E(6ISWk|kE4O;mM*B$a[vuHZX(Sf^mEaa!De<OgX.o');
define('LOGGED_IN_KEY',    'I~V)FTnnzYT$i?H]H_0mU]bSX~dxw2y^ZpSs[UI~<b#/.?K-otbbOIjn1i_gQ~jC');
define('NONCE_KEY',        ':+CJsphgssA+P e|VfVt3D$AN6Da<{HAia|g~gP)3e+:3OBMo,+#v6n-)hu$O(|X');
define('AUTH_SALT',        'bsm>N|KD?C0NkwbJIHov!q[m?v0j10e4PSe0q+wkPuA$tjE$}WOF6;,duPK$0G]@');
define('SECURE_AUTH_SALT', 'Ob.,Z zlPf#hh#f8)7]RhbJsJRWh5hf|!q]QN/l<gz)260|#nCoB+TYYfgB5#a2e');
define('LOGGED_IN_SALT',   '|2t7YUvqeNGDF|p4tYlOY0.n;+QB-5L@@ fx!t}j=)5A[^h@@-}, R@!S*~#Es?*');
define('NONCE_SALT',       '{0D(sJ{(T=O^m)opHA/@D**pvOBwcKX)~UMa4?2GZJ<L>op!#9Q.-cLEHV9oSwwp');

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
