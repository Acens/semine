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
define('DB_NAME', 'semine');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '0MW7tWibA^_9O{y%DdrACQKR~X{+@5F [C51L6<1TH4CWo<|@[`I+N1)R8A[9(0p');
define('SECURE_AUTH_KEY',  '6rB95FQZ]keSay,oVcP QbGECQ`=V1lCR=lD;Y7jgF:Y)Zm2W|HPZt=&)BH>^4n*');
define('LOGGED_IN_KEY',    'W$pUbq}Y/XCy%yJ_})TVq-0piifP<6y/u)|0[V>+5z&r34[(mnNX4tDA,ZN-61Hh');
define('NONCE_KEY',        '{#7Dpr/+#rz:4ouc4lA+H!Q}0).!Sds|Mti[5oHZ7kDD3ga{70DuEr=^biKbHA$J');
define('AUTH_SALT',        '+ bzf@Iv4}RxOK)0)i*C>4#nDtOe8-Wt[3USye5l4lOS[!GODSI9v;~<pL:ZFv)f');
define('SECURE_AUTH_SALT', 'o%so;M9W=Lu7RPq%s9ffK4A|[,vb+AtGd~H=^TX4?[w>Q#3>X{}QT]me6v=S,W1)');
define('LOGGED_IN_SALT',   '+Xo iI.^I?z(`)/nkO.vCd: v5|j< ,[3b,xH?>uB`HgR|F+3pno|cvm%s%+wK7A');
define('NONCE_SALT',       'k HF<iGwypw~}Dj3ml;Kv%8qLzv_kU|jMdO[9^fh9C $S]i3jdqJ=-LVXK$y{}#]');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * O idioma localizado do WordPress é o inglês por padrão.
 *
 * Altere esta definição para localizar o WordPress. Um arquivo MO correspondente ao
 * idioma escolhido deve ser instalado em wp-content/languages. Por exemplo, instale
 * pt_BR.mo em wp-content/languages e altere WPLANG para 'pt_BR' para habilitar o suporte
 * ao português do Brasil.
 */
define('WPLANG', 'pt_BR');

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
