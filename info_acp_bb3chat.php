<?php

/**
*
* @package BB3Chat
* @copyright (c) 2015 PPK
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
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
	'BB3CHAT_UMCLEAN' => 'Cancellare l-elenco di utenti, messaggi' , 
	'BB3CHAT_UMCLEAN_EXPLAIN' => 'Quattro opzioni, 
<br /><strong> opzione 1 </strong> elimina tutti gli utenti della loro chat (tranne quelli bannati), 
<br /><strong> opzione 2 </strong> riattiva tutti gli utenti bannati, 
<br /><strong> opzione 3 </strong> elimina i messaggi di chat obsoleti (tranne i messaggi archiviati), 
<br /><strong> opzione 4 </strong> elimina i messaggi archiviati dalla chat ' , 
	'BB3CHAT_AUTOKILL_ONPOST' => 'Espelli automaticamente all-invio' , 
	'BB3CHAT_AUTOKILL_ONREFRESH_EXPLAIN' => 'Elimina automaticamente un utente dalla chat se la pagina della chat viene aggiornata con un ritardo impostato in precedenza nel <u> Aggiorna la finestra della chat </u> option',
	'BB3CHAT_AUTOKILL_ONREFRESH' => 'Espulsione automatica durante l-aggiornamento' , 
	'BB3CHAT_AUTOKILL_ONREFRESH_EXPLAIN' => 'Automatically drop a user from the chat if the chat page is updated with a previously set delay in the <u> Update chat window </u> option',
	'BB3CHAT_ENABLE_PM' => 'Messaggi di chat privati',
	'BB3CHAT_ENABLE_PM_EXPLAIN' => 'Allow the use of private messages in the chat (the corresponding user rights must be assigned)',
	'BB3CHAT_ENABLE_ACOMMANDS' => 'Admin teams in chat',
	'BB3CHAT_ENABLE_ACOMMANDS_EXPLAIN' => 'Allow the use of administrator commands in the chat: delete, ban users, clear messages and users (the corresponding user rights must be assigned)',
	'BB3CHAT_QBANTIME' => 'Fast ban time',
	'BB3CHAT_QBANTIME_EXPLAIN' => 'When using the quick ban in the chat, the user will be banned for the time specified here, and all his messages will be deleted from the chat',
	'BB3CHAT_LOGS' => 'Chat action log',
	'BB3CHAT_LOGS_EXPLAIN' => 'Log in chat actions, five options,
		<br /><strong> option 1 </strong> log of user bans, unbanned users,
		<br /><strong> option 2 </strong> user deletion log,
		<br /><strong> option 3 </strong> message cleaning log, archive, user list,
		<br /><strong> option 4 </strong> log for deleting single chat messages,
		<br /><strong> option 5 </strong> chat message editing log ',
	'BB3CHAT_HEIGHT' => 'Chat height settings',
	'BB3CHAT_HEIGHT_EXPLAIN' => 'Quattro opzioni,
		<br /><strong> opzione 1 </strong> pitch change chat height,
		<br /><strong> opzione 2 </strong> minimum chat height,
		<br /><strong> opzione 3 </strong> maximum chat height,
		<br /><strong> opzione 4 </strong> original chat height ',
	'BB3CHAT_ENABLE_BBCODES' => 'BB codes in the chat',
	'BB3CHAT_ENABLE_BBCODES_OFF' => 'No',
	'BB3CHAT_ENABLE_BBCODES_BASE' => 'Standard base',
	'BB3CHAT_ENABLE_BBCODES_ALL' => 'Standard all',
	'BB3CHAT_ENABLE_BBCODES_NONST' => 'Non-standard',
	'BB3CHAT_ENABLE_BBCODES_EXPLAIN' => 'Allow the use of bb codes in the chat (the corresponding user rights must be assigned)',
	'BB3CHAT_EXCLUDE_BBCODES' => 'Exclude bb codes',
	'BB3CHAT_EXCLUDE_BBCODES_EXPLAIN' => 'Do not display or process selected bb codes in the chat (only works if bb codes are used: “Standard all”), the chat automatically excludes bb codes containing java script or without tokens in the replacement string' ,
	'BB3CHAT_TRUE_EXCLUDE_BBCODES' => 'Exclude bb codes',
	'BB3CHAT_TRUE_EXCLUDE_BBCODES_EXPLAIN' => 'If Yes is selected, exclude the bb codes selected above, otherwise, include only the indicated bb codes',
	'BB3CHAT_ENABLE_MAGICURL' => 'chat URL',
	'BB3CHAT_ENABLE_MAGICURL_EXPLAIN' => 'Automatically convert www and email links to clickable',
	'BB3CHAT_URL_REPLACE' => 'Replacing links',
	'BB3CHAT_URL_REPLACE_EXPLAIN' => 'Replace www and email links with the specified text, you can use a language variable (empty line - delete the link)',
	'BB3CHAT_AVATARS' => 'Chat avatars',
	'BB3CHAT_AVATARS_EXPLAIN' => 'Display avatars in chat, two options,
		<br /><strong> option 1 </strong> 0 - do not display, a number other than 0 means the width of the avatar in pixels (the avatar function must be enabled on the forum),
		<br /><strong> option 2 </strong> default avatar (should be in the directory /ext/ppk/bb3chat/images/) ',
	'BB3CHAT_SOUNDS' => 'Chat sounds',
	'BB3CHAT_SOUNDS_OFF' => 'no',
	'BB3CHAT_SOUNDS_INCHAT' => 'not in read mode',
	'BB3CHAT_SOUNDS_ALL' => 'yes',
	'BB3CHAT_SOUNDS_EXPLAIN' => 'Sound notification of new chat messages, three options,
		<br /><strong> option 1 </strong> enable notification,
		<br /><strong> option 2 </strong> is enabled by default,
		<br /><strong> option 3 </strong> the audio file to play (should be in the directory /ext/ppk/bb3chat/sound/) ',
	'BB3CHAT_ALLOW_POST_FLASH' => 'Allow bb code [flash]',
	'BB3CHAT_ALLOW_POST_FLASH_EXPLAIN' => 'The corresponding user rights must be assigned',
	'BB3CHAT_ALLOW_POST_IMG' => 'Allow bb code [img]',
	'BB3CHAT_ALLOW_POST_IMG_EXPLAIN' => 'The corresponding user rights must be assigned',
	'BB3CHAT_ALLOW_POST_URL' => 'Allow bb code [url]',
	'BB3CHAT_ALLOW_POST_URL_EXPLAIN' => 'The corresponding user rights must be assigned',
	'BB3CHAT_ALLOW_LINKS' => 'Allow links in messages',
	'BB3CHAT_ALLOW_LINKS_LOCALEMAIL' => 'Local and email',
	'BB3CHAT_ALLOW_LINKS_EXPLAIN' => 'If you disable the option, all links when sending messages will be deleted or replaced with text from the option below (the corresponding user rights must be assigned), this option does not disable the use of links via bb code [url]',
	'BB3CHAT_ALLOW_SMILIES' => 'Allow emoticons',
	'BB3CHAT_ALLOW_SMILIES_EXPLAIN' => '',

	'LOG_CHAT_DELMESS' => '<strong> Deleted user message from chat </strong>',
	'LOG_CHAT_EDITMESS' => '<strong> Edited user chat message </strong>',
	'LOG_CHAT_UCLEAN' => '<strong> The list of chat users has been cleared </strong>',
	'LOG_CHAT_MCLEAN' => '<strong> The list of chat messages has been cleared </strong>',
	'LOG_CHAT_ACLEAN' => '<strong> Cleared the list of archive chat messages </strong>',
	'LOG_CHAT_UKICK' => '<strong> Removed user from chat </strong>',
	'LOG_CHAT_UBAN' => '<strong> The chat user has been banned </strong>',
	'LOG_CHAT_UQBAN' => '<strong> The chat user has been banned and all his chat messages have been deleted </strong>',
	'LOG_CHAT_UUNBAN' => '<strong> Chat user has been banned </strong>',
	'LOG_CONFIG_BB3CHAT_CONFIG' => '<strong> Chat settings changed </strong>',
	'ACP_CONFIG_OPTION' => 'option',

	'TSEC' => 'sec',
	'TMIN' => 'min',
	'THOUR' => 'h',
	'TDAY' => 'd',
	'DATA_PERIOD_SHORT' => array ('y' => 'g.', 'm' => 'month.', 'd' => 'd.', 'h' => 'hour.', 'i' => 'min.', 's' => 'sec.'),

	'ACL_CAT_PPKEXT' => 'PPK extensions',

	'ACL_U_CANVIEWCHATM' => '<span style="font-weight:bold;color:#C000C0;"> BB3Chat </span>: Can see chat messages',
	'ACL_U_CANVIEWCHATU' => '<span style="font-weight:bold;color:#C000C0;"> BB3Chat </span>: Can see chat users',
	'ACL_U_CANDELCHATM' => '<span style="font-weight:bold;color:#C000C0;"> BB3Chat </span>: Can delete self messages from the chat',
	'ACL_U_CANEDITCHATM' => '<span style="font-weight:bold;color:#C000C0;"> BB3Chat </span>: Can edit self chat messages',
	'ACL_U_CANADDCHATM' => '<span style="font-weight:bold;color:#C000C0;"> BB3Chat </span>: Can send messages to chat',
	'ACL_U_CANSKIPCHATKTIME' => '<span style="font-weight:bold;color:#C000C0;"> BB3Chat </span>: Can "bypass" the restrictions on the period of inactivity in the chat',
	'ACL_U_CANHIDDENINCHAT' => '<span style="font-weight:bold;color:#C000C0;"> BB3Chat </span>: May be hidden in the chat',
	'ACL_U_CANVIEWHIDDINCHAT' => '<span style="font-weight:bold;color:#C000C0;"> BB3Chat </span>: Can see hidden users in chat',
	'ACL_U_CANSENDCHATPM' => '<span style="font-weight:bold;color:#C000C0;"> BB3Chat </span>: Can send private chat messages',
	'ACL_U_CANSKIPDISBUTTON' => '<span style="font-weight:bold;color:#C000C0;"> BB3Chat </span>: May "bypass" temporarily disabling the send message button',
	'ACL_U_CANUSESMILIES' => '<span style="font-weight:bold;color:#C000C0;"> BB3Chat </span>: Can use emoticons in messages',
	'ACL_U_CANUSEURL' => '<span style="font-weight:bold;color:#C000C0;"> BB3Chat </span>: Can use links in messages',
	'ACL_U_CANUSEBBCODES' => '<span style="font-weight:bold;color:#C000C0;"> BB3Chat </span>: Can use BB codes in messages',
	'ACL_U_CANUSEBBIMG' => '<span style="font-weight:bold;color:#C000C0;"> BB3Chat </span>: Can use BB code [img] in messages',
	'ACL_U_CANUSEBBFLASH' => '<span style="font-weight:bold;color:#C000C0;"> BB3Chat </span>: Can use BB code [flash] in messages',
	'ACL_U_CANUSEBBURL' => '<span style="font-weight:bold;color:#C000C0;"> BB3Chat </span>: Can use BB code [url] in messages',
	'ACL_U_CANUSEACOMMANDS' => '<span style="font-weight:bold;color:#C000C0;"> BB3Chat </span>: Can ban and delete users, clear chat',
	'ACL_U_CANDELCHATM2' => '<span style="font-weight:bold;color:#C000C0;"> BB3Chat </span>: Can remove NOT self messages from the chat',
	'ACL_U_CANEDITCHATM2' => '<span style="font-weight:bold;color:#C000C0;"> BB3Chat </span>: Can edit NOT self chat messages',
	'ACL_U_CANVIEWARCHIVE' => '<span style="font-weight:bold;color:#C000C0;"> BB3Chat </span>: Can read chat message archive',
));
