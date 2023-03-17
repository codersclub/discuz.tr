<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_error.php by Valery Votintsev, codersclub.org
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'System Message'	=> 'Site Bilgileri',

	'config_notfound'		=> 'Configuration file &quot;config_global.php&quot; not found or unaccessible.',//'配置文件 "config_global.php" 未找到或者无法访问， 请确认您已经正确安装了程序',
	'template_notfound'		=> 'Template file &quot;$tplfile&quot; not found or unaccessible.',//'模版文件未找到或者无法访问',
	'directory_notfound'	=> 'Dizin yok veya erişilenemedi',
	'request_tainting'	=> 'Mevcut erişim isteği, sistem tarafından reddedildi (geçersiz karakterler)',
	'db_help_link'		=> 'Yardım için buraya tıklayın',
	'db_error_message'	=> 'Hata iletisi',
	'db_error_sql'			=> '<b>SQL</b>: $sql<br />',//'<b>SQL</b>: $sql<br />',
	'db_error_backtrace'		=> '<b>Backtrace</b>: $backtrace<br />',
	'db_error_no'		=> 'Hata kodu',
	'db_notfound_config'		=> 'Configuration file &quot;config_global.php&quot; not found or unaccessible.',//'配置文件 "config_global.php" 未找到或者无法访问。',
	'db_notconnect'		=> 'Veritabanı sunucusuna bağlanamıyor!',
	'db_security_error'	=> 'Sorgu güvenlik tehditleri',
	'db_query_sql'		=> 'Sorgu',
	'db_query_error'	=> 'Sorgu hatası',
	'db_config_db_not_found'	=> 'Veritabanı yapılandırma hatası,kontrol edin config_global.php dosyasini',
	'system_init_ok'		=> 'Site system initialization completed, please <a href="index.php">Click here</a> to enter.',//'网站系统初始化完成，请<a href="index.php">点击这里</a>进入',
	'backtrace'			=> 'operational info',//'运行信息',
	'error_end_message'		=> '<a href="http://{host}">{host}</a> has detailed records of this error message, which brings you access. We have apologize for the inconvenience.',//'<a href="http://{host}">{host}</a> 已经将此出错信息详细记录, 由此给您带来的访问不便我们深感歉意',
	'mobile_error_end_message'	=> '<a href="http://{host}">{host}</a> Error. Sorry for inconvenience.',//'<a href="http://{host}">{host}</a> 此错误给您带来的不便我们深感歉意',

	'file_upload_error_-101'	=> 'Yükleme başarısız! Yükleme dosyası mevcut değil ya da meşru değildir,geri',
	'file_upload_error_-102'	=> 'Yükleme hatası! Dosya resim dosyası değildir, lütfen geri dönün.',
	'file_upload_error_-103'	=> 'Yükleme hatası! Dosya okunamıyor, lütfen geri dönün.',
	'file_upload_error_-104'	=> 'Yükleme hatası! Dosya uzantısı tanımlanamadı, lütfen geri dönün.',
);

