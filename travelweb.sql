-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2014-10-16 12:08:40
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `travelweb`
--

-- --------------------------------------------------------

--
-- 表的结构 `tr_comment`
--

CREATE TABLE IF NOT EXISTS `tr_comment` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `nid` int(11) NOT NULL COMMENT 'noteid',
  `uid` int(11) NOT NULL,
  `uname` varchar(40) COLLATE utf8_bin NOT NULL,
  `content` text COLLATE utf8_bin NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `tr_comment`
--

INSERT INTO `tr_comment` (`cid`, `nid`, `uid`, `uname`, `content`, `date`) VALUES
(1, 12, 1, 'skywish', '很棒！', '2014-10-15 09:11:20');

-- --------------------------------------------------------

--
-- 表的结构 `tr_notes`
--

CREATE TABLE IF NOT EXISTS `tr_notes` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `author` varchar(40) DEFAULT NULL,
  `title` varchar(40) NOT NULL,
  `category` tinyint(4) NOT NULL,
  `head` text NOT NULL,
  `preview` text NOT NULL,
  `content` text NOT NULL,
  `voteup` mediumint(9) NOT NULL DEFAULT '0',
  `votedown` mediumint(9) NOT NULL DEFAULT '0',
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- 转存表中的数据 `tr_notes`
--

