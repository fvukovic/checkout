<?php
/**
 * Grundeinstellungen für WordPress
 *
 * Zu diesen Einstellungen gehören:
 *
 * * MySQL-Zugangsdaten,
 * * Tabellenpräfix,
 * * Sicherheitsschlüssel
 * * und ABSPATH.
 *
 * Mehr Informationen zur wp-config.php gibt es auf der
 * {@link https://codex.wordpress.org/Editing_wp-config.php wp-config.php editieren}
 * Seite im Codex. Die Zugangsdaten für die MySQL-Datenbank
 * bekommst du von deinem Webhoster.
 *
 * Diese Datei wird zur Erstellung der wp-config.php verwendet.
 * Du musst aber dafür nicht das Installationsskript verwenden.
 * Stattdessen kannst du auch diese Datei als wp-config.php mit
 * deinen Zugangsdaten für die Datenbank abspeichern.
 *
 * @package WordPress
 */

// ** MySQL-Einstellungen ** //
/**   Diese Zugangsdaten bekommst du von deinem Webhoster. **/

/**
 * Ersetze datenbankname_hier_einfuegen mit dem Namen
 * mit dem Namen der Datenbank, die du verwenden möchtest.
 */
define('DB_NAME', 'checkout');

/**
 * Ersetze benutzername_hier_einfuegen
 * mit deinem MySQL-Datenbank-Benutzernamen.
 */
define('DB_USER', 'root');

/**
 * Ersetze passwort_hier_einfuegen mit deinem MySQL-Passwort.
 */
define('DB_PASSWORD', '');

/**
 * Ersetze localhost mit der MySQL-Serveradresse.
 */
define('DB_HOST', 'localhost');

/**
 * Der Datenbankzeichensatz, der beim Erstellen der
 * Datenbanktabellen verwendet werden soll
 */
define('DB_CHARSET', 'utf8mb4');

/**
 * Der Collate-Type sollte nicht geändert werden.
 */
define('DB_COLLATE', '');

/**#@+
 * Sicherheitsschlüssel
 *
 * Ändere jeden untenstehenden Platzhaltertext in eine beliebige,
 * möglichst einmalig genutzte Zeichenkette.
 * Auf der Seite {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * kannst du dir alle Schlüssel generieren lassen.
 * Du kannst die Schlüssel jederzeit wieder ändern, alle angemeldeten
 * Benutzer müssen sich danach erneut anmelden.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '2-tFJ#d8aY8lO5_r%?Gl5vlF%jRyF=xQLjJ_h+E0KVc9kIkjygcx1Hf:NcPz#?');
define('SECURE_AUTH_KEY',  '3cHSiC$z:j9#4bU*cdws0It-fBhJMzzd3fQL$ptX?ZV4#k:Zd+c+zMESEC:ndZ');
define('LOGGED_IN_KEY',    'k:n9ztS3#sL7oT1H-#fdmnL__Hx_#T=x!Rb5XZf-MpiVM*K=bbtogDmTNAdoLJ');
define('NONCE_KEY',        'fsX=OJ%:82N!@BkqkcLrsVOs7weW=0ZwzNsXx73p*X?NM880ow2:=%Fv4E4:xP');
define('AUTH_SALT',        'Lunr$@9p+qaOb!Q3R79fNwvUx@5MkG$xV8b$+eAinb%q3:8U_LhuS9iho@QRNg');
define('SECURE_AUTH_SALT', 'q1T*LJ?K5#LczEP*tpoIEiE5RPAeX%K?ZPDF*CXHM7jA_IPej%JuBRto@Mvg9z');
define('LOGGED_IN_SALT',   'q47:lyOU#!=g5dfmQD-QW4EssXSiIC*+oZs?dFKc1C7oXK9lNb02eotdbN@NNz');
define('NONCE_SALT',       'OpxMrU6XaC9PvItqtI*NhP57bvSg=J2Wbb=jq=4Y#kHIub$te00VIyb6sOMAi8');
define('WP_MEMORY_LIMI','128M');
/**#@-*/

/**
 * WordPress Datenbanktabellen-Präfix
 *
 * Wenn du verschiedene Präfixe benutzt, kannst du innerhalb einer Datenbank
 * verschiedene WordPress-Installationen betreiben.
 * Bitte verwende nur Zahlen, Buchstaben und Unterstriche!
 */
$table_prefix  = 'wp_';

/**
 * Für Entwickler: Der WordPress-Debug-Modus.
 *
 * Setze den Wert auf „true“, um bei der Entwicklung Warnungen und Fehler-Meldungen angezeigt zu bekommen.
 * Plugin- und Theme-Entwicklern wird nachdrücklich empfohlen, WP_DEBUG
 * in ihrer Entwicklungsumgebung zu verwenden.
 *
 * Besuche den Codex, um mehr Informationen über andere Konstanten zu finden,
 * die zum Debuggen genutzt werden können.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
 ini_set('display_errors','Off');
ini_set('error_reporting', E_ALL );
define('WP_DEBUG', true);
define('WP_DEBUG_DISPLAY', true);
define( 'WP_AUTO_UPDATE_CORE', true );
define( 'FS_METHOD', 'direct' );

/* Das war’s, Schluss mit dem Bearbeiten! Viel Spaß beim Bloggen. */
/* That's all, stop editing! Happy blogging. */

/** Der absolute Pfad zum WordPress-Verzeichnis. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Definiert WordPress-Variablen und fügt Dateien ein.  */
require_once(ABSPATH . 'wp-settings.php');

/* fixes safe_mode problems */
define('WP_TEMP_DIR', ABSPATH . 'wp-content/');
