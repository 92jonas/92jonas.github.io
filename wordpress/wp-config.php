<?php
/**
 * Baskonfiguration för WordPress.
 *
 * Denna fil används av wp-config.php-genereringsskript under installationen.
 * Du behöver inte använda webbplatsen, du kan kopiera denna fil direkt till
 * "wp-config.php" och fylla i värdena.
 *
 * Denna fil innehåller följande konfigurationer:
 *
 * * Inställningar för MySQL
 * * Säkerhetsnycklar
 * * Tabellprefix för databas
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL-inställningar - MySQL-uppgifter får du från ditt webbhotell ** //
/** Namnet på databasen du vill använda för WordPress */
define('DB_NAME', 'mysql');

/** MySQL-databasens användarnamn */
define('DB_USER', 'root');

/** MySQL-databasens lösenord */
define('DB_PASSWORD', 'root');

/** MySQL-server */
define('DB_HOST', 'localhost');

/** Teckenkodning för tabellerna i databasen. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'Ai<P5_9LZUUtqfsxm[V6(s;q_ e&yRX6qSLlaQPH&kA5c7He3k3TWOc4b+y0$L(O');
define('SECURE_AUTH_KEY',  '@3o]kC1|:~&|q<BzROR{_O<k9?~$>Vv-@=Gamf9]I71Fde[FB)Zhi]L!7n21;8W7');
define('LOGGED_IN_KEY',    '~>lDl2dS H}8wUs7q3kKy/vFErw|evd{[d>iBeYBPWfB}onxwmu9LNd&>^#o My<');
define('NONCE_KEY',        'V661{GO9,9&+d-l?oMdAcok?`B2WN6SU-iWU]WDS=uD656fC[D@U[N.WTPypxx7-');
define('AUTH_SALT',        'E9Key?}aJ%J=;kE<TJ20NA(z7+N]$i1V,-nST#_PZcLtKo9,m![&knosW[Q~@{k{');
define('SECURE_AUTH_SALT', 'Vfj,,lstD^%@/W>9Uw%EI6@2MRl#V}>Me$TWqT;|--{,MT!.<y4$xx4[D>!o$@u ');
define('LOGGED_IN_SALT',   'F]fK*x74@$*5~b(mICicwM77JC|]Q}fS2TQYVFV (Q*jrvpz]Nzo)#7N.L`~7n{Q');
define('NONCE_SALT',       'e<}$RR&VnWAkei2#hvWSL&pC`OorZW7~gIRR N=uJ,&cPyfNq]U{6 B]%8R A{p3');

/**#@-*/

/**
 * Tabellprefix för WordPress Databasen.
 *
 * Du kan ha flera installationer i samma databas om du ger varje installation ett unikt
 * prefix. Endast siffror, bokstäver och understreck!
 */
$table_prefix  = 'wp_';

/** 
 * För utvecklare: WordPress felsökningsläge. 
 * 
 * Ändra detta till true för att aktivera meddelanden under utveckling. 
 * Det är rekommderat att man som tilläggsskapare och temaskapare använder WP_DEBUG 
 * i sin utvecklingsmiljö. 
 *
 * För information om andra konstanter som kan användas för felsökning, 
 * se dokumentationen. 
 * 
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */ 
define('WP_DEBUG', false);

/* Det var allt, sluta redigera här! Blogga på. */

/** Absoluta sökväg till WordPress-katalogen. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Anger WordPress-värden och inkluderade filer. */
require_once(ABSPATH . 'wp-settings.php');