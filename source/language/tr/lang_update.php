<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_update.php by Valery Votintsev, codersclub.org
 *      Translated to Turkish by ulascemh
 */

$lang = array(

//===========================
// Main Update Procedure
//---------------------------
//utility/update.php

	'del_update_lock'		=> 'Önce sunucuya ftp ile giriş yapmalı, ./data/update.lock dosyasını manuel olarak silmeli ve ardından bu sayfayı yeniden başlatmalısınız.',//'请您先登录服务器ftp,手工删除 ./data/update.lock 文件,再次运行本文件进行升级.',
	'sql_file'			=> 'SQL dosyaları ',//'SQL文件 '
	'does_not_exist'		=> ' mevcut değil',//' 不存在',
	'table_delete_completed'	=> 'Tabloyu ve alanları silme işlemi tamamlandı',//'删除表和字段操作完成了',
	'close_before_update'		=> 'Lütfen bu yükseltmeyi gerçekleştirmeden önce siteye erişimi kapatın',//'请先关闭站点再执行此升级操作',
	'ucenter160update'		=> 'Lütfen UCenter\'ınızı 1.6.0 veya üzerine yükseltin.<br>Eğer UCenter ile birlikte gelen Discuz!X kullanıyorsanız, lütfen uc_server/upgrade/upgrade3.php dosyasını çalıştırarak UCenter\'ı yükseltin.',//'请先升级UCenter到1.6.0以上版本。<br>如果使用为Discuz! X自带UCenter，请先运行uc_server/upgrade/upgrade3.php进行升级',
	'db_will_upgrade'		=> '<b>Not:</b><br>&nbsp;&nbsp;&nbsp;Güncelleme programı, veritabanı yükseltmesinin senkronizasyonu için en son SQL dosyasını dikkate alacaktır.<br>',//'说明：<br>本升级程序会参照最新的SQL文件,对数据库进行同步升级.',
	'check_latest_version'		=> 'Geçerli ./data/install.sql dosyasının en son sürüm için olduğundan emin olun!',//'请确保当前目录下 ./data/install.sql 文件为最新版本.',
	'check_plugins'			=> 'Yükseltme tamamlandıktan sonra, sitenin düzgün çalıştığından emin olmak için tüm eklentileri kapatın. Ancak bundan sonra her bir eklentinin yeni sürümle uyumlu olup olmadığını tespit etmek için eklentileri tek tek açın.',//'升级完成后会关闭所有插件以确保正常运行，请站长逐个开启每一个插件检测是否兼容新版本。',
	'upgade_start'			=> 'Hazır, yükseltmeyi başlatın',//'准备完毕,升级开始',
	'contacts'			=> ' İletişim: ',//' 联系方式:',
	'contact'			=> 'İletişim',//'联系方式',
	'ready_to_db_upgrade'		=> 'Hazır, bir sonraki adım veritabanı yapısını yükseltecek',//'准备完毕,进入下一步数据库结构升级',
	'sql_empty'			=> 'SQL dosyasının boş olduğundan emin olun',//'SQL文件内容为空,请确认',
	'db_structure_upgraded'		=> 'Veritabanı yapısı yükseltmesi tamamlandı, sonraki verileri güncellemek için girin',//'数据库结构升级完毕,进入下一步数据升级操作',
	'add_table'			=> 'Tablo ekle ',//'添加表 ',
	'sql_error'			=> ' Hata oluştu. Lütfen aşağıdaki SQL ifadesini manuel olarak çalıştırın ve ardından yükseltme programını yeniden çalıştırın',//' 出错,请手工执行以下SQL语句后,再重新运行本升级程序',
//	'sql_error'			=> ' Error. Please perform the following update statement by hand, then re-run the upgrade program',//'出错,请手工执行以下升级语句后,再重新运行本升级程序',
	'completed'			=> ' tamamlandı',//'完成',
	'upgrade_table'			=> 'Yükseltme tablosu ',//'升级表 ',
	'table_rename'			=> 'Tabloyu Yeniden Adlandır ',//'表改名 ',
	'sql_statement'			=> 'SQL ifadesini yükseltme',//'升级SQL语句',
	'check_table'			=> 'Kontrol tablosu ',//'检查表 ',
	'skip_table'			=> ' tamamlandı, yükseltme yapılmadı, atlandı',//' 完成,不需升级,跳过',
	'real_names_updated'		=> 'Gerçek isim özelliği yükseltildi',//'实名功能升级完毕',
	'real_name'			=> 'Gerçek isim',//'真实姓名',
	'real_name_progress'		=> 'Gerçek isimler yükseltme ilerlemesi:',//'实名功能升级中',
	'users_updated'			=> 'Kullanıcı bölümü yükseltmesi tamamlandı',//'用户栏目升级完毕',
	'recommended_webmaster'		=> 'Webmaster tarafından önerildi',//'站长推荐',
	'article_tags'			=>  array (
					    1 => 'Orijinal',//'原创',
					    2 => 'Sıcak',//'热点',
					    3 => 'Fotoğraflar',//'组图',
					    4 => 'Son Dakika Haberleri',//'爆料',
					    5 => 'Manşet',//'头条',
					    6 => 'Slayt gösterisi',//'幻灯',
					    7 => 'Kaydırma',//'滚动',
					    8 => 'Tavsiye edilir',//'推荐',
					    ),
	'anonymous'			=> 'Anonim',//'匿名',
	'politics'			=> 'Politika',//'政治',
	'advertising'			=> 'Reklamcılık',//'广告',
	'userreasons'			=> 'Güçlü!\r\nKullanışlı\r\nÇok güzel!\r\nEn iyisi!\r\nİlginç',//'很给力!\r\n神马都是浮云\r\n赞一个!\r\n山寨\r\n淡定'
	'plugin_center'			=> 'Discuz! Eklenti Merkezi',//'Discuz! 扩展中心',
	'plugin_forum'			=> 'Discuz! Eklenti Forumu',//'Discuz! 扩展中心最新的论坛插件',
	'settings_updated'		=> 'Yapılandırma, Ayarlar yükseltmesi tamamlandı',//'配置项升级完成',
	'group_setting_updated'		=> 'Grup Ayarları yükseltmesi tamamlandı',//'管理组设置升级完成',
	'clean_feeds'			=> 'Süresi dolan beslemeleri temizleyin',//'清理过期动态',
	'cron_completed'		=> 'Cron görevleri güncellemesi tamamlandı',//'计划任务升级完成',
	'color_card'			=> 'Renklendirici',//'变色卡',
	'color_card_descr'		=> 'Bir konu veya blog başlığını vurgulayabilirsiniz (rengini değiştirebilirsiniz)',//'可以将帖子或日志的标题高亮，变更颜色',
	'visitor_card'			=> 'Discover kart',//'显身卡',
	'visitor_card_descr'		=> 'Anonim bir kullanıcının gerçek kimliğini görebilirsiniz.',//'可以查看一次匿名用户的真实身份。',
	'anonymous_card'		=> 'İsimsiz kart',//'匿名卡',
	'anonymous_card_descr'		=> 'Belirlenen alanlarda adınızı Anonim olarak gösterin.',//'在指定的地方，让自己的名字显示为匿名。',
	'apps_completed'		=> 'Uygulama İstatistikleri yükseltmesi tamamlandı',//'漫游应用统计升级完成',
	'navigation_completed'		=> 'Navigasyon veri yükseltmesi tamamlandı',//'导航数据升级完成',
	'group_status_completed'	=> 'Grup Durumu Yükseltmesi tamamlandı',//'版块状态升级完毕',
	'recommendations_completed'	=> 'Öneriler yükseltmesi tamamlandı',//'回帖推荐升级完毕',
	'users_completed'		=> 'Kullanıcı yükseltmesi tamamlandı',//'用户升级完毕',
	'daylogin'			=> 'Günlük giriş',//'每天登录',
	'portalcomment'			=> 'Nasıl Makale',//'文章评论',
	'points_rules_completed'	=> 'Puan Kuralları yükseltmesi tamamlandı',//'积分规则升级完毕',
	'custom_bbcode_completed'	=> 'Özel BBCode izinleri yükseltmesi tamamlandı',//'自定义代码权限升级完毕',
	'edited_by'			=> 'Düzenlendi',//'编辑采用',
	'stamps_completed'		=> 'İplik Pulları yükseltmesi tamamlandı',//'鉴定图章升级完毕',
	'perms_updated'			=> 'İzin simgeleri güncellemesi tamamlandı',//'模块缩略图权限升级完毕',
	'block_permissions_completed'	=> 'Blok İzinleri yükseltmesi tamamlandı',//'模块权限升级完毕',
	'portal_completed'		=> 'Portal kanal izinleri Yükseltme Tamamlandı',//'门户频道权限升级完毕',
	'articles_updated'		=> 'Makale yükseltmesi tamamlandı',//'文章评论升级完毕',
	'article_comments_completed'	=> 'Makale yorumları yükseltmesi tamamlandı',//'文章封面图升级完毕',
	'blocks_completed'		=> 'Blok şablonları yükseltmesi tamamlandı',//'模块模板升级完毕',
	'scripts_completed'		=> 'Blok komut dosyaları yükseltmesi tamamlandı',//'模块脚本升级完毕',
	'group_permissions_completed'	=> 'Kullanıcı grubu izinleri yükseltmesi tamamlandı',//'用户组权限升级完毕',
	'group_home_completed'		=> 'Grup Evi yükseltmesi tamamlandı',//'群组首页升级完毕',
	'domains_completed'		=> 'Etki Alanı Ayarları yükseltmesi tamamlandı',//'域名设置升级完毕',
	'new_pm_completed'		=> 'Yeni kısa mesaj durumu sıfırlama işlemi tamamlandı',//'新短消息状态重置完毕',
	'view_img_completed'		=> 'Görüntü hakları yükseltmesi tamamlandı',//'查看图片权限升级完毕',
	'realname_verify'		=> 'Gerçek isim doğrulama',//'实名认证升级中',
	'video_verify'			=> 'Video doğrulama',//'视频认证',
	'real_name_verification'	=> 'Gerçek isim doğrulama',//'实名认证升级中',
	'real_name_verification_completed'	=> 'Gerçek isim doğrulama veri yükseltmesi tamamlandı',//'认证数据升级完毕',
	'attachment_upgrade'		=> 'Forum ek tablosu yükseltme ... ',//'论坛附件表升级中 ... ',
	'attachment_upgraded'		=> 'Forum ek tablosu yükseltmesi tamamlandı.',//'论坛附件表升级完毕',
	'topic_image_skip'		=> 'İplik görüntü tablosu işlenemiyor, atlandı.',//'主题图片表无法处理，跳过',
	'topic_image_upgraded'		=> 'Konu resimleri yükseltildi',//'主题图片表处理完毕',
	'topic_image_upgrade'		=> 'Konu resimleri yükseltme ... ',//'主题图片表处理中 ... ',
	'verify_updated'		=> 'Doğrulama veri yükseltmesi tamamlandı.',//'审核数据升级完毕',
	'founder_updated'		=> 'Kurucu Veri Yükseltmesi tamamlandı',//'创始人数据升级完毕',
	'plugins_updated'		=> 'Eklenti dil paketi verileri yükseltildi.',//'插件语言包数据升级完毕',
	'config_default_lost'		=> 'config_global_default.php bulunamadı, lütfen bu dosyayı yeniden yükleyin.',//'config_global_default.php was lost, please reupload this file.',
	'data_processing_completed'	=> 'Veri işleme tamamlandı',//'数据处理完成',
	'config_not_writable'		=> '"config/config_global.php" dosyası güncellendi, "config/" dizini yazılabilir değil, güncellenmiş dosyayı "data/" dizinine kaydettik, lütfen mevcut dosyanın üzerine yazarak "config/" dizinine aktarmak için FTP yazılımını kullanın.',//'"config/config_global.php" 文件已更新,由于 "config/" 目录不可写入,我们已将更新的文件保存到 "data/" 目录下,请通过 FTP 软件将其转移到 "config/" 目录下覆盖源文件.',
	'config_continue'		=> 'Bu işlem tamamlandıktan sonra devam etmek için buraya tıklayın',//'当您完成上述操作后点击这里继续',
	'data_delete_next'		=> 'Veri Silme işlemi tamamlandı, bir sonraki adıma geçin',//'数据删除不处理,进入下一步',
	'tables_unused'			=> '<strong>Aşağıdaki veri tabloları</strong> standart veritabanı ile karşılaştırıldıktan sonra kullanılmamaktadır:<br>gerekirse silinip silinmeyeceğine karar verin',//'以下 <strong>数据表</strong> 与标准数据库相比是多余的:<br>您可以根据需要自行决定是否删除',
	'index'				=> 'İndeks',//'索引',
	'field'				=> 'Saha',//'字段',
	'fields_unused'			=> '<strong>Aşağıdaki alanlar</strong> standart veritabanı ile karşılaştırıldıktan sonra kullanılmayanlar:<br>gerekirse silinip silinmeyeceğine karar verin',//'以下 <strong>字段</strong> 与标准数据库相比是多余的:<br>您可以根据需要自行决定是否删除',
	'tables_fields_no_unused'	=> 'Standart veritabanı ile karşılaştırıldığında, kullanılmayan veri tabloları ve alanların silinmesi gerekmez',//'与标准数据库相比,没有需要删除的数据表和字段',
	'click_next_step'		=> 'Bir sonraki adıma geçmek için tıklayın',//'请点击进入下一步',
	'submit_delete'			=> 'Silmek için gönderin',//'提交删除',
	'ignore_unused'			=> 'Ekstra tabloları ve alanları da yok sayabilirsiniz',//'您也可以忽略多余的表和字段',
	'next_step_directly'		=> 'Doğrudan bir sonraki adıma geçin',//'直接进入下一步',
	'default_style_restore_sure'	=> 'Lütfen varsayılan stili geri yüklemek isteyip istemediğinizi onaylayın?',//'请确认是否要恢复默认风格？',
	'yes'				=> 'Evet',//'是',
	'no'				=> 'Hayır',//'否',
	'default_style_restored'	=> 'Varsayılan stil geri yüklendi, sonraki adıma geçin',//'默认风格已恢复,进入下一步',
	'cache_update'			=> 'Önbellek güncellemesi, lütfen bekleyin ...',//'缓存更新中，请稍候 ...',
	'database_updated'		=> 'Tebrikler! Veritabanı yapısı yükseltmesi tamamlandı!<br>Veri güvenliği için update.php dosyasını silin !.',//'恭喜，数据库结构升级完成！为了数据安全，请删除本文件。',
	'jump_to'			=> 'Şuraya atla ...',//'跳转中...',
	'database_update'		=> 'Veritabanı yükseltme süreci',//'数据库升级程序',
	'database_update_tool'		=> 'Veritabanı yükseltme aracı',//'数据库升级工具',
	'update_start'			=> 'Güncelleme başlangıcı',//'升级开始',
	'database_update_structure'	=> 'Veritabanını Güncelleyin',//'数据库结构添加与更新',
	'data_update'			=> 'Verileri Güncelleyin',//'数据更新',
	'database_delete_structure'	=> 'Kullanılmayan verileri silme',//'数据库结构删除',
	'update_completed'		=> 'Güncelleme Tamamlandı',//'升级完成',
	'reports_completed'		=> 'Rapor yükseltme işlemi tamamlandı',//'举报升级完成',
	'magics_updated'		=> 'Büyü yükseltmesi tamamlandı',//'道具升级完成',
	'birthday'			=> 'Doğum Günü',//'出生日期',
//-----------------------------------------------------------------------------
// Added in X2.5:
	'table_optimize'	=> 'Tabloyu optimize edin',//'优化数据表',
	'close_wait'		=> 'Siteniz kapalı değil, kapatılıyor, lütfen bekleyin...',//'您的站点未关闭，正在关闭，请稍后...',
	'length'		=> '[Length]',//'[时长]',
	'status'		=> '[Status]',//'[状态]',
	'info'			=> '[Info]',//'[信息]',
	'next_step_wait'	=> 'Bir sonraki adıma geçmeye hazırız, lütfen bekleyin...',//'准备进入下一步操作，请稍后...',
	'upgrade_wait'		=> 'Yükseltme yapılıyor, lütfen bekleyin...',//'正在升级数据，请稍后...',
//	'ready_to_db_upgrade'	=> 'Ready to enter the next step: upgrade the database structure',//'准备完毕，进入下一步数据库结构升级',
	'patches_dayly'		=> 'Güvenlik yamaları günlük erişim',//'每日获取安全补丁',
	'regular_publish'	=> 'Düzenli olarak yayınlanan konular',//'定时发布主题',
	'archive_weekly'	=> 'Haftalık yayın arşivi',//'每周广播归档',
	'updates_daily'		=> 'Günlük güncelleme kontrollerinin sayısı',//'更新每日查看数',
	'users_daily'		=> 'Günlük kullanıcı tablosu optimizasyonu',//'每日用户表优化',
	'collection_follow'	=> 'Koleksiyon takip kuralı (Taobao albüm aboneliği)',//'淘专辑被订阅',
	'new_post'		=> 'Yeni gönderiler',//'新人帖',
	'moderated_completed'	=> 'Moderatörlü veri dönüşümü tamamlandı',//'审核数据转换完毕',
	'medal_completed'	=> 'Kullanıcı Madalya veri yükseltmesi tamamlandı',//'用户勋章数据升级完毕',
	'data_update_completed'	=> 'Veri güncelleme tamamlandı',//'数据升级结束',
	'group_stat_completed'	=> 'Forum Grubu istatistik yükseltmesi tamamlandı',//'论坛版块统计数据升级完毕',
//-----------------------------------------------------------------------------
// Added in X3.0:
	'cron_todayheats_daily'	=> 'Bugünkü sıcak gönderileri günlük olarak sayın',//'统计今日热帖',
	'hot_posts_completed'	=> 'Sıcak gönderiler güncellendi',//'热帖处理完毕',
	'reminder_update_completed'	=> 'Hatırlat veri yükseltmesi tamamlandı',//'提醒数据升级完毕',
	'layout_update_completed'	=> 'Düzen ayarları yükseltmesi tamamlandı',//'布局方案设置升级完毕',
	'processed_from'	=> 'İşlenmekte olan ',//'正在处理从 ',
	'starting_from'		=> ' başlayarak ',//' 开始 ',
	'popular_posts'		=> 'popüler gönderiler',//'的热帖',
//To lang_template:
	'default_layout'	=> 'Varsayılan düzen',//'默认方案',
	'qq_bbcode_description'	=> 'QQ çevrimiçi durumu, puan simgesi ve sohbeti',//'显示 QQ 在线状态，点这个图标可以和他（她）聊天',
	'qq_enter'		=> 'Lütfen QQ numarasını girin',//'请输入 QQ 号码',
	'qq_onlne_status'	=> 'QQ çevrimiçi durumunu ayarlama',//'设置QQ在线状态',
	'open_soso'		=> '<br><br>İpuçları:<br>Forum yüklemesini azaltmak için, bu yükseltme web sitemizi kullanmanıza yardımcı olacaktır Coğrafi konum arama hizmeti<br>Şuraya gidebilirsiniz',//'<br><br>友情提示：<br>为更好的降低论坛搜索时的数据压力，本次升级已经帮本站开通纵横搜索服务。<br>你可以在',
	'open_soso_link'	=> 'AdminCP -&gt; Bulut platformu -&gt; Coğrafi konum arama Yönetimi',//'站点后台-&gt;云平台-&gt;纵横搜索 进行管理',
	'parameter_invalid'	=> 'Geçersiz parametre',//'请求的参数不正确',
	'update_sql'		=> '<br><br><b>Aşağıda çalıştırılan bir veritabanı yükseltme ifadesi yer almaktadır:</b><br>',//'<br><br><b>以下是正在执行的数据库升级语句:</b><br>',
	'builtin'			=> 'Yerleşik',//'内置',
	'birthdist'			=> 'Doğum Bölgesi',//'出生县',
	'birthdist_info'		=> 'Doğum Bölgesi/İlçe',//'出生行政区/县',
	'birthcommunity'		=> 'Doğum Topluluğu',//'出生小区',
	'birthcommunity_info'		=> '',//'',
	'birthcity'			=> 'Doğum Şehri',//'出生地',
	'residecity'			=> 'İkamet Edilen Şehir',//'居住地',
	'birthday'			=> 'Doğum Günü',//'出生日期',
	'idcardtype'			=> 'Standart belge',//'证件类型',
	'alipay'			=> 'AliPay',//'支付宝',
	'taobao'			=> 'TaoBao',//'阿里旺旺',
	'basic_info'			=> 'Temel bilgiler',//'基本资料',
	'education_info'		=> 'Eğitim bilgileri',//'教育情况',
	'work_info'			=> 'İş bilgileri',//'工作情况',
	'personal_info'			=> 'Kişisel Bilgiler',//'个人信息',
	'reglinkname'			=> 'Kayıt',//'注册',
//SPOILER TAG by jaideejung007
//	'spoiler'		=> 'Spoiler',//'สปอยล์',
//	'spoiler_hide'		=> '[Spoil] click to hide the text',//'[Spoil] คลิกเพื่อซ่อนข้อความ',
//	'spoiler_show'		=> '[Spoil] Click to see hidden text',//'[Spoil] คลิกเพื่อดูข้อความที่ซ่อนไว้',
//	'spoiler_placeholder'	=> 'Enter the text you want to hide in spoiler',//'กรอกข้อความที่คุณต้องการสปอยล์',

);
