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
define('DB_NAME', 'projectx_db');

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

/** Enable Adding Plugin locally */
define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '}}nYtxiZA:`8=070J-C~$2?_Qc:V{%qC@(2WF((Ba[pP*MW7ur@nirdm>jz86qsG');
define('SECURE_AUTH_KEY',  'AdyjLriSM-&0(>LX~|g],>e7{xy4@g6Q%}20KzZe`X4,B204_v?.CsFii6:B2%Ea');
define('LOGGED_IN_KEY',    'O=Z N|!am{&7wMZb]iJ4_]K-h:78wSjD}N+DLA{W]IV Z->#wNYQeu~;FU5rz7s+');
define('NONCE_KEY',        ' Yzy,`6ijC~]3G{Sj^(l5p,E53lM#cX-~Fq>+>$9tqmg=q-RvZ<PDUP)coF~t>zp');
define('AUTH_SALT',        'aHQJ66@d8:D$$&S2#.s9xKq3~etD^XILJ}*HkXiIpa1J]6>)ZN6($+Fcdm]-JN>{');
define('SECURE_AUTH_SALT', ';`k?S$^[g`f}Yg;*W9O.`)5ZkQey]1^Kn?nJHQ@85.h1m95f;G#jD0xayw}JI!SD');
define('LOGGED_IN_SALT',   '0_jud`KM:>&kE[?$V!)%lcGwphjxpL-%B)FRvfm]b^q&n>J%K A<9_;Y$I$54o=D');
define('NONCE_SALT',       'Y2zvf{-ty+vk&-;;Rjw3jc|5Dp^U4(1{YYq1gX8&K];wFbtJ{;lWtSL^oXz1]d(]');

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
