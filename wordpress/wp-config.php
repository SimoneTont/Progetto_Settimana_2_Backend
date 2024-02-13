<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via web
 * puoi copiare questo file in «wp-config.php» e riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni del database
 * * Chiavi segrete
 * * Prefisso della tabella
 * * ABSPATH
 *
 * * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Impostazioni database - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define( 'DB_NAME', 'wp_progetto' );

/** Nome utente del database */
define( 'DB_USER', 'root' );

/** Password del database */
define( 'DB_PASSWORD', '' );

/** Hostname del database */
define( 'DB_HOST', 'localhost' );

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Il tipo di collazione del database. Da non modificare se non si ha idea di cosa sia. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chiavi univoche di autenticazione e di sicurezza.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 *
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tutti i cookie esistenti.
 * Ciò forzerà tutti gli utenti a effettuare nuovamente l'accesso.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '?T/*xJl%+>nn]<NW*%Qh QJXV+fS,=j8dlbBaCtTf|^})r&V|L?;._v=E_sT/`u=' );
define( 'SECURE_AUTH_KEY',  'Dy}z-p4l^k.eIOKccm5i?`(U+_XY%tM)Yj?xkaK3DSkt0@(h0#)cAab)RzD5Z8U0' );
define( 'LOGGED_IN_KEY',    ';13&+73vIL8;@63EctvJbE|sfptvBkEh8-tiss|Z&)TK0A)()n!*}_f$/e>CQju<' );
define( 'NONCE_KEY',        '{;wsm$2HWh)[TkZ2sPS-ENHoN%NA>?n#h;}H<Ktqz=^/jY7Wl1w_DqZ`xD}!5gN1' );
define( 'AUTH_SALT',        '<2s%5zyPz<fE9{C]#}.Nkr*rmSPT)7*BR!rRe%o_vbfR%oN^W#Tbf8Bw$,yF-G~N' );
define( 'SECURE_AUTH_SALT', 'd>93qHyTc38nmDrqnvJ7Y+-GD:waL]xKNDN/voS>4* aFGrWeo6=SF 2$&K3r(,O' );
define( 'LOGGED_IN_SALT',   's01NE/+hQ[o+fjn{OMm/dTN&EE0>[ts Vl:#w+q_@23 Y]<M_)OSV0!K+b.|%5W+' );
define( 'NONCE_SALT',       '0V Pes,o7,~6|$`G4cKoey,U[FNkO0j^OU)E,LJ28SurMI=#jNEW-BC,9UIyV(?F' );

/**#@-*/

/**
 * Prefisso tabella del database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco. Solo numeri, lettere e trattini bassi!
 */
$table_prefix = 'wp';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi durante lo sviluppo
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 *
 * Per informazioni sulle altre costanti che possono essere utilizzate per il debug,
 * leggi la documentazione
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Aggiungere qualsiasi valore personalizzato tra questa riga e la riga "Finito, interrompere le modifiche". */



/* Finito, interrompere le modifiche! Buona pubblicazione. */

/** Path assoluto alla directory di WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Imposta le variabili di WordPress ed include i file. */
require_once ABSPATH . 'wp-settings.php';
