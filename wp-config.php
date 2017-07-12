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
define('DB_NAME', 'sivaflower');

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
define('AUTH_KEY',         'qBo@ag{oOr)*:}}Aj MtE+dT-]h2TQk>A^(o2Ys)n5J@2!+vrO$6.MN(QEc$*b(8');
define('SECURE_AUTH_KEY',  'G| b3<f2>%r`|622f0H/(IpW1]CRdy|E5]{IGlvlQN-H[BpbRPFr#Hvf->^}7zDk');
define('LOGGED_IN_KEY',    'mZY+50C`<!~b;#yL9r2#`%eJEC!En6EHoc^N:}}fWc2]-))03zzIr&WLx6@t>N@E');
define('NONCE_KEY',        'Qh@piX/%bf<Dky?oMBh:f 7HTF#??xm$u6?AhtY/&gI/`1@_qB_]G0`R+$hT`g=a');
define('AUTH_SALT',        'k>/_gI}fZ?TCqcSwPoZb7Cp{MO0aE4 +n(?SES/%,zK)Ju)+6`{&BOn|?%G&gvg:');
define('SECURE_AUTH_SALT', 'GTVt15$<Su:c9iAg~P}a<`H%JebH)kiX51ozS=G?)tDJ5J=lC?9){%MUHx:.<QfH');
define('LOGGED_IN_SALT',   '%X`$OGqnL_Vf7~{|$D7?2{8?-:?)rm~1.pk:kTf !h$hi3p(&Eos7=#_`p8$N}5T');
define('NONCE_SALT',       'z}EP$CZt->SD@ai<7I[yAypG8GKj+[G{OIFEmZ3 Zy L.j@6R9sU$$pawD2[57:s');

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
