<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'goldencar');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '=1UQJ5FGW=HGTeIwo =+W~bs$t8e}!KS3{ij;Tx]O~Ze.?T(p-};<C[xDs8DaR&.');
define('SECURE_AUTH_KEY',  '4F;:WI#;Eq!H=La]f&m/|A$M%RkA(|jo8E$Juvh-mHu1)bQW3&PRqy@]uPy|$#;7');
define('LOGGED_IN_KEY',    ';S}hTP]ncz;,/7j,tWjlO04CeS?OA<p<d`llR%`4PU=+AV(/&nn$T(Xkp7>5wkUY');
define('NONCE_KEY',        's1M8M6Zx_|2@DITI+?wVhB{<@B$X+KyRKM V^I$Ut.VeueEbqi[fj$dc/$>J^w`Y');
define('AUTH_SALT',        'IQ.Hw8t%(fi^PD/CmlxUT_bVz1.Q;v9+Apy`xq4~P#t!-Qt8kpvX7YP8xfQ,e6Jk');
define('SECURE_AUTH_SALT', '+=;)%+O{Q0O~?{4n6B/_JRALL#)P:3?7$%pyW#E_bO{<y]rdkU3&NwrwWg(<Kh.f');
define('LOGGED_IN_SALT',   'nvZt#K$63=ECHL<tpS ]AVvSA=5XHptYIH-C{ih.3sqo.5U%k8#-IwC4!pCUk~,i');
define('NONCE_SALT',       'q>f^9wP;hjM4.t.,p|^4nzU<gy%uh!MjnHUw]V[HpzDq/j`u:+ BnX)_IU(v2xQp');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d'information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');