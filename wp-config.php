<?php
# Database Configuration
define( 'DB_NAME', 'wp_projectstem' );
define( 'DB_USER', 'projectstem' );
define( 'DB_PASSWORD', 'RAy1n4aVMsXnexmRDgMN' );
define( 'DB_HOST', '127.0.0.1' );
define( 'DB_HOST_SLAVE', '127.0.0.1' );
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_unicode_ci');
$table_prefix = 'wp_';

# Security Salts, Keys, Etc
define('AUTH_KEY',         '0hJq>Xg!@=Q`v5q0oHM=0~ObkXb%{Pd&$0xJ!]jD!j7w=$gj?7F=]#0aXgA5~,bZ');
define('SECURE_AUTH_KEY',  'T?CP1L!{)i_US@.f`/:+)]PHg{qm|G4q(OgaY!.xmT9h5]SW&OV@?DRRhavbhy7?');
define('LOGGED_IN_KEY',    'iTJ1-FK3..(B&~|YFz&:H2cZ~7oM;nQuQ+yAXAV,{sB,}[T3tSwlfcB)%^f8v#Sl');
define('NONCE_KEY',        'Z-*xV.7^ojd^K3r&,4+Ucg?<*QnH;p:li@~u~:4GOULFo)jwcmRU]eW(-<pUmp!C');
define('AUTH_SALT',        'chw|:zAJp2ULTRJ<;h{r)x+#C8y`wb@jpN_-U]wfByngR>oP5p&th(sa@kIm)6hZ');
define('SECURE_AUTH_SALT', 'K*q-vH@pw 5n*hEXu+@)l||vy>W@KcDRzxE%!Sy#@a_4FrRUF-3V/:g:Yt]H+2`q');
define('LOGGED_IN_SALT',   'Q9+I--DI1..lPT(ED-_-f1]cYqLq0_SRp.-K>ZFf#Ic&:x(#O#?KK$d._uo(dM;(');
define('NONCE_SALT',       'H26Oi`vR!U8,BgljOiq#d+(E.*z#E4#Q3ASw,6>[~S~3ruN9Q4#1/vwt_z:AdXll');


# Localized Language Stuff

define( 'WP_CACHE', TRUE );

define( 'WP_AUTO_UPDATE_CORE', false );

define( 'PWP_NAME', 'projectstem' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

define( 'PWP_ROOT_DIR', '/nas/wp' );

define( 'WPE_APIKEY', 'eba8e9a03ab978f4dabad8d26c1fa4c65fd3dc64' );

define( 'WPE_CLUSTER_ID', '140382' );

define( 'WPE_CLUSTER_TYPE', 'pod' );

define( 'WPE_ISP', true );

define( 'WPE_BPOD', false );

define( 'WPE_RO_FILESYSTEM', false );

define( 'WPE_LARGEFS_BUCKET', 'largefs.wpengine' );

define( 'WPE_SFTP_PORT', 2222 );

define( 'WPE_LBMASTER_IP', '' );

define( 'WPE_CDN_DISABLE_ALLOWED', true );

define( 'DISALLOW_FILE_MODS', FALSE );

define( 'DISALLOW_FILE_EDIT', FALSE );

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

$wpe_all_domains=array ( 0 => 'projectstem.wpengine.com', );

$wpe_varnish_servers=array ( 0 => 'pod-140382', );

$wpe_special_ips=array ( 0 => '104.196.139.39', );

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
	define('ABSPATH', __DIR__ . '/');
require_once(ABSPATH . 'wp-settings.php');
