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
define('DB_NAME', 'basemim1715');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'mim1715');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'qrmk');

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
define('AUTH_KEY',         'XeJUzvuHgm+<a|hp+lz]SGN4QW>/7(}+b:MWVz<nL+AO_du({=M7h>&/dJ*(R!W;');
define('SECURE_AUTH_KEY',  '$YvR-g&EZGyO~mGKwyu[-pR3)lQ~BAts:#/bN>wt4TMzKD]|_zqJTre6l2[GuQJX');
define('LOGGED_IN_KEY',    '/tNqWA/3#)Q;--$/:&`G4;+ObM*l-D$!{SXPLny=1$&ib9v5/tmyH;;LC2Z;TTh[');
define('NONCE_KEY',        'jwQlaMe@Y~<)+pleTJs:%0muutv,K58_!Rao2`)G_A`:(aV[z&n9q )H5U yvhY^');
define('AUTH_SALT',        '6N*Q9[JB{o)5sfEAx~I+Fzy(;N+D&?tEMxuqhv>>`SBtMm!&%3wUMHm2xL#b~N;L');
define('SECURE_AUTH_SALT', '[zGY-N=J4K~b4e)#zT&fD:w{ac u83`3Y,$U3kqXY(](#T@}Q0EE+?hz%vgfmEjV');
define('LOGGED_IN_SALT',   ' ,m2-Ta~^HC!Q`Z#_eLUNP{HwD/b|zXweffk8|0(u>= n{ah!U;^a9@7m(m9nmz1');
define('NONCE_SALT',       'ya^98n1q7.@-Ot4]WNa3puy1h)qNN@j?rZf(8^`h0a4|QZW423WOCu3lX h:66vY');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp2_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
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

define('FS_METHOD', 'direct');