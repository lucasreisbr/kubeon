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
define( 'DB_NAME', 'smartechsj' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'smartechsj' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '2n8yjnqdgp7' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

define('WP_MEMORY_LIMIT', '512M');

define( 'WP_HOME', 'http://smartechsj.tempbr.net' );
define( 'WP_SITEURL', 'http://smartechsj.tempbr.net' );

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
define( 'AUTH_KEY',         '6S2SiD.E%-AC:)o_cP>l,R(oj@j`x}s4|9,+fO;}-L:2[Y%WC| {t5(R]EAGxh}j' );
define( 'SECURE_AUTH_KEY',  'iZsQnB#KE`N,%s=NMzEcnS?1uCXu#5KNt<iak+MwRaj`LF2iKJ=cyH+U`FWi*-r#' );
define( 'LOGGED_IN_KEY',    '?CSMU=9egKZ2%I91]]qX2^E:b4B=?2NUb)K1<:jcQQs^r:p,aKEfW=%/jacY5[G.' );
define( 'NONCE_KEY',        'b~(^k>_B,+ac^bMPej`R%X!MV+lJ*?yv`J#%#mkOku_r)5YHm8S}_6L?b_D>p]&n' );
define( 'AUTH_SALT',        'kPhNq)WF%|V._@krJJ|z+^ZM%mT8V|e9=$u>pJk}w_4X3Pe*oK*yLo@k{KA-+JVM' );
define( 'SECURE_AUTH_SALT', 're%K4b4>iv$K8.G^xN_,$Oq05#UEAT0pZ>:@|O=cMa?sM(,GH?H :Dc+LUf:V>_o' );
define( 'LOGGED_IN_SALT',   '=A#~V `z.=GfX,@wHnsccE1<l$0B8fg(@J)4<bX<LAweIhRHc:${t-D)uu27Qr#n' );
define( 'NONCE_SALT',       'z=o*4clDm[bhj.]rf#EV^5J~p](>@Bt_r=LVc h![VDQMT](XS[anl%`=A=#*Yf_' );

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
