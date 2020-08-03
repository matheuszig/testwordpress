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
define( 'DB_NAME', 'testwordpress_db' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '1`p`*Vp([BjDB>SW|#P2(bT<AN@NBn}/b-s.w$No=+%-UJP[nq?&L:{U{U8Al2YO' );
define( 'SECURE_AUTH_KEY',  'dk8h(3#P&Pg%iAJ%Dt0(nYP@<YEeH*et{5mQj8[JovEF|lJ!<rjJCb,tZt*ei}X|' );
define( 'LOGGED_IN_KEY',    ', |CR4QYGB7,P*#~[(|UA_m:KX}sFFp)@k$kw]`D8]~C_P7GhzxcqG,|MAm`x@Vc' );
define( 'NONCE_KEY',        '|w13WbReH6(zRvChyiLS:fLV@e7TCVI7Eo[|M> hs,9zV5SmmDG|({Xbiv&dGkK0' );
define( 'AUTH_SALT',        '{4W0(Mgz@hmYYE79It^>/C1ZJ`6x]SsZ5H4CU0F~sXDN,KD?/{mJw)DP8cwj/al7' );
define( 'SECURE_AUTH_SALT', 'n(rFTiO<rF  WE>/~bQVF+2?_c{3]uj0O/,A)o|x*c9Byu}zNU={mosBqv7d&$tR' );
define( 'LOGGED_IN_SALT',   '=@8^!){u>j`aK#kO.z> B}+k0)W@-X`toO(FN29s v*tVwUUeSkQ9L90,dS-Vb)8' );
define( 'NONCE_SALT',       '.L hMJIs`;|mDi+kBnb+^7?WE9RMB*|_C0H1F:D#Q jnUa!Xy%6]+E)26VvIMHLb' );

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
