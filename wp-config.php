<?php


// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', 'chicfit_safe');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('AUTH_KEY',         'xSx``$#RX(v6P*+rbPhg_qboxWTam#qO-3.~P[PWL#t[UDg:?o<9iH_8LyRqNCbS');
define('SECURE_AUTH_KEY',  'h?SD.:p}7Rygc %Bl__kwQurS}k6g*rsF^mt US(:69-p>`LM3 ,mW|uuIj+s*,7');
define('LOGGED_IN_KEY',    '%dh-.%.yOq?-Tg$_{ak~qonS23cW,eWBjgXUb$b/wvkz#jX>/R@ByumO$,uogf{V');
define('NONCE_KEY',        'J,y0+cG.+sRTrMCGbEG#vQ9ILWdWdK)m|&>^;=|G.Hk/FxY+!@6d`=^;QP{|~2N.');
define('AUTH_SALT',        'c9a$SO_)?-+(x(4RO6(BTdf;WtE>TpnnO|_QTX2?ZBv:_oF>  d|Ww8&X5/^!f|x');
define('SECURE_AUTH_SALT', '-t4|/I)URadUWoT2U>[dB9=0,L3ixP clcipAfyd!Shl(~fHdbq^`InQy*}wl+gF');
define('LOGGED_IN_SALT',   'S%+r3;|BFMBMe{~-U|Qk`oct?|4%&vZADdw2J3*eUyw-0a4C.+^?!hW~y*},%euW');
define('NONCE_SALT',       'y B5mL4~pB(,ejE`EKW{a?3YleIH4tqGl8I)`P#cpF8~C/ G7g+xTh-keOW@0bp$');


$table_prefix = 'wp_';





/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
