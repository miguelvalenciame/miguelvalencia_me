<?php
# Database Configuration
define('DB_NAME', 'wp_miguelvalencia');
define('DB_USER', 'miguelvalencia');
define('DB_PASSWORD', 'AFDMJJ02FW-5FXwjHOP3');
define('DB_HOST', '127.0.0.1');
define('DB_HOST_SLAVE', '127.0.0.1');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');
$table_prefix = 'wp_w8bf8g_';

# Security Salts, Keys, Etc
define('AUTH_KEY',         '4gm,:hEpMPw};S<g|@}SyD<z.zn6O7rF:VZ+P-u=4%d:A~%cI{>VzcZuU]S>Tx-:');
define('SECURE_AUTH_KEY',  '@;0I]<. q9WoN]RW;kDeF!#Arumr+Rgc|^J?`TY+%46^l]QNNzE!NwmG+k%3q@:{');
define('LOGGED_IN_KEY',    'RdJ_{reP;(eR)rB*ckgUr$pp|uOSAoTpt ,f&PX#68J0.d `QOxU-CT+.M(ua1y4');
define('NONCE_KEY',        'XgOIp]<C0FANf}@,:z+D~(wN^+T!WaV_Yefp5fZ>p{#CMsDtzfpUoq.3l!#>item');
define('AUTH_SALT',        'Y0XKs8UZ:P+IK-QzoUf^s+oS|>l*c?%9#J`}n94D{U]>h{G d%TH0O.<vss+j35!');
define('SECURE_AUTH_SALT', '.!dm0$(-6=#zK<2}t<V_?sq|Isv/U5l95W2RQ0VP=am._K27=jR(dfb,)aL3-Pzh');
define('LOGGED_IN_SALT',   '#RDw||@=$RkY9KGBOlGG#t``p_+|7iK-J|sO3(Va^U`LM+_|.0Jt;hT/fw(V/QWJ');
define('NONCE_SALT',       '`->Zr(sneg$P,@pXA-H%/P&uw|T?:lT$dRVb]dEkjZO8#/4.NPPkwt]k9S/{_~E`');


# Localized Language Stuff

define('WP_CACHE', TRUE);

define('WP_AUTO_UPDATE_CORE', false);

define('PWP_NAME', 'miguelvalencia');

define('FS_METHOD', 'direct');

define('FS_CHMOD_DIR', 0775);

define('FS_CHMOD_FILE', 0664);

define('WPE_APIKEY', 'bd4c171e1f9510aebbeebdf16612e69c50bb5aed');

define('WPE_CLUSTER_ID', '140523');

define('WPE_CLUSTER_TYPE', 'pod');

define('WPE_ISP', true);

define('WPE_BPOD', false);

define('WPE_RO_FILESYSTEM', false);

define('WPE_LARGEFS_BUCKET', 'largefs.wpengine');

define('WPE_SFTP_PORT', 2222);

define('WPE_LBMASTER_IP', '');

define('WPE_CDN_DISABLE_ALLOWED', true);

define('DISALLOW_FILE_MODS', FALSE);

define('DISALLOW_FILE_EDIT', FALSE);

define('DISABLE_WP_CRON', false);

define('WPE_FORCE_SSL_LOGIN', true);

define('FORCE_SSL_LOGIN', true);

/*SSLSTART*/
if (isset($_SERVER['HTTP_X_WPE_SSL']) && $_SERVER['HTTP_X_WPE_SSL']) $_SERVER['HTTPS'] = 'on'; /*SSLEND*/

define('WPE_EXTERNAL_URL', false);

define('WP_POST_REVISIONS', FALSE);

define('WPE_WHITELABEL', 'wpengine');

define('WP_TURN_OFF_ADMIN_BAR', false);

define('WPE_BETA_TESTER', false);

umask(0002);

$wpe_cdn_uris = array();

$wpe_no_cdn_uris = array();

$wpe_content_regexs = array();

$wpe_all_domains = array(0 => 'miguelvalencia.wpengine.com', 1 => 'miguelvalencia.me', 2 => 'www.miguelvalencia.me',);

$wpe_varnish_servers = array(0 => 'pod-140523',);

$wpe_special_ips = array(0 => '34.66.154.131',);

$wpe_netdna_domains = array();

$wpe_netdna_domains_secure = array();

$wpe_netdna_push_domains = array();

$wpe_domain_mappings = array();

$memcached_servers = array();
define('WPLANG', '');

# WP Engine ID


# WP Engine Settings






define('WP_SITEURL', 'http://miguelvalencia.me');
define('WP_HOME', 'http://miguelvalencia.me');

# That's It. Pencils down
if (!defined('ABSPATH'))
	define('ABSPATH', __DIR__ . '/');
require_once(ABSPATH . 'wp-settings.php');