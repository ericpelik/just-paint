<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/Applications/MAMP/htdocs/just-paint/wp-content/plugins/wp-super-cache/' );
define( 'DB_NAME', 'just-paint' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'G-)j|Xes]Q(5LfQJkl=,/6TH)0H9Yc11wHhDXNEHzy`P{0=t (1/&lp*~voG/Z($' );
define( 'SECURE_AUTH_KEY',  't)-eNnR}r@+jK`K3TF:Soe:)T)hGKxY 8PX,# IJFQ])| pI2F8,*(a*Fv)j,MbZ' );
define( 'LOGGED_IN_KEY',    '&aVRl-An~05s:sxGnRtVWic&O:m=_;^ELZ`;!1x|Zbmjw0L9|X!!<f=Zr!SJYn<U' );
define( 'NONCE_KEY',        'TKpC&8z?#FP@ky8ze.!bM0Rk-@q6 60Z^.G7o5{l$_`0sz@dZq(K>GUD.RKTR#6o' );
define( 'AUTH_SALT',        'sa4>PMe7TbDIPVq0cPu~_Tw0!3M<$:Elo@2x2Ht3H Sx.k2XH9ft%uW6zI:%e77]' );
define( 'SECURE_AUTH_SALT', 'JJCDWa]u$QeQ&`%`lV):|s],^mU?7M36#)3%qG5-%UxaXbkPj:jG8}Vi+w&Od]f2' );
define( 'LOGGED_IN_SALT',   'LZB.Q#@F4<.}$)(d]EB`Ym+Pi1rr(GxAQwH=6(1y_J]x%8=tK,tBO5N3d#RP+p-+' );
define( 'NONCE_SALT',       '[>7}u4QcS1Q$&7HN->szx_dq. _4CVq?t0:>}} %|vJUN]oXCk`Xrursq(W<Z<Uc' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
