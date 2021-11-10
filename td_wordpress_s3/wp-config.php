<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'td-wordpress-s3' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'PEBvVl*~wtEbW7V^C4qh7fxUNuTDRc3e~HtuY/|7UNmf(VjVQgc<C+,jqywb4CLh' );
define( 'SECURE_AUTH_KEY',  'Q8>G#pbA-i<B*`U$q8kzxC67U?prGqIWazpK*3F)|Z-t>>A|&R*?t_%)0P2xpaHN' );
define( 'LOGGED_IN_KEY',    'ccc&h(IE?Fu[lTk>ao8FI,ME=bN3;-Y-2r9ljaFE$zld>aAE;MYT_,^ugP>mE9Q?' );
define( 'NONCE_KEY',        '9{4qA(<)$tsB@iV9d1r&U;Ln[VkrkqZaSPp.S.!6.CiM>1&ww6JALQ{?@va1p&tw' );
define( 'AUTH_SALT',        'pUIyBN[+rtN6iD<*l^%h`$sXD>^;f0`uXp4&1v[0m7HTKOr-J``JLDnZv?cEqm?!' );
define( 'SECURE_AUTH_SALT', ',1,WZx<pC[Pf3lu~$8g zMt)%Kk7+VwGK_Sl/DiCO)KGGelz1fH![kAkcf{Kjbg`' );
define( 'LOGGED_IN_SALT',   '([$,@yWH)vs/Xk~0?K4jeXZ_S6R*B?guENn9;J1/dJxS!c&7P0nPV@]*#/c4yQFg' );
define( 'NONCE_SALT',       '&H$0{;60zmW|H.*;pI@]R9ct,|45F|Mo]`Y,QZbJ%:<NcecVyd}]#*m:4?hBqY`}' );
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
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
