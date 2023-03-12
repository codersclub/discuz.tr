<?php
//------------------------------------------------------
// INTERNATIONAL UCenter v.1.6.0 (Multilingual)
// by Valery Votintsev, codersclub.org
//------------------------------------------------------
// Based on UCenter 1.6.0, (c) Comsenz.inc, discuz.net
//------------------------------------------------------
// Turkish Language Pack
// by Valery Votintsev, codersclub.org
//------------------------------------------------------

$lang = array(
	'please_login'			=> 'Please Re-login',
	'receiver_no_exists'		=> 'The receiver does not exists',
	'pm_save_succeed'		=> 'Message Saved as Draft successfully',
	'pm_send_succeed'		=> 'Message to $sent was sent successfully',
	'pm_send_announce_succeed'	=> 'Public Message Sent successfully',
	'pm_send_ignore'		=> 'Send Message Failed',
	'pm_delete_succeed'		=> 'Message Deleted Successfully',
	'pm_delete_invalid'		=> 'Unable to delete the message',
	'pm_unread'			=> 'Current message was marked as Unread',
	'blackls_updated'		=> 'Ignore List was updated',
	'pm_kickmember_succeed'		=> 'The member successfully kicked out from the group chat',
	'pm_appendmember_succeed'	=> 'New member successfully joined to the group chat',
	'pm_appendmember_invalid'	=> 'Failed to add a new members',
	'pm_send_chatpmmemberlimit_error'	=> 'The maximum number of group chat exceeded',
	'pm_send_pmfloodctrl_error'		=> 'You are sending short messages in too short interval! Please send later.',
	'pm_send_privatepmthreadlimit_error'	=> 'You have exceeded the maximum number of messages per 24 hours',
	'pm_send_chatpmthreadlimit_error'	=> 'You have exceeded the maximum number of group chat messages per 24 hours',
	'pm_clear_processing'			=> 'Processing messages from current to next ',
	'pm_clear_succeed'			=> 'Operation successfully completed',
	'pm_delete_noselect'			=> 'Please select messages for processing',

	'db_export_filename_invalid'	=> 'You have not enter the backup file name, or you use the invalid extension, please return.',
	'db_export_file_invalid'	=> 'Data file can not be saved to the host, please check the folder permissions.',
	'db_export_multivol_redirect'	=> 'Volumes: Data file #$volume was created successfully, the program will continue automatically.',
	'db_export_multivol_succeed'	=> 'Congratulations, all the backup files was created. The Backup is completed.',
	'db_import_multivol_succeed'	=> 'MultiVolume Data was imported to the database successfully.',
	'db_import_file_illegal'	=> 'The Data file is not exists: The host is not allowed to upload file or the file is too large.',
	'db_import_multivol_redirect'	=> 'Volume Data #$volume was imported to the database successfully, the program will import other volumes automatically.',
	'db_back_api_url_invalid'	=> 'Unable to connect this application backup port, please copy the file under Ucenter ROOT "api/dbbak.php" to this application "API" folder',
	'db_back_dos8p3_failed'		=> 'The server has enabled DOS 8.3 file name support, in order to avoid the possible risk of database blasting, online database backup is not allowed',
	'delete_dumpfile_success'	=> 'Bakup file Deleted successfully',
	'delete_dumpfile_redirect'	=> 'The backup file # of $appname deleted successfully, the program will delete other application backup files automatically.',
	'dbback_error_code_1'		=> 'Unable to create folder',
	'dbback_error_code_2'		=> 'Write backup file failed',
	'dbback_error_code_3'		=> 'SQL Query error',
	'dbback_error_code_4'		=> 'The directory is empty or does not exists',
	'dbback_error_code_5'		=> 'Backup file Not found',
	'dbback_error_code_6'		=> 'Backup files is missing',
	'dbback_error_code_7'		=> 'The directory is not exists',
	'dbback_error_code_8'		=> 'Delete backup file failed',
	'dbback_error_code_9'		=> 'The backup API does not support this type of backup',
	'undefine_error'		=> 'Unknown Error',

	'app_add_url_invalid'		=> 'Ivalid API URL',
	'app_add_ip_invalid'		=> 'Invalid IP',
	'app_add_name_invalid'		=> 'Application name is invalid or duplicates with other applications. Please return to change',
	'read_plugin_invalid'		=> 'Read Plugin Failed',

	'syncappcredits_updated'	=> 'Application Money Policy Synchronized Successfully',

	'note_succeed'			=> 'Notified successfully',
	'note_false'			=> 'Notification failed',
	'no_permission_for_this_module'	=> 'You have no permission to manage module',
	'admin_user_exists'		=> 'This username is already exists, please return.',

	'mail_succeed'			=> 'Mail Sent Succeessfully',
	'mail_false'			=> 'Send Mail Failed',
	
	'user_edit_noperm'		=> 'You have no permission to edit this user',

	'appid_invalid'			=> 'Illegal Application ID',
	'app_apifile_not_exists'	=> 'The file "#$apifile" does not exists, please check the application path.',
	'app_apifile_too_low'		=> 'The API file "#$apifile" version is too low',
	'app_path_not_exists'		=> 'This path is not exists, please check',
	'pm_send_seccode_error'		=> 'Incorrect Security Code',
	'pm_send_regdays_error'		=> 'You can not send message within #$pmsendregdays day(s) after the registration',
	'pm_send_limit1day_error'	=> 'Sorry, you have reached the 24 hours messages limit, please return.',
	'pm_send_floodctrl_error'	=> 'Sorry, you try to send messages too fast, please return',
	
	'file_check_failed'		=> 'Checked file does not exist, can not check',
	'replacemykey_succeed'		=> 'The key update is successful, please update the cache and check the status of each subordinate application',
	'replacemykey_false'		=> 'The key update failed, please check whether the file is writable or the database is normal, if necessary, please reconfigure the UC_KEY of each subordinate application to ensure normal work',
	'replacemykey_no_confirm'	=> 'Please confirm the risk prompt before proceeding',
);