INSERT INTO `tr_notes` (`id`, `author`, `title`, `category`, `head`, `preview`, `content`, `voteup`, `votedown`, `date`) VALUES
(15, 'skywish', '我的8天稻城亚丁之旅', 0, '早就听说成都到康定在', '看了很多游记攻略，早就听说成都到康定在修路，以为修好咯！结果。。。。。我们晚上11点左右才到康定，本应该走7个小时的路程，我们却走了14个小时，那知道这才是开始。康定的晚上，一下车有很多人，叫你住宿的或者第二天拼车到稻城的。住宿可以先定起，只要是淡季住宿还是不贵的。图片描述：晚上的康定拍摄地点：康定还好车上遇到一个当兵的好人，我们定的客栈就在他们部队的对面，下车过后他还送我们到客栈(*^__^*)', '&lt;p style=&quot;margin-top: 0px; margin-bottom: 1em; padding: 0px; min-height: 20px; color: rgb(51, 51, 51); font-family: Arial, 宋体; font-size: 14px; line-height: 21px; white-space: normal;&quot;&gt;早就听说&lt;a href=&quot;http://lvyou.baidu.com/scene/view/cb118915309ea171641416f7&quot; class=&quot;a-notes-innerlink&quot; target=&quot;_blank&quot; style=&quot;text-decoration: none; color: rgb(0, 126, 217);&quot;&gt;成都&lt;/a&gt;到康定在修路，以为修好咯！结果。。。。。&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 1em; padding: 0px; min-height: 20px; color: rgb(51, 51, 51); font-family: Arial, 宋体; font-size: 14px; line-height: 21px; white-space: normal;&quot;&gt;我们晚上11点左右才到&lt;a href=&quot;http://lvyou.baidu.com/scene/view/603d3dff1e4019c66b17addc&quot; class=&quot;a-notes-innerlink&quot; target=&quot;_blank&quot; style=&quot;text-decoration: none; color: rgb(0, 126, 217);&quot;&gt;康定&lt;/a&gt;，本应该走7个小时的路程，我们却走了14个小时，那知道这才是开始。&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 1em; padding: 0px; min-height: 20px; color: rgb(51, 51, 51); font-family: Arial, 宋体; font-size: 14px; line-height: 21px; white-space: normal;&quot;&gt;康定的晚上，一下车有很多人，叫你住宿的或者第二天拼车到&lt;a href=&quot;http://lvyou.baidu.com/scene/view/19bbbaeb76b3690f23d1badc&quot; class=&quot;a-notes-innerlink&quot; target=&quot;_blank&quot; style=&quot;text-decoration: none; color: rgb(0, 126, 217);&quot;&gt;稻城&lt;/a&gt;的。住宿可以先定起，只要是淡季住宿还是不贵的。&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 1em; padding: 0px; min-height: 20px; color: rgb(51, 51, 51); font-family: Arial, 宋体; font-size: 14px; line-height: 21px; white-space: normal;&quot;&gt;&lt;br/&gt;&lt;br/&gt;&lt;a href=&quot;http://lvyou.baidu.com/notes/photo/d48bfffbf3e6011ce0734a57&quot; target=&quot;_blank&quot; class=&quot;notes-photo-link&quot; style=&quot;text-decoration: none; display: inline-block; max-width: 600px; color: rgb(0, 126, 217);&quot;&gt;&lt;img class=&quot;notes-photo-img&quot; src=&quot;http://f.hiphotos.baidu.com/lvpics/s%3D800/sign=0f9d3a410ad162d981ee6f1c21dea950/eaf81a4c510fd9f9dabf21ec252dd42a2934a48e.jpg&quot; data-purl=&quot;eaf81a4c510fd9f9dabf21ec252dd42a2934a48e&quot; width=&quot;600&quot; height=&quot;450&quot; data-id=&quot;d48bfffbf3e6011ce0734a57&quot; data-url=&quot;eaf81a4c510fd9f9dabf21ec252dd42a2934a48e&quot; data-desc=&quot;done&quot; style=&quot;border: 0px; max-width: 600px; display: block; margin-bottom: 0px;&quot;/&gt;&lt;/a&gt;&lt;br class=&quot;notes-photo-description-br&quot; style=&quot;height: 0px; font-size: 0px; line-height: 0; clear: both;&quot;/&gt;&lt;span class=&quot;notes-photo-description&quot; style=&quot;display: inline-block; zoom: 1; padding: 0px 0px 5px; font-size: 12px; line-height: 18px; font-family: SimSun; width: 600px;&quot;&gt;&lt;span class=&quot;des-l&quot; style=&quot;float: left;&quot;&gt;图片描述：晚上的康定&lt;/span&gt;&lt;span class=&quot;scene-r&quot; style=&quot;float: right; padding-left: 12px; background-image: url(http://lvyou3.bdimg.com/static/notes/ui/view/lazy-load/img/photo-scene_03132290.png); background-position: -3px 2px; background-repeat: no-repeat no-repeat;&quot;&gt;拍摄地点：康定&lt;/span&gt;&lt;/span&gt;&lt;br/&gt;&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 1em; padding: 0px; min-height: 20px; color: rgb(51, 51, 51); font-family: Arial, 宋体; font-size: 14px; line-height: 21px; white-space: normal;&quot;&gt;还好车上遇到一个当兵的好人，我们定的客栈就在他们部队的对面，下车过后他还送我们到客栈(*^__^*) 嘻嘻……&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 1em; padding: 0px; min-height: 20px; color: rgb(51, 51, 51); font-family: Arial, 宋体; font-size: 14px; line-height: 21px; white-space: normal;&quot;&gt;唉，走的时候居然忘了问他叫什么名字，我们的恩人呐。。。&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 1em; padding: 0px; min-height: 20px; color: rgb(51, 51, 51); font-family: Arial, 宋体; font-size: 14px; line-height: 21px; white-space: normal;&quot;&gt;附一张我们住的&lt;span style=&quot;font-family: Tahoma;&quot;&gt;藏羚人背包&lt;/span&gt;客栈的图片吧，哈哈，老板说停水了，就收我们一个床铺20元，我们那间是6人间，但是只有我俩，还是可以的&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 1em; padding: 0px; min-height: 20px; color: rgb(51, 51, 51); font-family: Arial, 宋体; font-size: 14px; line-height: 21px; white-space: normal;&quot;&gt;&lt;br/&gt;&lt;br/&gt;&lt;a href=&quot;http://lvyou.baidu.com/notes/photo/54b28fa07cef321200ee5b57&quot; target=&quot;_blank&quot; class=&quot;notes-photo-link&quot; style=&quot;text-decoration: none; display: inline-block; max-width: 600px; color: rgb(0, 126, 217);&quot;&gt;&lt;img class=&quot;notes-photo-img&quot; src=&quot;http://e.hiphotos.baidu.com/lvpics/s%3D800/sign=c5d6d568a144ad342abf8a87e0a00c08/8d5494eef01f3a297900a24b9925bc315d607c6e.jpg&quot; data-purl=&quot;8d5494eef01f3a297900a24b9925bc315d607c6e&quot; width=&quot;450&quot; height=&quot;600&quot; data-id=&quot;54b28fa07cef321200ee5b57&quot; data-url=&quot;8d5494eef01f3a297900a24b9925bc315d607c6e&quot; data-desc=&quot;done&quot; style=&quot;border: 0px; max-width: 600px; display: block; margin-bottom: 0px;&quot;/&gt;&lt;/a&gt;&lt;br class=&quot;notes-photo-description-br&quot; style=&quot;height: 0px; font-size: 0px; line-height: 0; clear: both;&quot;/&gt;&lt;span class=&quot;notes-photo-description&quot; style=&quot;display: inline-block; zoom: 1; padding: 0px 0px 5px; font-size: 12px; line-height: 18px; font-family: SimSun; width: 450px;&quot;&gt;&lt;span class=&quot;des-l&quot; style=&quot;float: left;&quot;&gt;图片描述：康定藏羚人背包客栈&lt;/span&gt;&lt;span class=&quot;scene-r&quot; style=&quot;float: right; padding-left: 12px; background-image: url(http://lvyou3.bdimg.com/static/notes/ui/view/lazy-load/img/photo-scene_03132290.png); background-position: -3px 2px; background-repeat: no-repeat no-repeat;&quot;&gt;拍摄地点：康定&lt;/span&gt;&lt;/span&gt;&lt;br/&gt;&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 1em; padding: 0px; min-height: 20px; color: rgb(51, 51, 51); font-family: Arial, 宋体; font-size: 14px; line-height: 21px; white-space: normal;&quot;&gt;&lt;strong&gt;附上几个客栈，要去的同学可以参考一下：&lt;/strong&gt;&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 1em; padding: 0px; min-height: 20px; color: rgb(51, 51, 51); font-family: Arial, 宋体; font-size: 14px; line-height: 21px; white-space: normal;&quot;&gt;&amp;nbsp;&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 1em; padding: 0px; min-height: 20px; color: rgb(51, 51, 51); font-family: Arial, 宋体; font-size: 14px; line-height: 21px; white-space: normal;&quot;&gt;&lt;span style=&quot;font-family: Tahoma; font-size: 10.5pt;&quot;&gt;康定藏羚人背包客栈&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 1em; padding: 0px; min-height: 20px; color: rgb(51, 51, 51); font-family: Arial, 宋体; font-size: 14px; line-height: 21px; white-space: normal;&quot;&gt;&lt;span style=&quot;font-family: Tahoma; font-size: 10.5pt;&quot;&gt;&lt;/span&gt;&amp;nbsp;&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 1em; padding: 0px; min-height: 20px; color: rgb(51, 51, 51); font-family: Arial, 宋体; font-size: 14px; line-height: 21px; white-space: normal;&quot;&gt;&lt;span style=&quot;font-family: Tahoma; font-size: 10.5pt;&quot;&gt;地址：四川康定县南郊金刚寺旁&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 1em; padding: 0px; min-height: 20px; color: rgb(51, 51, 51); font-family: Arial, 宋体; font-size: 14px; line-height: 21px; white-space: normal;&quot;&gt;&lt;span style=&quot;font-family: Tahoma; font-size: 10.5pt;&quot;&gt;电话：0836-2838377/6669666&lt;/span&gt;&lt;span style=&quot;font-family: 宋体; font-size: 10.5pt;&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&lt;/span&gt;&lt;span style=&quot;font-family: Tahoma; font-size: 10.5pt;&quot;&gt;13108360333&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', 2, 0, '2014-10-16 17:46:28');

-- --------------------------------------------------------

--
-- 表的结构 `tr_user`
--

CREATE TABLE IF NOT EXISTS `tr_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` char(20) COLLATE utf8_bin NOT NULL DEFAULT '',
  `password` char(32) COLLATE utf8_bin NOT NULL DEFAULT '',
  `email` char(32) COLLATE utf8_bin NOT NULL DEFAULT '',
  `logintime` datetime NOT NULL,
  `loginip` char(20) COLLATE utf8_bin NOT NULL DEFAULT '',
  `islock` tinyint(1) NOT NULL DEFAULT '0',
  `role` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `tr_user`
--

INSERT INTO `tr_user` (`id`, `username`, `password`, `email`, `logintime`, `loginip`, `islock`, `role`) VALUES
(1, 'skywish', 'e10adc3949ba59abbe56e057f20f883e', 'skywish@yeah.net', '2014-10-16 18:00:36', '0.0.0.0', 0, 0),
(2, 'admin', 'e10adc3949ba59abbe56e057f20f883e', '752197149@qq.com', '2014-10-16 18:06:24', '0.0.0.0', 0, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
