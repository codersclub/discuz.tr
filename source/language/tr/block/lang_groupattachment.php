<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_groupattachment.php by Valery Votintsev, codersclub.org
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'groupattachment_name'			=> 'Attachment list',//'论坛附件列表',
	'groupattachment_desc'			=> 'Show attachment list',//'论坛附件列表调用',
	'groupattachment_fids'			=> 'Specified groups',//'指定群组',
	'groupattachment_fids_comment'		=> 'Set the forums can be used, use CTRL to select multiple forums',//'指定群组，多个ID之间请用半角逗号“,”隔开。',
	'groupattachment_tids'			=> 'Specified threads',//'指定主题',
	'groupattachment_tids_comment'		=> 'Select threads ID, use comma to separate threads IDs',//'指定主题ID，多个ID之间用逗号分隔',
	'groupattachment_gtids'			=> 'Group Categories',//'群组分类',
	'groupattachment_gtids_comment'		=> 'Set the category of group, use CTRL to select groups',//'设置群组所在分类，可以按住 CTRL 多选，全选或全不选均为不做限制',
	'groupattachment_startrow'		=> 'Start Row',//'起始数据行数',
	'groupattachment_startrow_comment'	=> 'If you need to set start row, please enter a number, 0 is the first row',//'如需设定起始的数据行数，请输入具体数值，0 为从第一行开始，以此类推',
	'groupattachment_items'			=> 'Rows',//'显示数据条数',
	'groupattachment_items_comment'		=> 'Set the numbers of rows you want to display, it must integer and larger than 0',//'设置一次显示的图片主题条目数，请设置为大于 0 的整数',
	'groupattachment_titlelength'		=> 'Title length',//'标题长度',
	'groupattachment_titlelength_comment'	=> 'Set the max length of attachment name/posts title',//'设置当附件名称/帖子标题显示的最大长度',
	'groupattachment_summarylength'		=> 'Summary length',//'内容长度',
	'groupattachment_summarylength_comment'	=> 'Set the max length of attachment summary/posts content',//'设置附件介绍/帖子内容显示的最大长度',
	'groupattachment_maxwidth'		=> 'Max image width, px',//'图片最大宽度(像素)',
	'groupattachment_maxwidth_comment'	=> 'Set the max image size to zoom to this width automatically, set 0 to disable zoom',//'设置是否自动缩小或放大图片的尺寸到本设定的宽度，0 为不自动缩放',
	'groupattachment_maxheight'		=> 'Max image height, px',//'图片最大高度(像素)',
	'groupattachment_maxheight_comment'	=> 'Set the image to zoom to this height automatically, set 0 to disable zoom',//'设置是否自动缩小或放大图片的尺寸到本设定的高度，0 为不自动缩放',
	'groupattachment_threadmethod'		=> 'Thread attach method',//'主题方式调用',
	'groupattachment_threadmethod_comment'	=> 'Select "Yes" will be invoked in accordance with Attach thread, a thread display an attachment; "No" in accordance with an attachment called',//'选择“是”将按照主题方式调用附件，一个主题显示一个附件；选择“否”将按照附件方式调用',
	'groupattachment_digest'		=> 'Digest Filter',//'精华帖过滤',
	'groupattachment_digest_comment'	=> 'Select specific thread range. Note: Select All or None for disable filtering',//'设置特定的主题范围。注意: 全选或全不选均为不进行任何过滤',
	'groupattachment_digest_0'		=> 'General thread',//'普通主题',
	'groupattachment_digest_1'		=> 'Digest I',//'精华 I',
	'groupattachment_digest_2'		=> 'Digest II',//'精华 II',
	'groupattachment_digest_3'		=> 'Digest III',//'精华 III',
	'groupattachment_special'		=> 'Special thread filter',//'特殊主题过滤',
	'groupattachment_special_comment'	=> 'Select specific thread range. Note: Select All or None for disable filtering',//'设置特定的主题范围。注意: 全选或全不选均为不进行任何过滤',
	'groupattachment_special_1'		=> 'Poll thread',//'投票主题',
	'groupattachment_special_2'		=> 'Market thread',//'商品主题',
	'groupattachment_special_3'		=> 'Award thread',//'悬赏主题',
	'groupattachment_special_4'		=> 'Event thread',//'活动主题',
	'groupattachment_special_5'		=> 'Debate thread',//'辩论主题',
	'groupattachment_special_0'		=> 'General thread',//'普通主题',
	'groupattachment_special_reward'	=> 'Reward Filter',//'悬赏主题过滤',
	'groupattachment_special_reward_comment'	=> 'Select specific types of reward',//'设置特定类型的悬赏主题',
	'groupattachment_special_reward_0'		=> 'All',//'全部',
	'groupattachment_special_reward_1'		=> 'Finished',//'已解决',
	'groupattachment_special_reward_2'		=> 'Active',//'未解决',
	'groupattachment_dateline'			=> 'Upload time',//'附件上传时间',
	'groupattachment_dateline_nolimit'		=> 'No limit',//'不限制',
	'groupattachment_dateline_hour'			=> 'Last hour',//'最近1小时',
	'groupattachment_dateline_day'			=> 'Last day',//'最近24小时',
	'groupattachment_dateline_week'			=> 'Last week',//'最近1周',
	'groupattachment_dateline_month'		=> 'Last month',//'最近1月',
	'groupattachment_gviewperm'			=> 'Group view permissions',//'群组浏览权限',
	'groupattachment_gviewperm_nolimit'		=> 'No limits',//'不限制',
	'groupattachment_gviewperm_only_member'		=> 'Members only',//'仅成员',
	'groupattachment_gviewperm_all_member'		=> 'All',//'所有人',
	'groupattachment_highlight'			=> 'Highlight found words',//'获得高亮值',
);

