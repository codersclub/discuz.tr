<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_notification.php by Valery Votintsev, codersclub.org
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(

	'type_wall'		=> 'Mesaj',
	'type_piccomment'	=> 'Resim yorum',
	'type_blogcomment'	=> 'Blog yorum',
	'type_clickblog'	=> 'Blog rating',
	'type_clickarticle'	=> 'Haber rating',
	'type_clickpic'		=> 'Resim rating',
	'type_sharecomment'	=> 'Paylaşım rating',
	'type_doing'		=> 'Durum',
	'type_friend'		=> 'Arkadaş',
	'type_credit'		=> 'Puanlar',
	'type_bbs'		=> 'Forum',//'论坛',
	'type_system'		=> 'Sistem',
	'type_thread'		=> 'Konu',
	'type_task'		=> 'Görev',
	'type_group'		=> 'Grup',

	'mail_to_user'		=> 'Yeni duyuru',
	'showcredit'		=> '{actor} size klasman listesinde yer almanız için {credit} puan gönderdi, klasman <a href="misc.php?mod=ranklist&type=member" target="_blank">listesi</a> ',
	'share_space'		=> '{actor} sizin sayfanızı paylaştı.',
	'share_blog'		=> '{actor} sizin <a href="{url}" target="_blank">{subject}</a> konulu blogunuzu paylaştı.',
	'share_album'		=> '{actor} sizin <a href="{url}" target="_blank">{albumname}</a> isimli albümünüzü paylaştı.',
	'share_pic'		=> '{actor} sizin {albumname} albümünüz\'de ki <a href="{url}" target="_blank"> resmi</a> paylaştı.',
	'share_thread'		=> '{actor} <a href="{url}" target="_blank">{subject}</a> isimli konunuzu paylaştı.',
	'share_article'		=> '{actor} <a href="{url}" target="_blank">{subject}</a> konulu haberinizi paylaştı.',
	'magic_present_note'	=> ' <a href="{url}" target="_blank">{name}</a> size hediye etti.',
	'friend_add'		=> '{actor} ile arkadaş oldunuz.',
	'friend_request'	=> '{actor} requested you to add as a friend: {note}&nbsp;&nbsp;<a onclick="showWindow(this.id, this.href, \'get\', 0);" class="xw1" id="afr_{uid}" href="{url}">Approve the request</a>',//'{actor} 请求加您为好友{note}&nbsp;&nbsp;<a onclick="showWindow(this.id, this.href, \'get\', 0);" class="xw1" id="afr_{uid}" href="{url}">批准申请</a>',
	'doing_reply'		=> '{actor} <a href="{url}" target="_blank">durumunuza</a> cevap yazdı.',
	'wall_reply'		=> '{actor} size <a href="{url}" target="_blank">cevap</a> yazdı.',
	'pic_comment_reply'	=> '{actor} resim yorumunuzu <a href="{url}" target="_blank">cevapladı.</a>',
	'blog_comment_reply'	=> '{actor} blog  yorumunuzu <a href="{url}" target="_blank">cevapladı.</a>',
	'share_comment_reply'	=> '{actor} paylaşım  yorumunuzu <a href="{url}" target="_blank">cevapladı.</a>',
	'wall'			=> '{actor} duvarınıza <a href="{url}" target="_blank">mesaj ekledi</a>',
	'pic_comment'		=> '{actor} resminizi <a href="{url}" target="_blank">yorumladı.</a>',
	'blog_comment'		=> '{actor} <a href="{url}" target="_blank">{subject}</a> blogunuzu yorumladı.',
	'share_comment'		=> '{actor} paylaşımınızı <a href="{url}" target="_blank">yorumladı.</a>',
	'click_blog'		=> '{actor} blogunuza <a href="{url}" target="_blank">{subject}</a> rating verdi.',
	'click_pic'		=> '{actor} sizin <a href="{url}" target="_blank">resminizi</a> rating kullandı',
	'click_article'		=> '{actor} <a href="{url}" target="_blank">{subject}</a> haberinize rating verdi.',
	'show_out'		=> '{actor} visited your home page, this showed your final bid point also consumed',//'{actor} 访问了你的主页后，你在竞价排名榜中最后一个积分也被消费掉了',
	'puse_article'		=> 'Tebrikler, makaleniz <a href="{url}" target="_blank">{subject}</a> portalda yayımlandı, <a href="{newurl}" target="_blank">click here to view</a>',//'恭喜你，你的<a href="{url}" target="_blank">{subject}</a>已被推送到门户， <a href="{newurl}" target="_blank">点击查看</a>',

	'myinvite_request'	=> 'Application new message <a href="home.php?mod=space&do=notice&view=userapp">Click here to enter the application info page and related operations</a>',//'有新的应用消息<a href="home.php?mod=space&do=notice&view=userapp">点此进入应用消息页面进行相关操作</a>',


	'group_member_join'	=> '{actor}<a href="forum.php?mod=group&fid={fid}" target="_blank">{groupname}</a> isimli grubunuza katılmak istiyor, lütfen kontrol ediniz <a href="{url}" target="_blank">Grup Panel</a> ',
	'group_member_invite'	=> '{actor} sizi <a href="forum.php?mod=group&fid={fid}" target="_blank">{groupname}</a> grubuna katılmağa davet ediyor, <a href="{url}" target="_blank">hemen katıl..</a>',
	'group_member_check'	=> '<a href="{url}" target="_blank">{groupname}</a> grubunu görmek için, lütfen <a href="{url}" target="_blank">tıklayınız</a>',
	'group_member_check_failed'	=> '<a href="{url}" target="_blank">{groupname}</a> grubunu ziyaret etmediniz.',
	'group_mod_check'		=> 'The group you have created "<a href="{url}" target="_blank">{groupname}</a>" was approved, please <a href="{url}" target="_blank">Click here to visit</a>',//'您的创建的群组 <a href="{url}" target="_blank">{groupname}</a> 审核通过了，请 <a href="{url}" target="_blank">点击这里访问</a>',

	'reason_moderate'	=> '<a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> konunuz {actor} onayı bekliyor <div class="quote"><blockquote>{reason}</blockquote></div>',

	'reason_merge'		=> ' <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> konunuz {actor} tarafından bölünmüştür <div class="quote"><blockquote>{reason}</blockquote></div>',

	'reason_delete_post'	=> ' <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> konunuz {actor} tarafından silinmiştir. <div class="quote"><blockquote>{reason}</blockquote></div>',

	'reason_delete_comment'	=> ' <a href="forum.php?mod=redirect&goto=findpost&pid={pid}&ptid={tid}" target="_blank">{subject}</a> yorumunuz {actor} tarafından silinmiştir. <div class="quote"><blockquote>{reason}</blockquote></div>',

	'reason_ban_post'	=> ' <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> mesajınız {actor} tarafından yasaklanmıştır. <div class="quote"><blockquote>{reason}</blockquote></div>',

	'reason_warn_post'	=> 'Your thread <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> was {modaction} by {actor}.<br />
				If you were warned {warninglimit} times in {warningexpiration} days, you will be disabled to post {warningexpiration} days automatically.<br />
				Currently, you have been warned {authorwarnings} times!
				<div class="quote"><blockquote>{reason}</blockquote></div>',

	'reason_move'		=> ' <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> mesajınız {actor} tarafından taşınmıştır <a href="forum.php?mod=forumdisplay&fid={tofid}" target="_blank">{toname}</a> <div class="quote"><blockquote>{reason}</blockquote></div>',

	'reason_copy'		=> ' <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> mesajınız {actor} tarafından kopyalanmıştır <a href="forum.php?mod=viewthread&tid={threadid}" target="_blank">{subject}</a> <div class="quote"><blockquote>{reason}</blockquote></div>',

	'reason_remove_reward'	=> ' <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> ödüllü konunuz {actor} tarafından kaldırılmıştır <div class="quote"><blockquote>{reason}</blockquote></div>',

	'reason_stamp_update'	=> ' <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> konunuza {actor} tarafından {stamp} damgası vurulmuştur <div class="quote"><blockquote>{reason}</blockquote></div>',

	'reason_stamp_delete'	=> ' <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> konunuz\'da ki damga {actor} tarafından kaldırılmıştır <div class="quote"><blockquote>{reason}</blockquote></div>',

	'reason_stamplist_update'	=> ' <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> konunuza {actor} tarafından {stamp} damgası vurulmuştur <div class="quote"><blockquote>{reason}</blockquote></div>',

	'reason_stamplist_delete'	=> ' <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> konunuz\'da ki damga {actor} tarafından silinmiştir <div class="quote"><blockquote>{reason}</blockquote></div>',

	'reason_stickreply'		=> ' <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> konusun\'da ki cevabınız {actor} tarafından sabitlenmiştir <div class="quote"><blockquote>{reason}</blockquote></div>',

	'reason_stickdeletereply'	=> ' <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> konusun\'da ki cevabınız  {actor} tarafından sabitlikten kaldırılmıştır<div class="quote"><blockquote>{reason}</blockquote></div>',

	'reason_quickclear'	=> 'Your {cleartype} was removed by {actor} <div class="quote"><blockquote>{reason}</blockquote></div>',//'您的{cleartype} 被 {actor} 清除 <div class="quote"><blockquote>{reason}</blockquote></div>',

	'reason_live_update'	=> '{actor} added a live broadcast to your thread <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a>, <div class="quote"><blockquote>{reason}</blockquote></div>',//'您的主题 <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> 被 {actor} 设置为直播贴 <div class="quote"><blockquote>{reason}</blockquote></div>',
	'reason_live_cancle'	=> '{actor} removed a live broadcast to your thread <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a>, <div class="quote"><blockquote>{reason}</blockquote></div>',//'您的主题 <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> 被 {actor} 取消直播 <div class="quote"><blockquote>{reason}</blockquote></div>',

	'modthreads_delete'	=> ' {threadsubject} isimli konunuz onaylanmadığı için silinmiştir <div class="quote"><blockquote>{reason}</blockquote></div>',

	'modthreads_delete_reason' => 'Published by you thread {threadsubject} was not approved, and now has been deleted! <div class="quote"><blockquote>{reason}</blockquote></div>',//'您发表的主题 {threadsubject} 未通过审核，现已被删除！<div class="quote"><blockquote>{reason}</blockquote></div>',
	'modthreads_validate'	=> ' <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{threadsubject}</a> isimli konunuz onaylanmıştır! &nbsp; <a href="forum.php?mod=viewthread&tid={tid}" target="_blank" class="lit">detaylar &rsaquo;</a> <div class="quote"><blockquote>{reason}</blockquote></div>',

	'modreplies_delete'	=> 'Cevabınız onaylanmadığı için silinmiştir <p class="summary">Içerik: <span>{post}</span></p> <div class="quote"><blockquote>{reason}</blockquote></div>',

	'modreplies_delete_reason'	=> 'Your reply was not approved and has now been deleted! <p class="summary">Response content: <span>{post}</span></p><div class="quote"><blockquote>{reason}</blockquote></div>',

	'modreplies_validate'	=> 'Cevabınız onaylanmıştır! &nbsp; <a href="forum.php?mod=redirect&goto=findpost&pid={pid}&ptid={tid}" target="_blank" class="lit">detaylar &rsaquo;</a> <p class="summary">Içerik: <span>{post}</span></p> <div class="quote"><blockquote>{reason}</blockquote></div>',

	'transfer'		=> '{actor} size {credit} puan verdi &nbsp; <a href="home.php?mod=spacecp&ac=credit&op=log&suboperation=creditslog" target="_blank" class="lit">detaylar &rsaquo;</a>
				<p class="summary">{actor}\'n mesajı: <span>{transfermessage}</span></p>',

	'addfunds'		=> 'Your request to recharge points successfully completed, Corresponding amount of points have been added to your points account.
				&nbsp; <a href="home.php?mod=spacecp&ac=credit&op=base" target="_blank" class="lit">Click to view &rsaquo;</a>.
				<p class="summary">Order number: <span>{orderid}</span></p>
				<p class="summary">Payment: <span>{price} USD</span></p>
				<p class="summary">Incoming points: <span>{value}</span></p>',

	'rate_reason'		=> ' <a href="forum.php?mod=redirect&goto=findpost&pid={pid}&ptid={tid}" target="_blank">{subject}</a> konusuna cevabınız {actor} tarafından {ratescore} rating almıştır<div class="quote"><blockquote>{reason}</blockquote></div>',

	'recommend_note_post'	=> 'Congratulations, Your post <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> was recommended',//'恭喜，您的帖子 <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> 被编辑采用',

	'rate_removereason'	=> '{actor} <a href="forum.php?mod=redirect&goto=findpost&pid={pid}&ptid={tid}" target="_blank">{subject}</a> konusuna cevabınıza verdiği {ratescore} ratingi geri almıştır<div class="quote"><blockquote>{reason}</blockquote></div>',

	'trade_seller_send'	=> '<a href="home.php?mod=space&uid={buyerid}" target="_blank">{buyer}</a> has bought your product <a href="forum.php?mod=trade&orderid={orderid}" target="_blank">{subject}</a>, the other side has been paid, waiting for your delivery. &nbsp; <a href="forum.php?mod=trade&orderid={orderid}" target="_blank" class="lit">Click to view</a>',//'<a href="home.php?mod=space&uid={buyerid}" target="_blank">{buyer}</a> 购买你的商品 <a href="forum.php?mod=trade&orderid={orderid}" target="_blank">{subject}</a>，对方已经付款，等待你发货 &nbsp; <a href="forum.php?mod=trade&orderid={orderid}" target="_blank" class="lit">查看 &rsaquo;</a>',

	'trade_buyer_confirm'	=> 'The product <a href="forum.php?mod=trade&orderid={orderid}" target="_blank">{subject}</a>  you have bought,  was shipped by the seller <a href="home.php?mod=space&uid={sellerid}" target="_blank">{seller}</a>, now waiting for your confirmation. &nbsp; <a href="forum.php?mod=trade&orderid={orderid}" target="_blank" class="lit">Click to view</a>',//'你购买的商品 <a href="forum.php?mod=trade&orderid={orderid}" target="_blank">{subject}</a>，<a href="home.php?mod=space&uid={sellerid}" target="_blank">{seller}</a> 已发货，等待你确认 &nbsp; <a href="forum.php?mod=trade&orderid={orderid}" target="_blank" class="lit">查看 &rsaquo;</a>',

	'trade_fefund_success'	=> 'The product <a href="forum.php?mod=trade&orderid={orderid}" target="_blank">{subject}</a> have been refunded successfully. &nbsp; <a href="forum.php?mod=trade&orderid={orderid}" target="_blank" class="lit">Rate it</a>',//'商品 <a href="forum.php?mod=trade&orderid={orderid}" target="_blank">{subject}</a> 已退款成功 &nbsp; <a href="forum.php?mod=trade&orderid={orderid}" target="_blank" class="lit">评价 &rsaquo;</a>',

	'trade_success'		=> 'The product <a href="forum.php?mod=trade&orderid={orderid}" target="_blank">{subject}</a> have been saled successfully. &nbsp; <a href="forum.php?mod=trade&orderid={orderid}" target="_blank" class="lit">Rate it</a>',//'商品 <a href="forum.php?mod=trade&orderid={orderid}" target="_blank">{subject}</a> 已交易成功 &nbsp; <a href="forum.php?mod=trade&orderid={orderid}" target="_blank" class="lit">评价 &rsaquo;</a>',

	'trade_order_update_sellerid'	=> 'Seller <a href="home.php?mod=space&uid={sellerid}" target="_blank">{seller}</a> modified the product <a href="forum.php?mod=trade&orderid={orderid}" target="_blank">{subject}</a>, make sure to view it. &nbsp; <a href="forum.php?mod=trade&orderid={orderid}" target="_blank" class="lit">view it</a>',//'卖家 <a href="home.php?mod=space&uid={sellerid}" target="_blank">{seller}</a> 修改了商品 <a href="forum.php?mod=trade&orderid={orderid}" target="_blank">{subject}</a> 的交易单，请确认 &nbsp; <a href="forum.php?mod=trade&orderid={orderid}" target="_blank" class="lit">查看 &rsaquo;</a>',

	'trade_order_update_buyerid'	=> 'Buyer <a href="home.php?mod=space&uid={buyerid}" target="_blank">{buyer}</a> modified the order <a href="forum.php?mod=trade&orderid={orderid}" target="_blank">{subject}</a> single transaction, make sure to view it. &nbsp; <a href="forum.php?mod=trade&orderid={orderid}" target="_blank" class="lit">View it</a>',//'买家 <a href="home.php?mod=space&uid={buyerid}" target="_blank">{buyer}</a> 修改了商品 <a href="forum.php?mod=trade&orderid={orderid}" target="_blank">{subject}</a> 的交易单，请确认 &nbsp; <a href="forum.php?mod=trade&orderid={orderid}" target="_blank" class="lit">查看 &rsaquo;</a>',

	'eccredit'		=> '{actor} ve siz rating aldınız &nbsp; <a href="forum.php?mod=trade&orderid={orderid}" target="_blank" class="lit">yorumlar &rsaquo;</a>',

	'activity_notice'	=> '{actor} <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> etkinliğinize katılmak istiyor, gözden geçirin &nbsp; <a href="forum.php?mod=viewthread&tid={tid}" target="_blank" class="lit">detaylar &rsaquo;</a>',

	'activity_apply'	=> '{actor} sizin <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> etkinliğine katılmanızı onaylamıştır &nbsp; <a href="forum.php?mod=viewthread&tid={tid}" target="_blank" class="lit">detaylar &rsaquo;</a> <div class="quote"><blockquote>{reason}</blockquote></div>',

	'activity_replenish'	=> ' <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> etkinliği bilgileri tamamlanması için {actor} uyarı yaptı &nbsp; <a href="forum.php?mod=viewthread&tid={tid}" target="_blank" class="lit">detaylar &rsaquo;</a> <div class="quote"><blockquote>{reason}</blockquote></div>',

	'activity_delete'	=> ' <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> etkinliğiniz {actor} tarafından silinmiştir &nbsp; <a href="forum.php?mod=viewthread&tid={tid}"  target="_blank" class="lit">detaylar &rsaquo;</a> <div class="quote"><blockquote>{reason}</blockquote></div>',

	'activity_cancel'	=> ' <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> etkinliğine katılımı {actor} iptal etmiştir &nbsp; <a href="forum.php?mod=viewthread&tid={tid}"  target="_blank" class="lit">detaylar &rsaquo;</a> <div class="quote"><blockquote>{reason}</blockquote></div>',

	'activity_notification'	=> ' <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> etkinliğine {actor} not ekledi &nbsp; <a href="forum.php?mod=viewthread&tid={tid}" target="_blank" class="lit">Etkinlik &rsaquo;</a> <div class="quote"><blockquote>{msg}</blockquote></div>',

	'reward_question'	=> ' <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> konulu ödülünüz {actor} tarafından en iyi cevap seçilmiştir &nbsp; <a href="forum.php?mod=viewthread&tid={tid}" target="_blank" class="lit">detaylar &rsaquo;</a>',

	'reward_bestanswer'	=> ' <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> konusuna cevabınız {actor} tarafından en iyi cevap seçilmiştir &nbsp; <a href="forum.php?mod=viewthread&tid={tid}" target="_blank" class="lit">detaylar &rsaquo;</a>',

	'reward_bestanswer_moderator'	=> 'Your reply to the reward thread <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> was selected as the best answer &nbsp; <a href="forum.php?mod=viewthread&tid={tid}" target="_blank" class="lit">View &rsaquo;</a>',//'您在悬赏主题 <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> 的回复被选为最佳答案 &nbsp; <a href="forum.php?mod=viewthread&tid={tid}" target="_blank" class="lit">查看 &rsaquo;</a>',

	'comment_add'	=> '{actor} <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> konunuzu yorumladı &nbsp; <a href="forum.php?mod=redirect&goto=findpost&pid={pid}&ptid={tid}" target="_blank" class="lit">detaylar &rsaquo;</a>',

	'reppost_noticeauthor'	=> '{actor} <a href="forum.php?mod=redirect&goto=findpost&ptid={tid}&pid={pid}" target="_blank">{subject}</a> konulu mesajınıza cevap yazdı&nbsp; <a class="lit" href="forum.php?mod=redirect&goto=findpost&pid={pid}&ptid={tid}" target="_blank">bakınız</a>',

	'task_reward_credit'	=> 'Tebrikler! <a href="home.php?mod=task&do=view&id={taskid}" target="_blank">{name}</a> görevini tamamlayarak {creditbonus} puan kazandınız&nbsp; <a href="home.php?mod=spacecp&ac=credit&op=base" target="_blank" class="lit">puan durumunuz &rsaquo;</a></p>',

	'task_reward_magic'	=> 'Tebrikler! <a href="home.php?mod=task&do=view&id={taskid}" target="_blank">{name}</a> görevini tamamlayarak, <a href="home.php?mod=magic&action=mybox" target="_blank">{rewardtext}</a> {bonus} araç kazandınız',

	'task_reward_medal'	=> 'Tebrikler! <a href="home.php?mod=task&do=view&id={taskid}" target="_blank">{name}</a> görevini tamamlayarak, <a href="forum.php?mod=medal" target="_blank">{rewardtext}</a> madalyasi aldınız, Geçerlilik: {bonus} gün',

	'task_reward_medal_forever'	=> 'Congratulations on completing your tasks: <a href="home.php?mod=task&do=view&id={taskid}" target="_blank">{name}</a>, Get medal <a href="home.php?mod=medal" target="_blank">{rewardtext}</a> Permanent',//'恭喜您完成任务：<a href="home.php?mod=task&do=view&id={taskid}" target="_blank">{name}</a>，获得勋章 <a href="home.php?mod=medal" target="_blank">{rewardtext}</a> 永久有效',

	'task_reward_invite'	=> 'Tebrikler! <a href="home.php?mod=task&do=view&id={taskid}" target="_blank">{name}</a> görevini tamamlayarak <a href="home.php?mod=spacecp&ac=invite" target="_blank">davet kodu  {rewardtext} aldınız</a> Geçerlilik: {bonus} gün',

	'task_reward_group'	=> 'Tebrikler! <a href="home.php?mod=task&do=view&id={taskid}" target="_blank">{name}</a> görevini tamamlayarak {bonus} gün geçerli {rewardtext} üyegrubu\'na geçtiniz &nbsp; <a href="home.php?mod=spacecp&ac=usergroup" target="_blank" class="lit">detaylar &rsaquo;</a>',

	'user_usergroup'	=> 'Üye grubunuz {usergroup} grubuna değistirilmistir &nbsp; <a href="home.php?mod=spacecp&ac=usergroup" target="_blank" class="lit">detaylar &rsaquo;</a>',

	'grouplevel_update'	=> 'Tebrikler! {groupname} grubunuz {newlevel}\'na yükseltilmiştir.',

	'thread_invite'		=> '{actor} sizi {invitename} davet ediyor <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> &nbsp; <a href="forum.php?mod=viewthread&tid={tid}" target="_blank" class="lit">detaylar &rsaquo;</a>',
	'blog_invite'		=> '{actor} invited you to view the blog <a href="home.php?mod=space&uid={uid}&do=blog&id={blogid}" target="_blank">{subject}</a>, &nbsp; <a href="home.php?mod=space&uid={uid}&do=blog&id={blogid}" target="_blank" class="lit">View &rsaquo;</a>',//'{actor} 邀请您查看日志 <a href="home.php?mod=space&uid={uid}&do=blog&id={blogid}" target="_blank">{subject}</a> &nbsp; <a href="home.php?mod=space&uid={uid}&do=blog&id={blogid}" target="_blank" class="lit">查看 &rsaquo;</a>',
	'article_invite'	=> '{actor} invited you to view the article <a href="portal.php?mod=view&aid={aid}" target="_blank">{subject}</a>, &nbsp; <a href="portal.php?mod=view&aid={aid}" target="_blank" class="lit">View &rsaquo;</a>',//'{actor} 邀请您查看文章 <a href="portal.php?mod=view&aid={aid}" target="_blank">{subject}</a> &nbsp; <a href="portal.php?mod=view&aid={aid}" target="_blank" class="lit">查看 &rsaquo;</a>',
	'invite_friend'		=> 'Tebrikler! davet ettiğiniz {actor} ile başarıyla arkadaş oldunuz.',

	'poke_request'		=> '<a href="{fromurl}" class="xi2">{fromusername}</a> sent a greeting: <span class="xw0">{pokemsg}&nbsp;</span><a href="home.php?mod=spacecp&ac=poke&op=reply&uid={fromuid}&from=notice" id="a_p_r_{fromuid}" class="xw1" onclick="showWindow(this.id, this.href, \'get\', 0);">Reply the greeting</a><span class="pipe">|</span><a href="home.php?mod=spacecp&ac=poke&op=ignore&uid={fromuid}&from=notice" id="a_p_i_{fromuid}" onclick="showWindow(\'pokeignore\', this.href, \'get\', 0);">Ignore</a>',//'<a href="{fromurl}" class="xi2">{fromusername}</a>: <span class="xw0">{pokemsg}&nbsp;</span><a href="home.php?mod=spacecp&ac=poke&op=reply&uid={fromuid}&from=notice" id="a_p_r_{fromuid}" class="xw1" onclick="showWindow(this.id, this.href, \'get\', 0);">回打招呼</a><span class="pipe">|</span><a href="home.php?mod=spacecp&ac=poke&op=ignore&uid={fromuid}&from=notice" id="a_p_i_{fromuid}" onclick="showWindow(\'pokeignore\', this.href, \'get\', 0);">忽略</a>',

	'profile_verify_error'		=> '{verify} data verification was rejected. The following fields need to be filled in:<br/>{profile}<br/>The reject reason: {reason}',//'{verify}资料审核被拒绝,以下字段需要重新填写:<br/>{profile}<br/>拒绝理由:{reason}',
	'profile_verify_pass'		=> 'Tebrikler! bilgileriniz {verify} tarafından kabul edilmiştir.',
	'profile_verify_pass_refusal'	=> 'Üzgünüz, bilgileriniz {verify} tarafından kabul edilmemiştir.',
	'member_ban_speak'		=> '{user} ile ietişiminiz {day} gün için yasaklanmıştır.(0:süresiz),Neden:{reason}',
	'member_ban_visit'		=> 'You have been banned by {user} for the period of {day} days (0 means the permanent ban). Ban reason: {reason}',//'您已被 {user} 禁止访问，期限：{day}天(0：代表永久禁止访问)，禁止访问理由：{reason}',
	'member_ban_status'		=> 'You have been banned by {user}, Ban reason: {reason}',//'您已被 {user} 锁定，禁止访问理由：{reason}',
	'member_follow'			=> 'There are {count} new feeds from people you follow. <a href="home.php?mod=follow">Click to view</a>',//'您关注的人已有{count}条新动态。<a href="home.php?mod=follow">Click to view</a>',
	'member_follow_add'		=> '{actor} have followed to you. <a href="home.php?mod=follow&do=follower">Click to view</a>',//'{actor} 收听了你。<a href="home.php?mod=follow&do=follower">Click to view</a>',

	'member_moderate_invalidate'	=> 'Hesabınız onaylanamamıştır.,lütfen <a href="home.php?mod=spacecp&ac=profile">tekrar başvurunuz</a>.<br />Admin Mesajı: <b>{remark}</b>',
	'member_moderate_validate'	=> 'Hesabınız onaylanmıştır.<br />Admin Mesajı: <b>{remark}</b>',
	'member_moderate_invalidate_no_remark'	=> 'Hesabınız kontrol edilemiyor,lütfen <a href="home.php?mod=spacecp&ac=profile">tekrar başvurunuz</a>.',
	'member_moderate_validate_no_remark'	=> 'Hesabınız onaylanmıştır.',
	'manage_verifythread'		=> 'Onay bekleyen konular. <a href="admin.php?action=moderate&operation=threads&dateline=all">Verify now</a>',//'有新的待审核主题。<a href="admin.php?action=moderate&operation=threads&dateline=all">现在进行审核</a>',//'有新的待审核主题。<a href="admin.php?action=moderate&operation=threads&dateline=all">现在进行审核</a>',//'有新的待审核主题。<a href="admin.php?action=moderate&operation=threads&dateline=all">现在进行审核</a>',
	'manage_verifypost'		=> 'Onay bekleyen  cevaplar. <a href="admin.php?action=moderate&operation=replies&dateline=all">Verify now</a>',//'有新的待审核回帖。<a href="admin.php?action=moderate&operation=replies&dateline=all">现在进行审核</a>',
	'manage_verifyuser'		=> 'Onay bekleyen üyeler. <a href="admin.php?action=moderate&operation=members">Verify now</a>',//'有新的待审核会员。<a href="admin.php?action=moderate&operation=members">现在进行审核</a>',
	'manage_verifyblog'		=> 'Onay bekleyen  bloglar. <a href="admin.php?action=moderate&operation=blogs">Verify now</a>',//'有新的待审核日志。<a href="admin.php?action=moderate&operation=blogs">现在进行审核</a>',
	'manage_verifydoing'		=> 'Onay bekleyen yapılanlar. <a href="admin.php?action=moderate&operation=doings">Very now</a>',//'有新的待审核记录。<a href="admin.php?action=moderate&operation=doings">现在进行审核</a>',
	'manage_verifypic'		=> 'Onay bekleyen resimler. <a href="admin.php?action=moderate&operation=pictures">Verify now</a>',//'有新的待审核图片。<a href="admin.php?action=moderate&operation=pictures">现在进行审核</a>',
	'manage_verifyshare'		=> 'Onay bekleyen  paylaşımlar. <a href="admin.php?action=moderate&operation=shares">Verify now</a>',//'有新的待审核分享。<a href="admin.php?action=moderate&operation=shares">现在进行审核</a>',
	'manage_verifycommontes'	=> 'Onay bekleyen yorumlar/cevaplar. <a href="admin.php?action=moderate&operation=comments">Verify now</a>',//'有新的待审核留言/评论。<a href="admin.php?action=moderate&operation=comments">现在进行审核</a>',
	'manage_verifyrecycle'		=> 'Silinme onayı bekleyen konular  . <a href="admin.php?action=recyclebin">Verify now</a>',//'回收站有新的待处理主题。<a href="admin.php?action=recyclebin">现在处理</a>',
	'manage_verifyrecyclepost'	=> 'Silinme onayı bekleyen mesajlar. <a href="admin.php?action=recyclebinpost">Verify now</a>',//'回帖回收站有新的待处理回帖。<a href="admin.php?action=recyclebinpost">现在处理</a>',
	'manage_verifyarticle'		=> 'Onay bekleyen  makaleler. <a href="admin.php?action=moderate&operation=articles">Verify now</a>',//'有新的待审核文章。<a href="admin.php?action=moderate&operation=articles">现在进行审核</a>',
	'manage_verifymedal'		=> 'Onay bekleyen  ödüller. <a href="admin.php?action=medals&operation=mod">Verify now</a>',//'有新的待审核勋章申请。<a href="admin.php?action=medals&operation=mod">现在进行审核</a>',
	'manage_verifyacommont'		=> 'Onay bekleyen  makale yorumu. <a href="admin.php?action=moderate&operation=articlecomments">Verify now</a>',//'有新的待审核文章评论。<a href="admin.php?action=moderate&operation=articlecomments">现在进行审核</a>',
	'manage_verifytopiccommont'	=> 'Onay bekleyen  yazı yorumu. <a href="admin.php?action=moderate&operation=topiccomments">Verify now</a>',//'有新的待审核专题评论。<a href="admin.php?action=moderate&operation=topiccomments">现在进行审核</a>',
	'manage_verify_field'		=> 'Onay bekleyen  alanlar {verifyname}. <a href="admin.php?action=verify&operation=verify&do={doid}">Verify now</a>',//'有新的待处理{verifyname}。<a href="admin.php?action=verify&operation=verify&do={doid}">现在处理</a>',
	'system_notice'			=> '{subject}<p class="summary">{message}</p>',
	'system_adv_expiration'		=> 'The following ads on your site will be expired in {day} days. Please deal with:<br />{advs}',//'您站点的以下广告将于 {day} 天后到期，请及时处理：<br />{advs}',
	'report_change_credits'		=> '{actor} has deal with your report, your credits bonus {creditchange}',//'{actor} 处理了你的举报，你的 {creditchange}',
	'at_message'			=> '<a href="home.php?mod=space&uid={buyerid}" target="_blank">{buyer}</a> in the thread <a href="forum.php?mod=redirect&goto=findpost&ptid={tid}&pid={pid}" target="_blank">{subject}</a> mentioned of your name <div class="quote"><blockquote>{message}</blockquote></div><a href="forum.php?mod=redirect&goto=findpost&ptid={tid}&pid={pid}" target="_blank">View now</a>.',//'<a href="home.php?mod=space&uid={buyerid}" target="_blank">{buyer}</a> 在主题 <a href="forum.php?mod=redirect&goto=findpost&ptid={tid}&pid={pid}" target="_blank">{subject}</a> 中提到了你<div class="quote"><blockquote>{message}</blockquote></div><a href="forum.php?mod=redirect&goto=findpost&ptid={tid}&pid={pid}" target="_blank">现在去看看</a>。',
	'new_report'			=> 'new report pending, <a href="admin.php?action=report" target="_blank">Click here to manage it</a>.',//'有新的举报等待处理，<a href="admin.php?action=report" target="_blank">点此进入后台处理</a>。',
	'new_post_report'		=> 'New pending report, <a href="forum.php?mod=modcp&action=report&fid={fid}" target="_blank">Click here to enter the administration panel</a>.',//'有新的举报等待处理，<a href="forum.php?mod=modcp&action=report&fid={fid}" target="_blank">点此进入管理面版</a>。',
	'magics_receive'		=> '{actor} sent the magic {magicname} to you .
					<p class="summary">{actor} said: <span>{msg}</span></p>
					<p class="mbn"><a href="home.php?mod=magic" target="_blank">Return the gift back!</a>
					<span class="pipe">|</span><a href="home.php?mod=magic&action=mybox" target="_blank">View my magics</a></p>',
	'invite_collection'		=> '{actor} invite you to join the collecton <a href="forum.php?mod=collection&action=view&ctid={ctid}">{collectionname}</a> work team.<br /><a href="forum.php?mod=collection&action=edit&op=acceptinvite&ctid={ctid}&dateline={dateline}">Accept the invitation</a>',//'{actor} 邀请您参与维护淘专辑  <a href="forum.php?mod=collection&action=view&ctid={ctid}">{collectionname}</a>。<br /><a href="forum.php?mod=collection&action=edit&op=acceptinvite&ctid={ctid}&dateline={dateline}">接受邀请</a>',
	'collection_removed'		=> 'Your participation in the collection <a href="forum.php?mod=collection&action=view&ctid={ctid}">{collectionname}</a> work team was canceled by {actor}.',//'您参与维护的淘专辑  <a href="forum.php?mod=collection&action=view&ctid={ctid}">{collectionname}</a> 已被 {actor} 关闭。',
	'exit_collection'		=> 'You have successfully exited from the collection <a href="forum.php?mod=collection&action=view&ctid={ctid}">{collectionname}</a> work team',//'您已经退出维护淘专辑  <a href="forum.php?mod=collection&action=view&ctid={ctid}">{collectionname}</a>。',
	'collection_becommented'	=> 'Your collection <a href="forum.php?mod=collection&action=view&ctid={ctid}">{collectionname}</a> received new comment.',//'您的淘专辑  <a href="forum.php?mod=collection&action=view&ctid={ctid}">{collectionname}</a> 收到了新评论。',
	'collection_befollowed'		=> 'Your collection <a href="forum.php?mod=collection&action=view&ctid={ctid}">{collectionname}</a> new user subscribed!',//'您的淘专辑  <a href="forum.php?mod=collection&action=view&ctid={ctid}">{collectionname}</a> 有新用户订阅了！',
	'collection_becollected'	=> 'Congratulations, your thread <a href="forum.php?mod=viewthread&tid={tid}">{threadname}</a> was added to collection <a href="forum.php?mod=collection&action=view&ctid={ctid}">{collectionname}</a> !',//'恭喜您的主题 <a href="forum.php?mod=viewthread&tid={tid}">{threadname}</a> 被淘专辑  <a href="forum.php?mod=collection&action=view&ctid={ctid}">{collectionname}</a> 收录了！',

	'pmreportcontent'		=> '{pmreportcontent}',

	'thread_hidden'		=> 'Your thread <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> was marked as spam by multiple users, and has been hidden. &nbsp; <a href="forum.php?mod=viewthread&tid={tid}" target="_blank" class="lit">View &rsaquo;</a>',//'您的主题 <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> 被多个用户认定为垃圾帖，现已被隐藏 &nbsp; <a href="forum.php?mod=viewthread&tid={tid}" target="_blank" class="lit">查看 &rsaquo;</a>',

);

