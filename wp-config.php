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

/*added logic by Ken Shoufer*/
if ($_SERVER['SERVER_NAME'] === "localhost") {
    // ** MySQL settings - You can get this info from your web host ** //
    /** The name of the database for WordPress */
    define('DB_NAME', 'loucorona');
    /** MySQL database username */
    define('DB_USER', 'root');
    /** MySQL database password */
    define('DB_PASSWORD', '');
    /** MySQL hostname */
    define('DB_HOST', 'localhost');
    /** Database Charset to use in creating database tables. */
    define('DB_CHARSET', 'utf8');
    /** The Database Collate type. Don't change this if in doubt. */
    define('DB_COLLATE', '');
    define('WP_HOME','http://localhost:/loucorona');
    define('WP_SITEURL','http://localhost:/loucorona');
} else {
    // ** MySQL settings - You can get this info from your web host ** //
    /** The name of the database for WordPress */
    define('DB_NAME', 'backcou2_loucorona');
    /** MySQL database username */
    define('DB_USER', 'backcou2_bcr');
    /** MySQL database password */
    define('DB_PASSWORD', 'tR(SW28(P1');
    /** MySQL hostname */
    define('DB_HOST', 'localhost');
    /** Database Charset to use in creating database tables. */
    define('DB_CHARSET', 'utf8');
    /** The Database Collate type. Don't change this if in doubt. */
    define('DB_COLLATE', '');
    define('WP_HOME','http://dev1.ken-shoufer.com/loucorona');
    define('WP_SITEURL','http://dev1.ken-shoufer.com/loucorona');
};
/*end added logic*/

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
define('AUTH_KEY',         '8vPTGSH_2~f/db4{yI *#i]lD1)R; !wq D^vAIw$^,EQ)L>+<s.WdcR(hcGtEm=');
define('SECURE_AUTH_KEY',  'q_jT2{`TR^{aJUT7ZR)Z0tiBA-].iAVO-|cXkhRw@#(hI(7Sn/oW_?t;t:q0zHf]');
define('LOGGED_IN_KEY',    'I{%KLMzG${!3/*@x#ALrT0bGL3KxPi5SDw`8icHw=?Z??, [WSGL>_TtKF/_2aTI');
define('NONCE_KEY',        '/nvWEaM6?/a*}kY?~x!}ZFfq6P[87GQQG/y(M);cL_FL6N`}K4#t<,wp&$mp*:6M');
define('AUTH_SALT',        '{&y=p}l<7ONnz.t@DhP&!EiW]hb5!+[_f)KFD2P?6ZH!,f;zyu$a(4||5Z[,Nt9N');
define('SECURE_AUTH_SALT', 'g0QPGlV=OsUa3^G;|@_[$ACI3{#E=Eni5w;7%HX=S|c.cW5>9!`VW79KjQIQ1H0#');
define('LOGGED_IN_SALT',   'W4;J]%g<R]fd%)cid~.XF!$RW:vo-{y;0m>m6%y(Rm+BsLn YwNTIKsG|l&>aS~3');
define('NONCE_SALT',       '~u#2vT5U]O3%Bc;e/xNn-Ip>Uf#=yE+{a$V|)[cy-0*@lnlm8KB_nQLOfqYb 2_v');

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
