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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'testewp' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'edilson' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'trevo99' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'G^w2;qE%FoT5GAMuty3m>iSwh)CUT?ueor>@tID?5Fs<%P2@7aRhc +kn*nvg^m5' );
define( 'SECURE_AUTH_KEY',  'ErPa;U1nt{Pu9.#C(:Xj=u%k&s*V83@BzPG7)>RrT/*h!e|UDctn2>@=d)0(u Kg' );
define( 'LOGGED_IN_KEY',    '9m0CJfpyXi.NF `Sc})Wj~YDfC9RL_Xy}t2%M9oD;`t>/}*>2DS^/2L_(>x@-z~;' );
define( 'NONCE_KEY',        'oE&OZDXmGjBS`^Lw$:]AXYz $]rA W2RHuIR{WFWljL$Nbe};zRmj9]72/j4b<0C' );
define( 'AUTH_SALT',        'nx-AD-&BsJ}_F]w|J-*nDp}t^(mj`$:Q>R#{uhl2WudjkN4OFpe%9nYSmr9n1~vd' );
define( 'SECURE_AUTH_SALT', 'Z>uk(5FvpK%:!ZznHd8I#7c<%zPUs]hX.+Q]@mUFwpg/gnHFa>Eb?F1>jhR9s>CG' );
define( 'LOGGED_IN_SALT',   '?*KDNVLN~ZIGk[3&-EFW%`@$6RNGToNrgRaP$.WL8YXdk&ebSmd,/ng<kX;aklSQ' );
define( 'NONCE_SALT',       '`!u/>@BZ`{+x!N-,x3Y2w{*fc51^^_ )EGba5YI_;KW@sKezvY@M#Fxdim%).041' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';

