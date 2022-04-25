<?php

/** 
* 
* @pacchetto BB3Chat 
* @copyright (c) PPK 2015 
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2 
* 
* 
*/ 

se (! defined ( 'IN_PHPBB' )) 
{ 
Uscita; 
} 
if ( vuoto ( $ lang ) || ! is_array ( $ lang )) 
{ 
	$ lang = matrice (); 
} 

$ lang = array_merge ( $ lang , array ( 
	'ACP_BB3CHAT' => 'BB3Chat' , 
	'ACP_BB3CHAT_EXPLAIN'  =>  'Impostazioni' , 
	'ACP_BB3CHAT_CONFIG'  =>  'Impostazioni' , 

	'BB3CHAT_ENABLE'  =>  'Abilita chat' , 
	'BB3CHAT_ENABLE_OFF' => 'Spegni' , 
	'BB3CHAT_ENABLE_ON' => 'Abilitare' , 
	'BB3CHAT_ENABLE_AUTO'  =>  'abilitare con accesso automatico' , 
	'BB3CHAT_ENABLE_READ'  =>  'modalità di lettura' , 
	'BB3CHAT_ENABLE_EXPLAIN'  =>  'Consenti chat, due opzioni, 
		<br /><strong> option 1 </strong> abilita chat, con auto-login: l-utente entrerà automaticamente nella chat, modalità lettura: se l-utente non è connesso alla chat, verrà visualizzata solo la finestra del messaggio della chat, 
<br /><strong> opzione 2 </strong> modalità di funzionamento completa, se abilitata, la chat visualizzerà tutti i dati utente dei messaggi che sono nella chat, altrimenti solo i dati degli utenti che sono nella chat ' , 
	'BB3CHAT_GUESTS' => 'Chatta per gli ospiti' , 
	'BB3CHAT_GUESTS_BYIP' => 'Per indirizzo IP' , 
	'BB3CHAT_GUESTS_BYSESSION' => 'Per ID sessione' , 
	'BB3CHAT_GUESTS_EXPLAIN' => 'Due opzioni, 
<br /><strong> opzione 1 </strong> consente agli utenti non registrati di utilizzare la chat, 
<br /><strong> opzione 2 </strong> metodo per determinare gli ospiti, quando si determina in base all-indirizzo IP, tutti gli utenti con lo stesso indirizzo IP saranno considerati come un utente ' , 
	'BB3CHAT_GUESTS_OPTION' => 'Opzioni chat per ospiti' , 
	'BB3CHAT_GUESTS_OPTION_EXPLAIN' => 'Tre opzioni, 
<br /><strong> opzione 1 </strong> lingua della chat per gli ospiti (questa opzione verrà applicata solo per la modalità lettura), 
<br /><strong> opzione 2 </strong> il numero massimo per la selezione casuale e l-aggiunta di ospiti della chat ai nickname degli utenti, il numero verrà selezionato dall-intervallo [1 valore specificato in questa opzione], 
<br /><strong> opzione 3 </strong> il nome utente degli ospiti nella chat, può essere una variabile di lingua o una normale stringa ' , 
	'BB3CHAT_WAITTIME' => 'Ritardo nell-invio dei messaggi' , 
	'BB3CHAT_WAITTIME_EXPLAIN' => 'Dopo aver inviato un messaggio, il pulsante di invio messaggio è bloccato per il tempo specificato' , 
	'BB3CHAT_INACTIVE_TIME' => 'Tempo di inattività' , 
	'BB3CHAT_INACTIVE_TIME_EXPLAIN' => 'Tempo trascorso il quale l-utente sarà considerato come se avesse lasciato la chat' , 
	'BB3CHAT_MESSLENGTH' => 'Lunghezza del messaggio chat' , 
	'BB3CHAT_MESSLENGTH_EXPLAIN' => 'I messaggi più lunghi di questo valore verranno troncati (non più di 255)' , 
	'BB3CHAT_MUREFRESH' => 'Aggiorna finestra chat' , 
	'BB3CHAT_MUREFRESH_EXPLAIN' => 'Tempo di aggiornamento della finestra dell-elenco dei messaggi e degli utenti della chat (almeno 10 secondi)' , 
	'BB3CHAT_MESSDISPLAY' => 'Numero di messaggi chat' , 
	'BB3CHAT_MESSDISPLAY_EXPLAIN' => 'Mostra questo numero di messaggi di chat recenti' , 
	'BB3CHAT_CLEANUP_INTERVAL' => 'Cancella vecchi messaggi' , 
	'BB3CHAT_CLEANUP_INTERVAL_EXPLAIN' => 'Due opzioni, 
<br /><strong> opzione 1 </strong> frequenza di eliminazione dei vecchi messaggi dalla chat, 
<br /><strong> opzione 2 </strong> considera i messaggi datati più vecchi di quanto specificato ' , 
	'BB3CHAT_KILLTIME' => 'Rimozione di utenti inattivi' , 
	'BB3CHAT_KILLTIME_EXPLAIN' => 'Rimuovi gli utenti inattivi (che non lasciano messaggi) dalla chat durante questo periodo' , 
	'BB3CHAT_MARCHIVE' => 'Archivio messaggi' , 
	'BB3CHAT_MARCHIVE_EXPLAIN' => 'Visualizza il numero di messaggi specificato nell-archivio (0 - non visualizza l-archivio), i messaggi più grandi di quelli specificati nell-opzione "input" saranno considerati archiviati "' , 
	'BB3CHAT_MAXSMILES' => 'Numero massimo di emoticon' , 
	'BB3CHAT_MAXSMILES_EXPLAIN' => 'Il numero massimo di emoticon in un messaggio di chat (imposta 0 per disabilitare la restrizione)' , 
	'BB3CHAT_UMCLEAN' => 'Cancellare l'elenco di utenti, messaggi' , 
	'BB3CHAT_UMCLEAN_EXPLAIN' => 'Quattro opzioni, 
<br /><strong> opzione 1 </strong> elimina tutti gli utenti della loro chat (tranne quelli bannati), 
<br /><strong> opzione 2 </strong> riattiva tutti gli utenti bannati, 
<br /><strong> opzione 3 </strong> elimina i messaggi di chat obsoleti (tranne i messaggi archiviati), 
<br /><strong> opzione 4 </strong> elimina i messaggi archiviati dalla chat ' , 
	'BB3CHAT_AUTOKILL_ONPOST' => 'Espelli automaticamente all-invio' , 
	'BB3CHAT_AUTOKILL_ONPOST_EXPLAIN' => automaticamente un utente dalla chat se il suo messaggio è stato inviato alla chat prima del ritardo impostato nell-opzione <u> Ritarda invio messaggi </u>' , 
	'BB3CHAT_AUTOKILL_ONREFRESH' => 'Espulsione automatica durante l-aggiornamento' , 
	'BB3CHAT_AUTOKILL_ONREFRESH_EXPLAIN' => automaticamente un utente dalla chat se la pagina della chat viene aggiornata con un ritardo precedentemente impostato nell-opzione <u> Aggiorna finestra chat </u>' , 
	'BB3CHAT_ENABLE_PM' => 'Messaggi di chat privati' , 
	'BB3CHAT_ENABLE_PM_EXPLAIN' => 'Consenti uso di messaggi privati nella chat (devono essere assegnati i diritti utente corrispondenti)' , 
	'BB3CHAT_ENABLE_ACOMMANDS' => 'Team di amministrazione in chat' , 
	'BB3CHAT_ENABLE_ACOMMANDS_EXPLAIN' => 'Consenti uso dei comandi dell amministratore nella chat: elimina, banna utenti, cancella messaggi e utenti (devono essere assegnati i diritti utente corrispondenti)' , 
	'BB3CHAT_QBANTIME' => 'Tempo di ban veloce' , 
	'BB3CHAT_QBANTIME_EXPLAIN' => 'Quando si usa il ban rapido nella chat, l-utente sarà bannato per il tempo specificato qui, e tutti i suoi messaggi saranno cancellati dalla chat' , 
	'BB3CHAT_LOGS' => 'Registro azioni chat' , 
	'BB3CHAT_LOGS_EXPLAIN' => 'Accedi azioni chat, cinque opzioni, 
<br /><strong> opzione 1 </strong> registro di utenti esclusi, utenti non esclusi, 
<br /><strong> opzione 2 </strong> registro di eliminazione degli utenti, 
<br /><strong> opzione 3 </strong> registro di pulizia dei messaggi, archivio, elenco utenti, 
<br /><strong> opzione 4 </strong> registro per l-eliminazione di singoli messaggi di chat, 
<br /><strong> opzione 5 </strong> registro di modifica dei messaggi di chat ' , 
	'BB3CHAT_HEIGHT' => 'Impostazioni altezza chat' , 
	'BB3CHAT_HEIGHT_EXPLAIN' => 'Quattro opzioni, 
<br /><strong> opzione 1 </strong> modifica altezza chat, 
<br /><strong> opzione 2 </strong> altezza minima della chat, 
<br /><strong> opzione 3 </strong> altezza massima della chat, 
<br /><strong> opzione 4 </strong> altezza chat originale ' , 
	'BB3CHAT_ENABLE_BBCODES' => 'Codici BB nella chat' , 
	'BB3CHAT_ENABLE_BBCODES_OFF' => 'No' , 
	'BB3CHAT_ENABLE_BBCODES_BASE' => 'Base standard' , 
	'BB3CHAT_ENABLE_BBCODES_ALL' => 'Standard tutto' , 
	'BB3CHAT_ENABLE_BBCODES_NONST' => 'Non standard' , 
	'BB3CHAT_ENABLE_BBCODES_EXPLAIN' => 'Consenti l-uso dei codici bb nella chat (devono essere assegnati i diritti utente corrispondenti)' , 
	'BB3CHAT_EXCLUDE_BBCODES' => 'Escludi codici bb' , 
	'BB3CHAT_EXCLUDE_BBCODES_EXPLAIN' => 'Non visualizzare o elaborare i codici bb selezionati nella chat (funziona solo se vengono utilizzati codici bb: "Standard all"), la chat esclude automaticamente i codici bb contenenti script java o senza token nella stringa di sostituzione' , 
	'BB3CHAT_TRUE_EXCLUDE_BBCODES' => 'Escludi codici bb' , 
	'BB3CHAT_TRUE_EXCLUDE_BBCODES_EXPLAIN' => 'Se si seleziona Sì, escludi i codici bb selezionati sopra, altrimenti includi solo i codici bb indicati' , 
	'BB3CHAT_ENABLE_MAGICURL' => 'URL chat' , 
	'BB3CHAT_ENABLE_MAGICURL_EXPLAIN' => 'Converti automaticamente link www e email in cliccabili' , 
	'BB3CHAT_URL_REPLACE' => 'Sostituzione link' , 
	'BB3CHAT_URL_REPLACE_EXPLAIN' => 'Sostituisci i link www e email con il testo specificato, puoi usare una variabile di lingua (riga vuota - cancella il link)' , 
	'BB3CHAT_AVATARS' => 'Chat avatar' , 
	'BB3CHAT_AVATARS_EXPLAIN' => 'Mostra avatar in chat, due opzioni, 
<br /><strong> opzione 1 </strong> 0 - non visualizzare, un numero diverso da 0 indica la larghezza dell-avatar in pixel (la funzione avatar deve essere abilitata sul forum), 
<br /><strong> opzione 2 </strong> avatar predefinito (dovrebbe essere nella directory /ext/ppk/bb3chat/images/) ' , 
	'BB3CHAT_SOUNDS' => 'Suoni della chat' , 
	'BB3CHAT_SOUNDS_OFF' => 'no' , 
	'BB3CHAT_SOUNDS_INCHAT' => 'non in modalità di lettura' , 
	'BB3CHAT_SOUNDS_ALL' => 'sì' , 
	'BB3CHAT_SOUNDS_EXPLAIN' => 'Notifica sonora di nuovi messaggi di chat, tre opzioni, 
<br /><strong> opzione 1 </strong> abilita la notifica, 
<br /><strong> opzione 2 </strong> è abilitata per impostazione predefinita, 
<br /><strong> opzione 3 </strong> il file audio da riprodurre (dovrebbe trovarsi nella directory /ext/ppk/bb3chat/sound/) ' , 
	'BB3CHAT_ALLOW_POST_FLASH' => 'Consenti codice bb [flash]' , 
	'BB3CHAT_ALLOW_POST_FLASH_EXPLAIN' => 'Devono essere assegnati i diritti utente corrispondenti' , 
	'BB3CHAT_ALLOW_POST_IMG' => 'Consenti codice bb [img]' , 
	'BB3CHAT_ALLOW_POST_IMG_EXPLAIN' => 'Devono essere assegnati i diritti utente corrispondenti' , 
	'BB3CHAT_ALLOW_POST_URL' => 'Consenti codice bb [url]' , 
	'BB3CHAT_ALLOW_POST_URL_EXPLAIN' => 'Devono essere assegnati i diritti utente corrispondenti' , 
	'BB3CHAT_ALLOW_LINKS' => 'Consenti link nei messaggi' , 
	'BB3CHAT_ALLOW_LINKS_LOCALEMAIL' => 'Locale ed e-mail' , 
	'BB3CHAT_ALLOW_LINKS_EXPLAIN' => 'Se disabiliti l-opzione, tutti i link durante l-invio dei messaggi verranno eliminati o sostituiti con il testo dell'opzione sottostante (devono essere assegnati i diritti utente corrispondenti), questa opzione non disabilita l'uso dei link tramite codice bb [url]' , 
	'BB3CHAT_ALLOW_SMILIES' => 'Consenti emoticon' , 
	'BB3CHAT_ALLOW_SMILIES_EXPLAIN' => '' , 

	'LOG_CHAT_DELMESS' => '<strong> Messaggio utente cancellato dalla chat </strong>' , 
	'LOG_CHAT_EDITMESS' => '<strong>Messaggio chat utente modificato </strong>' , 
	'LOG_CHAT_UCLEAN' => '<strong> elenco degli utenti della chat è stato cancellato </strong>' , 
	'LOG_CHAT_MCLEAN' => '<strong> elenco dei messaggi di chat è stato cancellato </strong>' , 
	'LOG_CHAT_ACLEAN' => '<strong> Cancellato elenco dei messaggi di chat archiviati </strong>' , 
	'LOG_CHAT_UKICK' => '<strong> Utente rimosso dalla chat </strong>' , 
	'LOG_CHAT_UBAN' => '<strong> utente della chat è stato bannato </strong>' , 
	'LOG_CHAT_UQBAN' => '<strong> utente della chat è stato bannato e tutti i suoi messaggi di chat sono stati eliminati </strong>' , 
	'LOG_CHAT_UUNBAN' => '<strong> utente della chat è stato bannato </strong>' , 
	'LOG_CONFIG_BB3CHAT_CONFIG' => '<strong> Impostazioni chat modificate </strong>' , 
	'ACP_CONFIG_OPTION' => 'opzione' , 

	'TSEC' => 'sec' , 
	'TMIN' => 'min' , 
	'THOUR' => 'h' , 
	'GIORNO' => 'd' , 
	'DATA_PERIOD_SHORT' => array ( 'y' => 'g.' , 'm' => 'mese.' , 'd' => 'd.' , 'h' => 'ora.' , 'i' => 'min.' , 's' => 'sec.' ), 

	'ACL_CAT_PPKEXT' => 'Estensioni PPK' , 

	'ACL_U_CANVIEWCHATM' => '<span style="font-weight:bold;color:#C000C0;"> BB3Chat </span>: può vedere i messaggi della chat' , 
	'ACL_U_CANVIEWCHATU' => '<span style="font-weight:bold;color:#C000C0;"> BB3Chat </span>: può vedere gli utenti della chat' , 
	'ACL_U_CANDELCHATM' => '<span style="font-weight:bold;color:#C000C0;"> BB3Chat </span>: può eliminare i messaggi personali dalla chat' , 
	'ACL_U_CANEDITCHATM' => '<span style="font-weight:bold;color:#C000C0;"> BB3Chat </span>: può modificare i messaggi della chat personale' , 
	'ACL_U_CANADDCHATM' => '<span style="font-weight:bold;color:#C000C0;"> BB3Chat </span>: può inviare messaggi alla chat' , 
	'ACL_U_CANSKIPCHATKTIME' => '<span style="font-weight:bold;color:#C000C0;"> BB3Chat </span>: Può "bypassare" le restrizioni sul periodo di inattività nella chat' , 
	'ACL_U_CANHIDDENINCHAT' => '<span style="font-weight:bold;color:#C000C0;"> BB3Chat </span>: potrebbe essere nascosto nella chat' , 
	'ACL_U_CANVIEWHIDDINCHAT' => '<span style="font-weight:bold;color:#C000C0;"> BB3Chat </span>: può vedere gli utenti nascosti nella chat' , 
	'ACL_U_CANSENDCHATPM' => '<span style="font-weight:bold;color:#C000C0;"> BB3Chat </span>: può inviare messaggi di chat privati' , 
	'ACL_U_CANSKIPDISBUTTON' => '<span style="font-weight:bold;color:#C000C0;"> BB3Chat </span>: può "bypassare" disabilitando temporaneamente il pulsante di invio del messaggio' , 
	'ACL_U_CANUSESMILIES' => '<span style="font-weight:bold;color:#C000C0;"> BB3Chat </span>: può usare le emoticon nei messaggi' , 
	'ACL_U_CANUSEURL' => '<span style="font-weight:bold;color:#C000C0;"> BB3Chat </span>: può usare i link nei messaggi' , 
	'ACL_U_CANUSEBBCODES' => '<span style="font-weight:bold;color:#C000C0;"> BB3Chat </span>: può usare i codici BB nei messaggi' , 
	'ACL_U_CANUSEBBIMG' => '<span style="font-weight:bold;color:#C000C0;"> BB3Chat </span>: può usare il codice BB [img] nei messaggi' , 
	'ACL_U_CANUSEBBFLASH' => '<span style="font-weight:bold;color:#C000C0;"> BB3Chat </span>: può usare il codice BB [flash] nei messaggi' , 
	'ACL_U_CANUSEBBURL' => '<span style="font-weight:bold;color:#C000C0;"> BB3Chat </span>: può usare il codice BB [url] nei messaggi' , 
	'ACL_U_CANUSEACOMMANDS' => '<span style="font-weight:bold;color:#C000C0;"> BB3Chat </span>: può bannare ed eliminare utenti, cancellare la chat' , 
	'ACL_U_CANDELCHATM2' => '<span style="font-weight:bold;color:#C000C0;"> BB3Chat </span>: può rimuovere NON i messaggi personali dalla chat' , 
	'ACL_U_CANEDITCHATM2' => '<span style="font-weight:bold;color:#C000C0;"> BB3Chat </span>: può modificare NON messaggi di chat automatica' , 
	'ACL_U_CANVIEWARCHIVE' => '<span style="font-weight:bold;color:#C000C0;"> BB3Chat </span>: può leggere l-archivio dei messaggi della chat' , 
)); 
