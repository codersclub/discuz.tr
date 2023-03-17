<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_custom.php by Valery Votintsev, codersclub.org
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'custom_name'		=> 'Özel Reklam',//'自定义广告',
	'custom_desc'		=> 'Özel reklam kodunu temaya yada HTML dosyasına ekle.<br /><br />
				<a href="javascript:;" onclick="prompt(\'Lüffen aşağıda kodu temaya kopyalayın (CTRL+C) \', \'<!--{ad/custom_'.$_GET['customid'].'}-->\')" />Internal js call/a>&nbsp;
				<a href="javascript:;" onclick="prompt(\'Lüffen aşağıda kodu HTML dosyasına kopyalayın (CTRL+C) \', \'&lt;script type=\\\'text/javascript\\\' src=\\\''.$_G['siteurl'].'api.php?mod=ad&adid=custom_'.$_GET['customid'].'\\\'&gt;&lt;/script&gt;\')" />External js call</a>',
	'custom_id_notfound'	=> 'Özel reklam yok',//'自定义广告不存在',
	'custom_codelink'	=> 'Yerel js çağırma',//'内部调用',
	'custom_text'		=> 'Özel reklam',//'自定义广告',
);

