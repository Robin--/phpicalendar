<?php

// Finnish language include
// For version 0.9 PHP iCalendar
//
// Translation by Kari Somby (kari.somby@ramk.fi)
//
// Submit new translations to chad@chadsdomain.com



$day_lang			= 'P&auml;iv&auml;';
$week_lang			= 'Viikko';
$month_lang			= 'Kuukausi';
$year_lang			= 'Vuosi';
$calendar_lang		= 'Kalenteri';
$next_day_lang		= 'Seuraava P&auml;iv&auml;';
$next_month_lang	= 'Seuraava Kuukausi';
$next_week_lang		= 'Seuraava Viikko';
$next_year_lang		= 'Seuraava Vuosi';
$last_day_lang		= 'Edellinen P&auml;iv&auml;';
$last_month_lang	= 'Edellinen Kuukausi';
$last_week_lang		= 'Edellinen Viikko';
$last_year_lang		= 'Edellinen Vuosi';
$subscribe_lang		= 'Tilaa';
$download_lang		= 'Lataa tiedosto';
$powered_by_lang 	= 'Powered by';
$event_lang			= 'Tapahtuma';
$event_start_lang	= 'Aloitusaika';
$event_end_lang		= 'Lopetusaika';
$this_months_lang	= 'T&auml;m&auml;n Kuukauden tapahtumat';
$date_lang			= 'P&auml;iv&auml;';
$summary_lang		= 'Yhteenveto';
$all_day_lang		= 'Koko p&auml;iv&auml;n tapahtuma';
$notes_lang			= 'Muistiinpanot';
$this_years_lang	= 'T&auml;m&auml;n Vuoden tapahtumat';
$today_lang			= 'Today';
$this_week_lang		= 'T&auml;m&auml; Viikko';
$this_month_lang	= 'T&auml;m&auml; Kuukausi';
$jump_lang			= 'Siirry';
$tomorrows_lang		= 'Huomisen Tapahtumat';
$goday_lang			= 'Mene T&auml;h&auml;n P&auml;iv&auml;&auml;n';
$goweek_lang		= 'Mene T&auml;h&auml;n Viikkoon';
$gomonth_lang		= 'Mene T&auml;h&auml;n Kuukauteen';
$goyear_lang		= 'Mene T&auml;h&auml;n Vuoteen';
$search_lang		= 'Etsi'; // the verb
$results_lang		= 'Etsinn&auml;n Tulokset';
$query_lang			= 'Kysely'; // will be followed by the search query
$no_results_lang	= 'Tapahtumia ei l&ouml;ytynyt';
$goprint_lang		= 'Tulostettava versio';
$time_lang			= 'Aika';
$summary_lang		= 'Yhteenveto';
$description_lang	= 'Selitys';
$this_site_is_lang		= 'T&auml;m&auml; sivusto on';
$no_events_day_lang		= 'Ei tapahtumia t&auml;n&auml;&auml;n.';
$no_events_week_lang	= 'Ei tapahtumia t&auml;ll&auml; viikolla.';
$no_events_month_lang	= 'Ei tapahtumia t&auml;ss&auml; kuussa.';
$rss_day_date			= 'g:i A';  // Lists just the time
$rss_week_date			= '%b %e';  // Lists just the day
$rss_month_date			= '%b %e';  // Lists just the day
$rss_language			= 'fi-fi';

// new in 0.9 ----------------------

$search_took_lang		= 'Etsimiseen meni %s sekuntia';
$recurring_event_lang	= 'Toistuva tapahtuma';
$exception_lang			= 'Poikkeus';
$no_query_lang			= 'Kysely&auml; ei annettu';
$preferences_lang		= 'Preferences';
$printer_lang			= 'Printer';
$select_lang_lang		= 'Select your default language:';
$select_cal_lang		= 'Select your default calendar:';
$select_view_lang		= 'Select your default view:';
$select_time_lang		= 'Select your default start time:';
$select_day_lang		= 'Select your default start day of week:';
$select_style_lang		= 'Select your default style:';
$set_prefs_lang			= 'Set preferences';
$completed_date_lang	= 'Completed on';
$completed_lang			= 'Completed';
$created_lang			= 'Created:';
$due_lang				= 'Due:';
$priority_lang			= 'Priority:';
$priority_high_lang		= 'High';
$priority_low_lang		= 'Low';
$priority_medium_lang	= 'Medium';
$priority_none_lang		= 'None';
$status_lang			= 'Status:';
$todo_lang				= 'To do items';
$unfinished_lang		= 'Unfinished';

