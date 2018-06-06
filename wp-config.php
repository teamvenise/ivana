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

define('DB_NAME', 'ivana');



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

define('AUTH_KEY',         'T+=hNyCI&cm`C;S!|gL^/[vzg@z&J.w6{GqK#*dcbogg12zR8pud1O.zlr##$@a]');

define('SECURE_AUTH_KEY',  'k:RV.}<a0MzCUn-LPDAI@95MHewB#-SFn96Z]UrlY4$1LVtRJb^oMj7a:K%=X!Ja');

define('LOGGED_IN_KEY',    '9Pg:%T#$m}.ObGXBgEmWS&j6-eZ/-rq15_CL3_x^b{|DJ}&o1?z.!U-D[v=fC17[');

define('NONCE_KEY',        '4An$iRkhu+ae~-0i24J%D9e#JT!efAtCP>9/ipPj=fFlhFH$J@{$PrJ@<qxEmDW^');

define('AUTH_SALT',        'jO# p*=C@3nTS=XE.}aeb5HFh`T,zVxE{q1d2~#h.Bj[94Grn:(gb{X@UW7V&<sk');

define('SECURE_AUTH_SALT', 'D^i7&M{KXQe{>[l3wK=Hq79O,/Kbzwg(B@g)_&>EbIM^OURq!xIP16L%G`$Y^xN8');

define('LOGGED_IN_SALT',   '=m?#lsP#eBc6ef_#0/g+$fOQ`=3+Q.g_Ox)nW=Md.p!r]SeXR>#4ch&dDVKt.eu)');

define('NONCE_SALT',       'eoCR44ro9~AdbWt:AK.ltbz$mw}_jDmiLG6Ot8c Psl,CiQ.0K)pu&__)m; G{lk');

/**#@-*/



/**

 * Préfixe de base de données pour les tables de WordPress.

 *

 * Vous pouvez installer plusieurs WordPress sur une seule base de données

 * si vous leur donnez chacune un préfixe unique.

 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !

 */

$table_prefix  = 'iv_';



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