<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'comercio');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'johnn');

/** nome do host do MySQL */
define('DB_HOST', '127.0.0.1');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'ooEsDM{r C;&a(Tit=Y}d,LrvJyD%s?z7@viv-NX5,gi1S6PUw-VS0EnZ-H&$]8b');
define('SECURE_AUTH_KEY',  'S-V#q6g1;ga&I m,/8w1|8;[W&unnfVMSg4uy14((hLq twicfo!$M%Aej8o.]`h');
define('LOGGED_IN_KEY',    'r,Tq=dUJklie}p*a9rj:D>%/Wevj]KSH3{5&krIa/%uT<i+O{*,?2Ohf3}w8^lx`');
define('NONCE_KEY',        ',0SM%1`u@$YSGe%uAS.<[NfxWf)UfV:T~{0V:Wigg7>j9!t(SK-Imty=nD8PWxD5');
define('AUTH_SALT',        '?=Bs%,xutnI>i7iqPS)M=>+l7JtJ-JeDq#(Ic%[Aw=QT!cV Nf&!SmN$EE4xu4{0');
define('SECURE_AUTH_SALT', '+TfzK`<5AV2n@%||!UlZ,(uU_/OyX# HuqDK>XbZ-UY0h5<TvNU&%uUdfF0`|{.0');
define('LOGGED_IN_SALT',   '$B]T6,WcM;`I3=rgI@sB/)D5C*;><)JYMk&h6H}ZV$bmuxH&:Cp+_Nd=]`[NE05,');
define('NONCE_SALT',       '{I=-olumQ|J<l,3rS_d@}7I%~5/u~K>BCMsWHelR`)e_wpuWtWAp^I2<pW_VzXcE');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
