<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'alternativa');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'alternativa');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'Al73rN4t1V4');

/** Nome do host do MySQL */
define('DB_HOST', '177.87.208.121');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

define( 'WPMS_ON', true );
define( 'WPMS_SMTP_PASS', 'RaX8F6K7CjKTeE' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'C/>T}w1]-.ZpMJ~Ig]T=%YD|V2PL)[sD.-u#5(~3BQ+Pq;:RxJS[P}N<.P,>.-M~');
define('SECURE_AUTH_KEY',  '; ]4 #%>wVwTqCr5GQ}uk)~4rP*+ix$2B~g{q2|,d-78Q9]spy;%l,VmuJoE?eHq');
define('LOGGED_IN_KEY',    'S*.G<McH3[U<aF^(TW/{#U3fRvbWF.oPbEax-X19,?@/s>;?;S1)?MeZBW4<5Fhr');
define('NONCE_KEY',        '|>Ao=U+UK$3l,]a|gERmc&/V>`IW@;SKqIkBrn$ox6rMSxx}H1UjZzhKLCy85~1[');
define('AUTH_SALT',        'py#%GTBQOp,% waWuk*(>+;qcNfO{k41:^Jrb9u$ ^+DLVi:]P+6qO?;X#mPL!95');
define('SECURE_AUTH_SALT', 'GRr-&HtMj_xdOV]}mY~8Qo*mJulmM Z_Ogv}k-(ey@;nq0J!o<NF0+M%6[]@P-[_');
define('LOGGED_IN_SALT',   '#_*s;<O(?fHpP|NE>MiJ`;l}wq$9(wR3^!(7%_nR%GlU}W_JhF1EOuk0$0I|Qgz2');
define('NONCE_SALT',       'qL4-ys&=Y#fv;=#BA~6ArEwo]N0g}:c,7xYg}:pBYZPTeFp`s1CDgnMDy Cvf6B+');

define('FTP_USER', 'alternativa');
define('FTP_PASS', 'Al73rN4t1V4');
define('FTP_HOST', 'ftp.alternativatelecom.net.br:2129');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_xpw_';

## Disable Editing in Dashboard
define('DISALLOW_FILE_EDIT', true);

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
