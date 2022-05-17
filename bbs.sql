-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- 主机： localhost
-- 生成日期： 2022-05-08 10:33:23
-- 服务器版本： 8.0.20
-- PHP 版本： 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `bbs`
--

-- --------------------------------------------------------

--
-- 表的结构 `forum_reply`
--

CREATE TABLE `forum_reply` (
  `id` int NOT NULL,
  `topic_id` int NOT NULL DEFAULT '0',
  `reply_id` int NOT NULL DEFAULT '0',
  `reply_name` varchar(32) CHARACTER SET gbk COLLATE gbk_chinese_ci NOT NULL,
  `reply_email` varchar(100) CHARACTER SET gbk COLLATE gbk_chinese_ci NOT NULL,
  `reply_detail` text CHARACTER SET gbk COLLATE gbk_chinese_ci NOT NULL,
  `reply_datetime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `forum_reply`
--

INSERT INTO `forum_reply` (`id`, `topic_id`, `reply_id`, `reply_name`, `reply_email`, `reply_detail`, `reply_datetime`) VALUES
(49, 32, 7, 'momeakl', '123245@163.com', '发现bug一枚，评论消息超过四条时，第五条开始跑到第一条的位置', '2015-05-30 20:13:00'),
(48, 32, 6, 'momeakl', '123245@163.com', '     首行缩进哟首行缩进哟首行缩进哟首行缩进哟首行缩进哟首行缩进哟首行缩进哟首行缩进哟首行缩进哟首行缩进哟首行缩进哟首行缩进哟', '2015-05-30 20:11:57'),
(43, 32, 1, 'admin', '', '声の行\r\n那朵花\r\n花の语\r\n', '2015-05-20 20:29:05'),
(44, 32, 2, 'momeakl', '123245@163.com', '海贼王\r\n东京喰种\r\n火影忍者', '2015-05-30 20:09:58'),
(45, 32, 3, 'momeakl', '123245@163.com', '海派甜心\r\n的啦的啦的啦的啦', '2015-05-30 20:10:34'),
(46, 32, 4, 'momeakl', '123245@163.com', '你好啊，你好啊你好啊，你好啊，你好啊，你好啊', '2015-05-30 20:10:56'),
(47, 32, 5, 'momeakl', '123245@163.com', '呼呼呼，哈哈哈哈呼呼呼，哈哈哈哈呼呼呼，哈哈哈哈呼呼呼，哈哈哈哈呼呼呼，哈哈哈哈呼呼呼，哈哈哈哈呼呼呼，哈哈哈哈呼呼呼，哈哈哈哈', '2015-05-30 20:11:19'),
(41, 31, 2, 'he-will', 'erad@dd.con', '大大大大', '2015-05-20 15:33:16'),
(42, 31, 3, 'he-will', 'erad@dd.con', '哈哈哈哈哈', '2015-05-20 15:33:23'),
(40, 31, 1, 'he-will', 'erad@dd.con', '啦啦啦啦啦\r\n', '2015-05-20 15:33:06'),
(39, 25, 4, 'momeakl', '123245@163.com', '空格  发现俩bug，提交后空格不被读取，tab键在该文本框无法使用', '2015-05-18 21:32:28'),
(38, 25, 3, 'momeakl', '123245@163.com', '啦啦啦啦啦啦啦啦啦', '2015-05-18 21:31:04'),
(37, 25, 2, 'momeakl', '123245@163.com', '哈哈哈哈哈哈', '2015-05-18 21:30:56'),
(32, 20, 1, 'momeakl', '123245@163.com', '     Best wishes to you~  感恩生活，珍惜拥有', '2015-05-17 11:24:28'),
(33, 23, 1, 'admin', '', '1.按钮需要美化、调整\r\n2.暂时没想到', '2015-05-17 21:45:30'),
(36, 25, 1, 'momeakl', '123245@163.com', '    怀一颗感恩心 啦啦啦啦啦啦啦啦', '2015-05-18 21:30:45'),
(31, 21, 1, 'momeakl', '123245@163.com', '多多捧场！！！', '2015-05-16 21:55:27'),
(30, 19, 2, 'momeakl', '123245@163.com', '没问题~~~~', '2015-05-16 21:54:21'),
(29, 19, 1, 'momeakl', '123245@163.com', '好哒~~~', '2015-05-16 21:54:09'),
(50, 35, 1, 'admin', '', '管理员进行 评论', '2015-06-07 14:44:18'),
(51, 33, 1, 'admin', '', '454687', '2015-06-10 20:17:08'),
(52, 33, 2, 'admin', '', '54857874', '2015-06-10 20:17:12'),
(53, 36, 1, '62675280', '182921234@qq.com', 'asd', '2022-03-18 22:35:20'),
(54, 36, 2, '62675280', '182921234@qq.com', 'dsad', '2022-03-18 22:35:22'),
(55, 33, 3, '62675280', '182921234@qq.com', 'das', '2022-03-20 22:36:04'),
(56, 33, 4, '62675280', '182921234@qq.com', 'sfaf', '2022-03-27 21:12:16'),
(58, 25, 5, 'admin', '1829212349@qq.com', 'dasd', '2022-05-01 14:34:16'),
(63, 41, 1, 'admin', '1829212349@qq.com', 'sdsada', '2022-05-08 09:40:39'),
(66, 43, 1, 'lxsdbd', '8292@QQ.COM', '有笨蛋，我不说话\r\n', '2022-05-08 10:16:41'),
(65, 25, 7, 'laiweidedie', 'a664912174@gmail.com', '?', '2022-05-08 10:13:49'),
(64, 25, 6, 'test', 'ryintoin@gmail.com', 'dsad', '2022-05-08 09:41:02'),
(67, 42, 1, 'lxsdbd', '8292@QQ.COM', '你妈\r\n', '2022-05-08 10:16:54'),
(68, 43, 2, 'laiweidedie', 'a664912174@gmail.com', '好', '2022-05-08 10:18:06'),
(69, 43, 3, 'lxsdbd', '8292@QQ.COM', '？\r\n', '2022-05-08 10:18:11');

-- --------------------------------------------------------

--
-- 表的结构 `forum_topic`
--

CREATE TABLE `forum_topic` (
  `id` int NOT NULL,
  `topic` varchar(255) CHARACTER SET gbk COLLATE gbk_chinese_ci NOT NULL,
  `detail` text CHARACTER SET gbk COLLATE gbk_chinese_ci NOT NULL,
  `name` varchar(32) CHARACTER SET gbk COLLATE gbk_chinese_ci NOT NULL,
  `email` varchar(100) CHARACTER SET gbk COLLATE gbk_chinese_ci NOT NULL,
  `datetime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `view` int NOT NULL DEFAULT '0',
  `reply` int NOT NULL DEFAULT '0',
  `sticky` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `forum_topic`
--

INSERT INTO `forum_topic` (`id`, `topic`, `detail`, `name`, `email`, `datetime`, `view`, `reply`, `sticky`) VALUES
(25, '感恩生活，珍惜拥有', '1.Thanksgiving life, cherish the owns\r\n2.怀一颗感恩的心对待生活\r\n3.换行符管用喔', 'admin', '', '2022-05-01 09:32:52', 152, 7, 1),
(19, '发帖公告', '话题和正文都是必填项。最好别掺入HTML代码。Thanksgiving life, cherish the owns 。', 'admin', '', '2022-05-01 09:32:52', 24, 2, 1),
(20, '蔚蓝论坛', '感恩生活,珍惜拥有,Best wishes to you. by Energy', 'admin', '', '2022-05-01 09:32:52', 14, 1, 1),
(21, '第一帖', '感恩生活,珍惜拥有,Best wishes to you. by momeakl^.^', 'momeakl', '123245@163.com', '2022-05-01 09:32:52', 27, 1, 1),
(42, '感觉不如原神', '画质', 'laiweidedie', 'a664912174@gmail.com', '2022-05-08 10:15:12', 9, 1, 0),
(43, '这里有笨蛋', '等级5\r\n', 'lxsdbd', '8292@QQ.COM', '2022-05-08 10:15:45', 14, 3, 0),
(23, '初步完工', '蔚蓝论坛已在2022.3.18重构完成，部分问题有待日后逐步解决', '001', '000@ww.ch', '2022-05-01 09:32:52', 15, 1, 0),
(27, '蔚蓝', '勇攀高峰，死亡4256次', 'In_Energy', 'energy@163.com', '2022-05-01 09:32:52', 4, 0, 0),
(28, '声之形', '声音传达时的形状会是什么样子的', 'In_Energy', 'energy@163.com', '2022-05-01 09:32:52', 6, 0, 0),
(29, '花之语论坛', '             花之语论坛欢迎你', 'momeakl', '123245@163.com', '2022-05-01 09:32:52', 19, 0, 0),
(41, 'dsad', 'dasdasd', 'admin', '1829212349@qq.com', '2022-05-08 09:40:32', 3, 1, 0),
(31, '新人贴', '测试用\r\n木有问题', 'he-will', 'erad@dd.con', '2022-05-01 09:32:52', 27, 3, 0),
(33, '那年我们所见的那朵花的名字，未闻花名', '那年我们所见的那朵花的名字', 'momeakl', '123245@163.com', '2022-05-01 09:32:52', 38, 4, 0),
(35, '测试测试', '话题和正文都是必填项话题和正文都是必填项话题和正文都是必填项话题和正文都是必填项话题和正文都是必填项话题和正文都是必填项话题和正文都是必填项话题和正文都是必填项', 'momeakl', '123245@163.com', '2022-05-01 09:32:52', 13, 1, 0),
(36, '黑山羊之卵', '撒大苏打', '金木研', 'momeakl@163.com', '2022-05-01 09:32:52', 12, 2, 0);

-- --------------------------------------------------------

--
-- 表的结构 `forum_user`
--

CREATE TABLE `forum_user` (
  `id` int NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(100) NOT NULL,
  `akey` int NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

--
-- 转存表中的数据 `forum_user`
--

INSERT INTO `forum_user` (`id`, `username`, `password`, `email`, `akey`) VALUES
(24, 'admin', 'm123456', '1829212349@qq.com', 1),
(26, 'laiweidedie', 'yv2002925', 'a664912174@gmail.com', 0),
(25, 'test', 'm123456', 'ryintoin@gmail.com', 0),
(27, 'lxsdbd', 'MZ2256336', '8292@QQ.COM', 0);

--
-- 转储表的索引
--

--
-- 表的索引 `forum_reply`
--
ALTER TABLE `forum_reply`
  ADD PRIMARY KEY (`id`),
  ADD KEY `a_id` (`reply_id`);

--
-- 表的索引 `forum_topic`
--
ALTER TABLE `forum_topic`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `forum_user`
--
ALTER TABLE `forum_user`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `forum_reply`
--
ALTER TABLE `forum_reply`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- 使用表AUTO_INCREMENT `forum_topic`
--
ALTER TABLE `forum_topic`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- 使用表AUTO_INCREMENT `forum_user`
--
ALTER TABLE `forum_user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
