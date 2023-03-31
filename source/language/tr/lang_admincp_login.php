<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_admincp_login.php by Valery Votintsev, codersclub.org
 *      Translated to Turkish by ulascemh
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'login_title'		=> 'Yönetici Panelime Giriş',//'登录管理中心',
	'login_username'	=> 'Kullanıcı Adı',//'用户名',
	'login_password'	=> 'Şifre',//'密　码',

	'submit'		=> 'Giriş',//'提交',
	'forcesecques'		=> 'zorunlu',//'必填项',
	'security_question'	=> 'Güvenlik Sorusu',//'提　问',
	'security_answer'	=> 'Cevap',//'回　答',
	'security_question_0'	=> 'Ekstra Güvenlik sorusu yok',//'无安全提问',
	'security_question_1'	=> 'Anne adı',//'母亲的名字',
	'security_question_2'	=> 'Büyükbabanın adı',//'爷爷的名字',
	'security_question_3'	=> 'Babamın doğduğu şehir',//'父亲出生的城市',
	'security_question_4'	=> 'Öğretmenlerinizden birinin adı',//'您其中一位老师的名字',
	'security_question_5'	=> 'Bilgisayarınızın modeli',//'您个人计算机的型号',
	'security_question_6'	=> 'En sevdiğiniz restoran adı',//'您最喜欢的餐馆名称',
	'security_question_7'	=> 'Ehliyetinizin son dört hanesi',//'驾驶执照的最后四位数字',

	'login_tips'		=> 'Discuz! PHP ve MySQL gibi gelişmiş teknolojileri kullanarak yüksek kalitede sosyal platformlar kurarmanızda yardımcı olur.En çok teknoloji ve sosyal ağlar için tercih edilir!',//'Discuz! 是一个采用 PHP 和 MySQL 等多种数据库构建的高效建站解决方案, 是众多社区网站首选技术品牌!',
	'login_nosecques'	=> 'Henüz güvenli bir giriş kullanmıyorsunuz, lütfen yönetim merkezine erişmeden önce kişisel merkezinizde güvenlik sorularınızı ayarlayın. <a href="forum.php?mod=memcp&action=profile&typeid=1">Buraya tıklayın</a> ve güvenlik soruları için ayarları girin.',//'您还没有使用安全登录，请在个人中心设置您的安全提问后，再访问管理中心。您可以 <a href="forum.php?mod=memcp&action=profile&typeid=1" target="_blank">点击这里</a> 进入安全提问的设置。',

	'login_cp_guest'	=> '<b>Giriş yapmadığınız için bu istek rededildi.</b><br><br>Lütfen <a href="member.php?mod=logging&action=login">giriş yapın</a> ve tekrar deneyin.',
	'login_cplock'		=> 'Yönetici paneliniz kilitli! <br>Lütfen <b> {ltime} </b>saniye sonra tekrar deneyin.',//'您的管理面板已经锁定!<br>请在 <b>{ltime}</b>秒以后重新访问管理中心',
	'login_user_lock'	=> 'Bu giriş isteği, hatalı giriş şifrelerinin sayısı nedeniyle reddedildi. Lütfen 15 dakika içinde tekrar deneyiniz.',//'由于您的登录密码错误次数过多,本次登录请求已经被拒绝. 请 15 分钟后重新尝试',
	'login_cp_noaccess'	=> '<b>Yönetim Merkezi (veya bu işlem) henüz sizin için kullanılabilir değil</b><br><br>Eyleminiz kaydedildi, lütfen bunu yasa dışı olarak denemeyin',//'<b>管理中心(或此项操作)尚未对您开放</b><br><br>您的此次操作已经记录, 请勿非法尝试',
	'noaccess'		=> 'Yönetici hakları (veya bu eylem) henüz sizin için kullanılabilir değil, lütfen site yöneticisiyle iletişime geçin',//'后台管理权限(或此项操作)尚未对您开放, 请联系站点管理员',


);

