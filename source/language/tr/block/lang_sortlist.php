<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_sortlist.php by Valery Votintsev, codersclub.org
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'sortlist_fids'			=> 'Forums',//'所在版块',
	'sortlist_fids_comment'		=> 'Set the forums can be called, you can use CTRL to select forums',//'设置允许参与新帖调用的版块，可以按住 CTRL 多选，全选或全不选均为不做限制',
	'sortlist_startrow'		=> 'Start Row',//'起始数据行数',
	'sortlist_startrow_comment'	=> 'If you need to set start row, please enter a number, 0 is the first row',//'如需设定起始的数据行数，请输入具体数值，0 为从第一行开始，以此类推',
	'sortlist_showitems'		=> 'Rows',//'显示数据条数',
	'sortlist_showitems_comment'	=> 'Set the numbers of rows you want to display, it must integer and larger than 0',//'设置一次显示的主题条目数，请设置为大于 0 的整数',
	'sortlist_titlelength'		=> 'Title length',//'标题最大字节数',
	'sortlist_titlelength_comment'	=> 'Set the max length of title, when the title is longer than this valuse, it will be cutted automatically, 0 is disable',//'设置当标题长度超过本设定时，是否将标题自动缩减到本设定中的字节数，0 为不自动缩减',
	'sortlist_fnamelength'		=> 'Forum Title Length',//'标题最大字节数包含版块名称',
	'sortlist_fnamelength_comment'	=> 'Set the title max length including the forum name',//'设置标题长度是否将所在版块名称的长度一同计算在内',
	'sortlist_summarylength'		=> 'Summary Length',//'主题简短内容文字数',
	'sortlist_summarylength_comment'	=> 'Set the length of summary, 0 equal to default value (255)',//'设置主题简短内容的文字数，0 为使用默认值 255',
	'sortlist_tids'			=> 'Specified threads',//'指定主题',
	'sortlist_tids_comment'		=> 'Set the specified threads tid you want to display, use "," to seperate tids',//'设置要指定显示的主题 tid ，多个 tid 请用半角逗号“,”隔开。注意: 留空为不进行任何过滤',
	'sortlist_keyword'		=> 'Keywords',//'标题关键字',
	'sortlist_keyword_comment'	=> 'Set the keywords used.<br />You can use wildcard "*" in keywords.<br />If you want to use some keywords at same time, you can use "AND". Example: win32 AND unix.<br />If you want to use just one of keywords, you can use "|" or "OR". Example: win32 OR unix',//'设置标题包含的关键字。注意: 留空为不进行任何过滤； 关键字中可使用通配符 *； 匹配多个关键字全部，可用空格或 AND 连接。如 win32 AND unix； 匹配多个关键字其中部分，可用 | 或 OR 连接。如 win32 OR unix',
	'sortlist_typeids'		=> 'Thread types',//'主题分类',
	'sortlist_typeids_comment'	=> 'Select specific thread type. Note: Select All or Clear All for disable any filtering.',//'设置特定分类的主题。注意: 全选或全不选均为不进行任何过滤',
	'sortlist_typeids_all'		=> 'All thread types',//'全部的主题分类',
	'sortlist_sortids'		=> 'Sort IDs(Categories?)',//'分类信息',
	'sortlist_sortids_comment'	=> 'Set the thread classification. Note: Select All or None for disable filtering',//'设置特定分类信息的主题。注意: 全选或全不选均为不进行任何过滤',
	'sortlist_sortids_all'		=> 'All categories',//'全部的分类信息',
	'sortlist_digest'		=> 'Digest Filter',//'精华主题过滤',
	'sortlist_digest_comment'	=> 'Select specific thread range. Note: Select All or None for disable filtering',//'设置特定的主题范围。注意: 全选或全不选均为不进行任何过滤',
	'sortlist_digest_0'		=> 'General thread',//'普通主题',
	'sortlist_digest_1'		=> 'Digest I',//'精华 I',
	'sortlist_digest_2'		=> 'Digest II',//'精华 II',
	'sortlist_digest_3'		=> 'Digest III',//'精华 III',
	'sortlist_stick'		=> 'Stick filter',//'置顶主题过滤',
	'sortlist_stick_comment'	=> 'Select specific thread range. Note: Select All or None for disable filtering',//'设置特定的主题范围。注意: 全选或全不选均为不进行任何过滤',
	'sortlist_stick_0'		=> 'General thread',//'普通主题',
	'sortlist_stick_1'		=> 'Stick I',//'置顶 I',
	'sortlist_stick_2'		=> 'Stick II',//'置顶 II',
	'sortlist_stick_3'		=> 'Stick III',//'置顶 III',
	'sortlist_special'		=> 'Special thread filter',//'特殊主题过滤',
	'sortlist_special_comment'	=> 'Select specific thread range. Note: Select All or None for disable filtering',//'设置特定的主题范围。注意: 全选或全不选均为不进行任何过滤',
	'sortlist_special_1'		=> 'Poll thread',//'投票主题',
	'sortlist_special_2'		=> 'Market thread',//'商品主题',
	'sortlist_special_3'		=> 'Award thread',//'悬赏主题',
	'sortlist_special_4'		=> 'Event thread',//'活动主题',
	'sortlist_special_5'		=> 'Debate thread',//'辩论主题',
	'sortlist_special_0'		=> 'General thread',//'普通主题',
	'sortlist_special_reward'		=> 'Reward Filter',//'悬赏主题过滤',
	'sortlist_special_reward_comment'	=> 'Select specific types of reward',//'设置特定类型的悬赏主题',
	'sortlist_special_reward_0'	=> 'All',//'全部',
	'sortlist_special_reward_1'	=> 'Finished',//'已解决',
	'sortlist_special_reward_2'	=> 'Active',//'未解决',
	'sortlist_recommend'		=> 'Recommended thread filter',//'推荐主题过滤',
	'sortlist_recommend_comment'	=> 'Display only recommended threads',//'设置是否只显示推荐的主题',
	'sortlist_orderby'		=> 'Ordered by',//'主题排序方式',
	'sortlist_orderby_comment'	=> 'Set the ordering of threads',//'设置以哪一字段或方式对主题进行排序',
	'sortlist_orderby_lastpost'	=> 'Last post',//'按最后回复时间倒序排序',
	'sortlist_orderby_dateline'	=> 'Start time',//'按发布时间倒序排序',
	'sortlist_orderby_replies'	=> 'Replies',//'按回复数倒序排序',
	'sortlist_orderby_views'	=> 'Views',//'按浏览次数倒序排序',
	'sortlist_orderby_heats'	=> 'Hot',//'按热度倒序排序',
	'sortlist_orderby_recommends'	=> 'Recommends',//'按主题评价倒序排序',
	'sortlist_lastpost'		=> 'Last post time',//'主题发布时间',
	'sortlist_lastpost_nolimit'	=> 'No limit',//'不限制',
	'sortlist_lastpost_hour'	=> 'Last hour',//'一小时内',
	'sortlist_lastpost_day'		=> 'Last day',//'一天内',
	'sortlist_lastpost_week'	=> 'Last week',//'一周内',
	'sortlist_lastpost_month'	=> 'Last month',//'一月内',
	'sortlist_orderby_hours_comment'	=> 'Set the specific time of views in',//'指定时间内浏览次数倒序排序的时间值',
);

