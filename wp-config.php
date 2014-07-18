<?php
/** 
 * A configuração de base do WordPress
 *
 * Este ficheiro define os seguintes parâmetros: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, e ABSPATH. Pode obter mais informação
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} no Codex. As definições de MySQL são-lhe fornecidas pelo seu serviço de alojamento.
 *
 * Este ficheiro é usado para criar o script  wp-config.php, durante
 * a instalação, mas não tem que usar essa funcionalidade se não quiser. 
 * Salve este ficheiro como "wp-config.php" e preencha os valores.
 *
 * @package WordPress
 */

// ** Definições de MySQL - obtenha estes dados do seu serviço de alojamento** //
/** O nome da base de dados do WordPress */
define('DB_NAME', 'denisfeliz');

/** O nome do utilizador de MySQL */
define('DB_USER', 'root');

/** A password do utilizador de MySQL  */
define('DB_PASSWORD', 'root');

/** O nome do serviddor de  MySQL  */
define('DB_HOST', 'localhost');

/** O "Database Charset" a usar na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O "Database Collate type". Se tem dúvidas não mude. */
define('DB_COLLATE', '');

/**#@+
 * Chaves Únicas de Autenticação.
 *
 * Mude para frases únicas e diferentes!
 * Pode gerar frases automáticamente em {@link https://api.wordpress.org/secret-key/1.1/salt/ Serviço de chaves secretas de WordPress.org}
 * Pode mudar estes valores em qualquer altura para invalidar todos os cookies existentes o que terá como resultado obrigar todos os utilizadores a voltarem a fazer login
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '$9p<|T<eHF]e7+lrE9|!Man,<;S.UAa_YLw~DnMPuN0Z=-Lq]20nX3k|9_dNL5pg');
define('SECURE_AUTH_KEY',  'fHlLW66>/+#b0TZb7(qX=<}hDu% ES)xC7Kh$<p+0Ai8Act+E]#G,Z=x)Q;Qf1kP');
define('LOGGED_IN_KEY',    'm7TdSCmmTV->HyCF;*Jzg1/}hvpWX$t[rSk5B[JbHAQq|Y${-om>$t64@W*{:G|+');
define('NONCE_KEY',        '7-ZwDA#va961+A-wwBssRJd3V]H-ky6|-{xWke?Nbl#p29m&hGMhOa*<1:7lw-ti');
define('AUTH_SALT',        '%I-K]g8[Y*Va^p9wIN% kp02sm_%&e=]< T]p.,[,kmXX$(}hl#zFZU62EAEgeE:');
define('SECURE_AUTH_SALT', 'Ar)x>S{KDIUXU-jR~OX.Wu.~S?B]wm.|1M-:fu+b-c}~?aiUxuh6-#~< #F(WJz{');
define('LOGGED_IN_SALT',   'IRkaFqxw_0d|H9vUxmV5Ox$@BK6rHPj1_Fe}PL)oL]}0iZsjzh^S)=d+Og$UHSog');
define('NONCE_SALT',       '5;=1CDD 7*bCT2t<Qwn0zn#7,R&U-w}e;4}kaD:7-`JB|r):jV-^.W!<pLVzEDy%');

/**#@-*/

/**
 * Prefixo das tabelas de WordPress.
 *
 * Pode suportar múltiplas instalações numa só base de dados, ao dar a cada
 * instalação um prefixo único. Só algarismos, letras e underscores, por favor!
 */
$table_prefix  = 'wp_';

/**
 * Idioma de Localização do WordPress, Inglês por omissão.
 *
 * Mude isto para localizar o WordPress. Um ficheiro MO correspondendo ao idioma
 * escolhido deverá existir na directoria wp-content/languages. Instale por exemplo
 * pt_PT.mo em wp-content/languages e defina WPLANG como 'pt_PT' para activar o
 * suporte para a língua portuguesa.
 */
define('WPLANG', 'pt_PT');

/**
 * Para developers: WordPress em modo debugging.
 *
 * Mude isto para true para mostrar avisos enquanto estiver a testar.
 * É vivamente recomendado aos autores de temas e plugins usarem WP_DEBUG
 * no seu ambiente de desenvolvimento.
 */
define('WP_DEBUG', false);

/* E é tudo. Pare de editar! */

/** Caminho absoluto para a pasta do WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Define as variáveis do WordPress e ficheiros a incluir. */
require_once(ABSPATH . 'wp-settings.php');
