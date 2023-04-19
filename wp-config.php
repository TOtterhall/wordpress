<?php
/**
 * Baskonfiguration för WordPress.
 *
 * Denna fil används av wp-config.php-genereringsskript under installationen.
 * Du behöver inte använda webbplatsens installationsrutin, utan kan kopiera
 * denna fil direkt till "wp-config.php" och fylla i alla värden.
 *
 * Denna fil innehåller följande konfigurationer:
 *
 * * Inställningar för databas
 * * Säkerhetsnycklar
 * * Tabellprefix för databas
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Databasinställningar - åtkomstuppgifter för databasen får du från ditt webbhotell ** //
/** Namnet på databasen du vill använda för WordPress */
define( 'DB_NAME', 'labb2-thereseotterhäll' );

/** Databasens användarnamn */
define( 'DB_USER', 'medie-admin' );

/** Databasens lösenord */
define( 'DB_PASSWORD', 'medie-admin' );

/** Databasserver */
define( 'DB_HOST', 'localhost' );

/** Teckenkodning för tabellerna i databasen. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kollationeringstyp för databasen. Ändra inte om du är osäker. */
define('DB_COLLATE', '');

/**#@+
 * Unika autentiseringsnycklar och salter.
 *
 * Ändra dessa till unika fraser!
 * Du kan generera nycklar med {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Du kan när som helst ändra dessa nycklar för att göra aktiva cookies obrukbara, vilket tvingar alla användare att logga in på nytt.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'cdb`,<4.F5?E!|F_ 48[0FGto($r|6Sn)IZVjz#c|Y@*#R:zA!&nZ)rI)9xp*fQT' );
define( 'SECURE_AUTH_KEY',  'w%890BIz6V!JG@GG}YDwMbn,MRem=Lm&}c w&;/*JOMHO>&0f&tJl.d8w6B#NDh&' );
define( 'LOGGED_IN_KEY',    '#5{o|o1p_4U@u1GKVnb9$8dTaH2k-&-TTCIx;[.iYJWT`Po COb<^)5HLpEp8D$u' );
define( 'NONCE_KEY',        '9Y&myO22=)qjEJ2#ep4>yCs=[WZ^TGx5J_cx0fdnDcgn=]+(d9,qRjY`B;WT?f/o' );
define( 'AUTH_SALT',        'LX1kD4Y:[*Y8@$A 49VcB,hR,8|b~qQa3Y$2hSW&,15s*^pNY5}+&dty`+a2w_>v' );
define( 'SECURE_AUTH_SALT', 'GQ@uWDM}ow3K/1l~nef?E$?wK)O~5ByCWV{L_DT8emrOU}o>mJKx?bAZ@n80cOa{' );
define( 'LOGGED_IN_SALT',   'd^@~&q}9VdW%5hBG._Tu#9Myr6bI78V+4BoZLN)em:=;Y!fv0ss[y%Ea{,ZgMWc4' );
define( 'NONCE_SALT',       'zoNX!4O!7<Q==r-fOX?/[wha!xF$re.-Y-k4bUG$:JPy4PPp2?.mQ-NeMyhSr4x ' );

/**#@-*/

/**
 * Tabellprefix för WordPress-databasen.
 *
 * Du kan ha flera installationer i samma databas om du ger varje installation ett unikt
 * prefix. Använd endast siffror, bokstäver och understreck!
 */
$table_prefix = 'wp_';

/** 
 * För utvecklare: WordPress felsökningsläge. 
 * 
 * Ändra detta till true för att aktivera meddelanden under utveckling. 
 * Det rekommenderas att man som tilläggsskapare och temaskapare använder WP_DEBUG 
 * i sin utvecklingsmiljö. 
 *
 * För information om andra konstanter som kan användas för felsökning, 
 * se dokumentationen. 
 * 
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */ 
define('WP_DEBUG', false);
/* Lägg in eventuella anpassade värden mellan denna rad och raden med "sluta redigera här". */




/* Det var allt, sluta redigera här och börja publicera! */

/** Absolut sökväg till WordPress-katalogen. */
if ( !defined('ABSPATH') )
	define('ABSPATH', __DIR__ . '/');

/** Anger WordPress-värden och inkluderade filer. */
require_once(ABSPATH . 'wp-settings.php');