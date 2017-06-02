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
define('DB_NAME', 'hairdresser');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'ZD~5n(Ejm`r;]8kwAfP8!Q2u<s%/=kgg#wixWIWm>t4H&~`lDeLP1V_%N*viCw>y');
define('SECURE_AUTH_KEY',  'raX*jn&6#USYct$$^cNJT{(i+Hp>N=dmJE$>lkg5IAXFo+Nk?1<nKI^7?}0_HL|e');
define('LOGGED_IN_KEY',    '3!:[Aw!SDcWaJF7)>][[FIkfL|(6U,D/E[o~(vaSf*!k[ttc#*QZ-FC7~Q&>S 2v');
define('NONCE_KEY',        '^sidR1NZXx5WtOIWpYsoA8_4,eXgOZ0]}P8h_,hx>so}^rO0ZZA@TI=p7/GcQpxR');
define('AUTH_SALT',        'a.m8 -Ve^JF{o.P-;AS_EOp&5YFO7VWz#Txt;8;xlE@5O3|[yE.q/9FI=B}7Y|p+');
define('SECURE_AUTH_SALT', 'zQv$zHNh.zK lvE*^V.E{M@b.YDPd?BEb@#(O,6lPZ32_oneJ.8b0B;YkGJoq*O,');
define('LOGGED_IN_SALT',   'AiFlOeReu}2tpS>3Bi(Sa=y.~t;|LD{JoiAVwkeP{*2 =Wnb>)p14OWM(kL9iXK-');
define('NONCE_SALT',       'O,)SV4h//M{1bYnrWu ]G>2Q4T27)T/p/nrN&(fLKgz@bVlhV%mylpf>H[.;jM_7');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'hair_';

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