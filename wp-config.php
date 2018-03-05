<?php
# Database Configuration
define( 'DB_NAME', 'wp_blkppr' );
define( 'DB_USER', 'blkppr' );
define( 'DB_PASSWORD', 'Mg7rgrQ4NGO2KcCyGs48' );
define( 'DB_HOST', '127.0.0.1' );
define( 'DB_HOST_SLAVE', '127.0.0.1' );
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_unicode_ci');
$table_prefix = 'wp_';

# Security Salts, Keys, Etc
define('AUTH_KEY',         '~G~8ky)X{kLmQ8Q#_)hv.`s*}07+z:P&UEM<+8d7)E3qAv.+8iu3ZsC$0Kv&z+D;');
define('SECURE_AUTH_KEY',  '-,1w+}w0*fH.`^3od+80k_5If,6W4;0e QpejYLJas/YEp_:K]Sj3apoF3W|h3gN');
define('LOGGED_IN_KEY',    'I&.o$$~lN~Rk4$)X2C&_MA+<X}~6~cWb%*rO2ZK3+sQ`wZ]Y@1-<kB5){YwdWWT{');
define('NONCE_KEY',        'NW&Pcy!Y@e2 Da8#[(Tc@pRG-`xuMJE?-#b#be21-}X4tin++9|&#!iJFzJN[<u>');
define('AUTH_SALT',        '+b<y3VC6[o|2/V1JU6W 8UKBBzq90>W[,7nZ5C.@;LMH(p]yyv7U(,9&){P?V)Q1');
define('SECURE_AUTH_SALT', '[kzwDZ:sLF#o(5$FK-ugqgtW%jR13mQ[78.ECH,-A1CUV>/uS5u,:B*UhM*){Xbb');
define('LOGGED_IN_SALT',   '7<B*)R_u{D8>`h:ovNc<pKRM ;.ine2)9L_He6 8~NMr&eK<u3-r[j5f=T/KK9yI');
define('NONCE_SALT',       'pHA40O&9ZmA6xu;q G9f5LPQ-m-=Ve+XACwCx$4OEyp)TQ3|.{hd|s-AKP49ykoa');


# Localized Language Stuff

define( 'WP_CACHE', TRUE );

define( 'WP_AUTO_UPDATE_CORE', false );

define( 'PWP_NAME', 'blkppr' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

define( 'PWP_ROOT_DIR', '/nas/wp' );

define( 'WPE_APIKEY', 'c8edc8c5d763c14fbd5d52b20c243e24617c5db4' );

define( 'WPE_CLUSTER_ID', '120267' );

define( 'WPE_CLUSTER_TYPE', 'pod' );

define( 'WPE_ISP', true );

define( 'WPE_BPOD', false );

define( 'WPE_RO_FILESYSTEM', false );

define( 'WPE_LARGEFS_BUCKET', 'largefs.wpengine' );

define( 'WPE_SFTP_PORT', 2222 );

define( 'WPE_LBMASTER_IP', '' );

define( 'WPE_CDN_DISABLE_ALLOWED', true );

define( 'DISALLOW_FILE_MODS', FALSE );

define('WP_DEBUG', false);

define( 'DISALLOW_FILE_EDIT', TRUE );

define( 'DISABLE_WP_CRON', false );

define( 'WPE_FORCE_SSL_LOGIN', false );

define( 'FORCE_SSL_LOGIN', false );

/*SSLSTART*/ if ( isset($_SERVER['HTTP_X_WPE_SSL']) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on'; /*SSLEND*/

define( 'WPE_EXTERNAL_URL', false );

define( 'WP_POST_REVISIONS', FALSE );

define( 'WPE_WHITELABEL', 'wpengine' );

define( 'WP_TURN_OFF_ADMIN_BAR', false );

define( 'WPE_BETA_TESTER', false );

umask(0002);

$wpe_cdn_uris=array ( );

$wpe_no_cdn_uris=array ( );

$wpe_content_regexs=array ( );

$wpe_all_domains=array ( 0 => 'blkppr.wpengine.com', );

$wpe_varnish_servers=array ( 0 => 'pod-120267', );

$wpe_special_ips=array ( 0 => '35.192.73.176', );

$wpe_ec_servers=array ( );

$wpe_largefs=array ( );

$wpe_netdna_domains=array ( );

$wpe_netdna_domains_secure=array ( );

$wpe_netdna_push_domains=array ( );

$wpe_domain_mappings=array ( );

$memcached_servers=array ( );
define('WPLANG','');

# WP Engine ID


# WP Engine Settings






# That's It. Pencils down
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
require_once(ABSPATH . 'wp-settings.php');

$_wpe_preamble_path = null; if(false){}
