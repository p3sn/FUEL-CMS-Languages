<?php 
$lang['module_backup'] = 'Backup';

$lang['data_backup_dashboard'] = 'Vergeet niet om regelmatig een <a href="'.fuel_url('tools/backup').'">backup te maken van je database</a>';
$lang['data_last_backup'] = 'laatste backup';
$lang['data_backup'] = 'Backup gemaakt.';
$lang['cron_db_backup'] = "Database geback-upt met de bestandsnaam: %s.";
$lang['cron_db_backup_asset'] = "Database en de afbeeldingen-map is geback-upt met de bestandsnaam: %s.";
$lang['cron_db_backed_up_already'] = 'Database is al geback-upt.';
$lang['cron_db_folder_not_writable'] = 'De map %1s is niet schrijfbaar. Zorg dat de map schrijfbaar is (chmod 755).';
$lang['cron_email'] = 'E-mail gestuurd naar %1s.';
$lang['cron_email_error'] = 'Er is een fout opgetreden bij het verzenden van een e-mail naar %1s.';
$lang['cron_email_subject'] = 'Data backup cronjob voor %1s.';

$lang['data_backup_instructions'] = 'Je staat op het punt om je database te back-uppen. Je kunt dan een gzip-bestand downloaden op je computer.';
$lang['data_backup_instructions_writable'] = 'Er wordt ook een bestand (met datum) opgeslagen op de server in de map:';
$lang['data_backup_instructions_not_writable'] = 'Om de backup op te kunnen slaan op de server, moeten de volgende mappen schrijfbaar zijn (chmod 755). <strong>Let op 
dat deze mappen niet bereikbaar zijn voor anderen. Je kunt de map ook met .htaccess blokkeren voor anderen</strong>:';
$lang['data_backup_not_writable'] = '(niet schrijfbaar)';
$lang['data_backup_include_assets'] = 'Inclusief de afbeeldingen-map?';
$lang['data_backup_no_backup'] = 'Nee, niet back-uppen';
$lang['data_backup_yes_backup'] = 'Ja, back-uppen';
