<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache
define('WP_DEBUG', false);

define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST']);
define('WP_HOME', 'http://' . $_SERVER['HTTP_HOST']);
define('DB_NAME', 'wordpress');
define('DB_USER', 'wordpress');
define('DB_PASSWORD', 'wordpress');
define('DB_HOST', 'db');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');


define('AUTH_KEY',         '1C-U6SCq{z&&/cJ,+n>+F~$Uo_+E{zl-aT[<S?urH{si+ &P, 0-@Z!<S%C<d6WT');
define('SECURE_AUTH_KEY',  'c<#y0o*S6}trg9|t3&:S^l-ePzPmp]z-]l3Y$y4ANgi|^-3D>RqP6E>K-wzZf*CR');
define('LOGGED_IN_KEY',    '3qQ}W ]QpJ{3xnEVyzt}gco7`5]uk?JJtm,),^-bh@M_Le;4LHU247~{AOdJ*aC|');
define('NONCE_KEY',        'x=L>t(~hf+`77Pe~,y<zjGxZRzFVs~ N0y=lP;cUi=1j{_~W`2+(G^).E6~|K)t6');
define('AUTH_SALT',        ';P_mVEirC5]Q[F+0mijzXu+-ikif0H!JZETqtg[H>8Y U1T.G.!5j~#J;Jr&ZH(x');
define('SECURE_AUTH_SALT', '=;(GHwi}S0zlF:,YYIn?*)+}]79wIJ582hzO[w`;Gh-.HU(VwWvrfR?D+=aD4KVf');
define('LOGGED_IN_SALT',   'AS% ] UY~D5(-U}yB&2g)c$oU )H[-cL7Zl^*f$/4vsY<K.c;yjlD0Dj6yc!,C)]');
define('NONCE_SALT',       'mwL[rlk|0]oEZ/&~/,A>p=VUeU9W&|ay Xc:ye!Rsin|.7w$xXh/f6`O[OKfM/Vr');


$table_prefix  = 'wp_';

// If we're behind a proxy server and using HTTPS, we need to alert Wordpress of that fact
// see also http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
