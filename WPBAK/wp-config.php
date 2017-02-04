<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'hermesda_wo2070');

/** MySQL database username */
define('DB_USER', 'hermesda_wo2070');

/** MySQL database password */
define('DB_PASSWORD', 'ZtwdVgYiuUWq');

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
define('AUTH_KEY', 'G?S<{tkK&dmJ@UZ>-A@^ZzZjCP<OJ;T=_FVpb>i%fTwXS)RiI{Uqq_Cl^B&IKmNJNGPMiF/)aBQAJ<EE<ZPMEAfvbIj*{Qs]|R^o[DE}wu/C($+u[@(k=qPiwOUUa^kl');
define('SECURE_AUTH_KEY', ';>E{z)tCv%O%TUANUayW+%Tnu[%M]cP]*eJe+dB)i*sBzKFiM-hlq;LREc[q_am-!X<{eWuLat!Vz*aO|]Ld^/K;JcorecE%JeHFRzEVoWrf@&/N]x{fmF@nFy|n}kGC');
define('LOGGED_IN_KEY', '/Y^}bNVt$+NL-Y=*_/<phxuiK/<o)?[GlqNu{Q)uCzz=_dh)Y*MYg|!dG(+YJ&Se+OB;[KM>uH%zoS(F(!KyUJRLhrfEk{*yv@*]-AfE%tXUdtEIPhQbrbf*CJWv(Q*F');
define('NONCE_KEY', 't*?BFs!JOT[tyM}w@WiX_t=FDENkYhXwlf+ZE(d+KOg]u)t]t$;eI}b+?Ic;G_;aXokVGq%mjnYElnc-/?mz&ZdvYUDkoM?+>;Vl|XhGt!%]tz@RNb}};dK[K[RzWH?Z');
define('AUTH_SALT', 'jJ)ChAexclPA-O[E|&l[TGCR!>I)cicu;LKgJ+dEqka_<joG*oaBoZAbsq%HlKEGqEI;|[cbAE|qi%GoG/{C{;k[u{LFPm=qKy<tf=%RmV?H-!Y_npFkSBE(l^SkuLx]');
define('SECURE_AUTH_SALT', 'HTp|/%=lBM}V@&xwFi=XssR+zazw!;d<m_Q|[zKgrt*>aF;qV{NGSlm{u!n}K?IL>Li=oM!}{L&h{>G!oEuDg=yhMyhkLCuazClHjtsLwyOmF_wtbZsD;YLP&+tFucLJ');
define('LOGGED_IN_SALT', ')*l?@h!Uc{NhMNJps{}x>X|a=g!LIzoCr]>V/deOmtN[WND_L/ZMPBbxeCCKg;edp&Bn>lNo>&DAmjrn*u=Spb)kfhfS<-$BBBNRG*Baqz!&lji$wOQJJ^p$tzNDnCIs');
define('NONCE_SALT', ');KP%l)P|(%hva{uRWGo(Jhl$[fF/hd]&dStizs[M>%f;v@?ouNDeA^PbuVJl;z/Vh->QqUDgc^CMejRL!YFIxHsmVM<OufLJuiAqkh@nv;x?xAV]X>|@$Y}V[jaj&^Y');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_lpja_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

/**
 * Include tweaks requested by hosting providers.  You can safely
 * remove either the file or comment out the lines below to get
 * to a vanilla state.
 */
if (file_exists(ABSPATH . 'hosting_provider_filters.php')) {
	include('hosting_provider_filters.php');
}
