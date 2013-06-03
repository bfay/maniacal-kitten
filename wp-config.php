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
define('DB_NAME', 'rockinguDBee25e');

/** MySQL database username */
define('DB_USER', 'rockinguDBee25e');

/** MySQL database password */
define('DB_PASSWORD', 'pBp5sVpbH5');

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
define('AUTH_KEY',         'z0j@zJYY>B#9pl~Odd[D9S~[Gss|Voh1GCV_5.Tqi2LHb]<Aq+;extDWS_52HxfyE');
define('SECURE_AUTH_KEY',  'Ki52Hx]#Wp$MbYn7QJy}>Bny{bun6QIb<A7n$k@NJZ[C4k@w[ZkzJcUn70Jv>|4kS');
define('LOGGED_IN_KEY',    't]eaqA>Br^$McYrB7N$06Q*$buqAQMb{z}Ysk@NKd:[Co!}cvr,RNg0FCr|1Hxt#');
define('NONCE_KEY',        '$n@NhZ[C5O~:[Zs@NcZo8RN@}[CoWl5LHW#5;ext#SdwCSOd:]Dp_~OhPfEAm*${');
define('AUTH_SALT',        '8||4gwo~KdHS~2]9l+t.PeXq6LSh:D5Kw#~OeWl1HSr7MFUfB3Jv,@}cjyETMb<7');
define('SECURE_AUTH_SALT', '9p-HSdjyAMXMX^{6{7Iq$u^{Ufiu*HTeXi{6H6Iq+<$<TfqQcn0B0BNv^z,0Ykvkv');
define('LOGGED_IN_SALT',   'Mbq6I7IT$<]6Hp*t*]Teqeq2EPEPb<2z,0YjYjv7JUJU@}7}7gr@^bunIXQb>B3I');
define('NONCE_SALT',       'qSlhxDS_52HxbuETQ^3{Eu,,UnuEXTi2Eu<.TjRk4JFv,!4kgzFZfFBQ^30cvr,');

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