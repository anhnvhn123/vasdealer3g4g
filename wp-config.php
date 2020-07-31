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

// ** MySQL settings ** //
/** The name of the database for WordPress */
//define( 'DB_NAME', 'dangky3g4g_product' );
define( 'DB_NAME', 'dangky3g4g' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         'NQB^VpDEJ#BVe3E^[k(V16vEcF4UUH0iPQb[Wq_8gBo>V#G7qUTWxP~u=>arrK`;');
define('SECURE_AUTH_KEY',  'w*}|VPM7!N@m-mcxTU JH>Xzr:#|@:sZ-+TwcvV^+w.PK.lkx%*!@x&/$cE]`|qU');
define('LOGGED_IN_KEY',    'a:SYizSXQ};t1---|?PoIV`v#IRDWU%-amFMloegEwWo /|4I@j4Qcp=Kb Q&HY(');
define('NONCE_KEY',        'i2{%AUdpdBpqgk`oBXWEb9Rg7`0R4SOT,];C;,w{jnC2#,YND-pn|M;TV:9s(]/i');
define('AUTH_SALT',        'qna|^48! r_^:{O#nooM]3~LyFVO|!@ay&$I,E~gai,3BlQGTF~;Kta,.wD#fZ$R');
define('SECURE_AUTH_SALT', '+CfEAV+q+/hsWGX6s(KwbcwVw![N!7YDSV};%<.#{UJ3$IE*Ngm[*ls0h9B#uftH');
define('LOGGED_IN_SALT',   '^^bm~2fa$3(&]0VP_]0bLv(Pa LNke#<.5D(-F4D9-U`[&%<RL(+Ge^,3bl@e0Ky');
define('NONCE_SALT',       '~)J<?37J/@9),_ xy5}u[?58ecM]8>kC!vuH]JJ1m)2U[/qb:aYlg6|qUS^b<5q5');


/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define('FS_METHOD', 'direct');
//define('FS_CHMOD_DIR', 0775);
//define('FS_CHMOD_FILE', 0664);
//define('WP_AUTO_UPDATE_CORE', false);

define('WP_CACHE', true); // Added by WP Rocket

/** WordPress Custom Config. **/
//define('ZWP_BRAND_KEY', 'zvn');
define('WP_DEBUG', False);
//define('ZWP_REGION_NAME', 'han1');



/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