// $format_recur, items enclosed in % will be substituted with variables
$format_recur_lang['delimiter']	= ', ';								// ie, 'one, two, three'

$format_recur_lang['yearly']		= array('vuosi','vuotta');		// for these, put singular
$format_recur_lang['monthly']		= array('kuukausi','kuukautta');		// and plural forms
$format_recur_lang['weekly']		= array('viikko','viikkoa');		// these will be %freq%
$format_recur_lang['daily']			= array('p&auml;iv&auml;','p&auml;iv&auml;&auml;');			// in the replacement below
$format_recur_lang['hourly']		= array('tunti','tuntia');
$format_recur_lang['minutely']		= array('minuutti','minuuttia');
$format_recur_lang['secondly']		= array('sekuntti','sekunttia');

$format_recur_lang['start']			= 'Joka %int% %freq% %for%';	// ie, 'Every 1 day until January 4' or 'Every 1 day for a count of 5'
$format_recur_lang['until']			= '%date% asti';				// ie, 'until January 4'
$format_recur_lang['count']			= '%int% kertaa';		// ie, 'for 5 times'

$format_recur_lang['bymonth']		= 'Kuukaudet: %list%';			// ie, 'In months: January, February, March'
$format_recur_lang['bymonthday']	= 'P&auml;iv&auml;t: %list%';			// ie, 'On dates: 1, 2, 3, 4'
$format_recur_lang['byday']			= 'Viikonp&auml;iv&auml;t: %list%';			// ie, 'On days: Mon, Tues, Wed, Thurs'

// ---------------------------------

$daysofweek_lang			= array ('Sunnuntai','Maanantai','Tiistai','Keskiviikko','Torstai','Perjantai','Lauantai');
$daysofweekshort_lang		= array ('Su','Ma','Ti','Ke','To','Pe','La');
$daysofweekreallyshort_lang	= array ('S','M','T','K','T','P','L');
$monthsofyear_lang			= array ('Tammikuu','Helmikuu','Maaliskuu','Huhtikuu','Toukokuu','Kes&auml;kuu','Hein&auml;kuu','Elokuu','Syyskuu','Lokakuu','Marraskuu','Joulukuu');
$monthsofyearshort_lang		= array ('Tammi','Helmi','Maalis','Huhti','Touko','Kes&auml;','Hein&auml;','Elo','Syys','Loka','Marras','Joulu');

// For time formatting, check out: http://www.php.net/manual/en/function.date.php
//$timeFormat = 'g:i A';
$timeFormat = 'H:i';
$timeFormat_small = 'g:i';

// For date formatting, see note below
$dateFormat_day = '%A, %e %Bta';
$dateFormat_week = '%e %B';
$dateFormat_week_list = '%a, %e %b';
$dateFormat_week_jump = '%b %e';
$dateFormat_month = '%B %Y';
$dateFormat_month_list = '%A, %B %e';

/*
Notes about dateFormat_*
	The pieces are similar to that of the PHP function strftime(), 
	however only the following is supported at this time:
	
	%A - the full week day name as specified in $daysofweek_lang
	%a - the shortened week day name as specified in $daysofweekshort_lang
	%B - the full month name as specified in $monthsofyear_lang
	%b - the shortened month name as specified in $monthsofyearshort_lang
	%e - the day of the month as a decimal number (1 to 31)
	%Y - the 4-digit year

	If this causes problems with representing your language accurately, let
	us know. We will be happy to modify this if needed.
*/

// Error messages - %s will be replaced with a variable
$error_title_lang = 'Virhe!';
$error_window_lang = 'Tapahtui virhe!';
$error_calendar_lang = 'Kalenteria "%s" k&auml;siteltiin virheen sattuessa.';
$error_path_lang = 'Polkua: "%s" ei voi avata';
$error_back_lang = 'Ole hyv&auml; ja k&auml;yt&auml; "Takaisin" nappia palataksesi takaisin.';
$error_remotecal_lang = 'T&auml;m&auml; palvelin sallii vain hyv&auml;ksyttyjen et&auml;kalentereiden k&auml;yt&ouml;n.';
$error_restrictedcal_lang = 'Yritit k&auml;ytt&auml;&auml; kalenteria, jonka k&auml;ytt&ouml; on rajoitettu.';
$error_invalidcal_lang = 'Ei kelvollinen kalenterin nimi. Ole hyv&auml; ja yrit&auml; toista kalenteria.';

?>