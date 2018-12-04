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
define( 'DB_NAME', 'mysite' );

/** MySQL database username */
define( 'DB_USER', 'wp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wp' );

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
define( 'AUTH_KEY',          'uOg/BVF H]K6{-o^uuzF)ipbLUduJp/|Ed(ut^/y/DZ>@oc&IA0L*73+_@9Y_|HE' );
define( 'SECURE_AUTH_KEY',   'OMFPNM(dyEuQKEpO-to4[ 6bfzs&059aIwo#* @i%4M92o?pPRjd-]1ODRm~#f K' );
define( 'LOGGED_IN_KEY',     'j)7LQZ~D|,?2 +3O-O8SBk2wz1V31Nn)co1Ym&F&))RS>{[B-kt>:BCi_I=Zj<.^' );
define( 'NONCE_KEY',         '&5=E #+YSjJM@.lio0[KC[/T6Cq3?{kF{<|%sk97W ,8rW=&Jb@izU=tJRej+cNY' );
define( 'AUTH_SALT',         'SEO89f)ZHa1[-[K0Q`G=i!^CT>s(:rf){~t_6Jv~W#OBUxMEqwV~`AF4iD<7I*o!' );
define( 'SECURE_AUTH_SALT',  'yVIQL}TMNvsGI49LsLRm)mMb,u/rPLYDE>,}QQ3pI#HAk<:}CN]tuROos|zQ88%F' );
define( 'LOGGED_IN_SALT',    't-nF^Q#x=)#IsMu,F)JU^l@JhJ^nMnDY{*[iE[cXT8G!b+H^h=1j F0b%E:h>?H>' );
define( 'NONCE_SALT',        'ii<NVBP<G1s[VJe0rqig $c^_igfVReL@`X;)X&4WUY|h5U!J/Ng(vsTXuayeQj&' );
define( 'WP_CACHE_KEY_SALT', ' Y5RPD8 Hk3% HF4q!N,k|I@uEAq5}/c,fPlkSXreOc&!c.Dr?1,n8Yv$L5@7M3T' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define( 'WP_DEBUG', true );
define( 'SCRIPT_DEBUG', true );


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
