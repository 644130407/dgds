/*
Navicat MySQL Data Transfer

Source Server         : 1
Source Server Version : 50540
Source Host           : localhost:3306
Source Database       : dgds

Target Server Type    : MYSQL
Target Server Version : 50540
File Encoding         : 65001

Date: 2015-07-03 16:19:49
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for nkbh_administrator
-- ----------------------------
DROP TABLE IF EXISTS `nkbh_administrator`;
CREATE TABLE `nkbh_administrator` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `realname` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `jurisdiction` varchar(255) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of nkbh_administrator
-- ----------------------------
INSERT INTO `nkbh_administrator` VALUES ('1', 'admin', 'b59c67bf196a4758191e42f76670ceba', 'yjgly', '2', '办公室', '111111', '超级管理员', '192.168.1.101', '1435910578');
INSERT INTO `nkbh_administrator` VALUES ('2', 'adminb', '934b535800b1cba8f96a5d72f72f1611', 'ejgly', '1', '2', '2', '二级管理员', '192.168.1.102', '1435031005');
INSERT INTO `nkbh_administrator` VALUES ('3', 'adminc', '2be9bd7a3434f7038ca27d1918de58bd', 'sjgl', '1', '3', '3', '三级管理员', '192.168.1.102', '1435045275');

-- ----------------------------
-- Table structure for nkbh_article
-- ----------------------------
DROP TABLE IF EXISTS `nkbh_article`;
CREATE TABLE `nkbh_article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lable` varchar(50) NOT NULL,
  `writer` varchar(20) DEFAULT NULL,
  `time` varchar(30) NOT NULL,
  `content` text NOT NULL,
  `type` int(11) NOT NULL,
  `state` int(2) DEFAULT NULL,
  `top` int(2) DEFAULT NULL,
  `column` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of nkbh_article
-- ----------------------------
INSERT INTO `nkbh_article` VALUES ('1', '这是第1条消息', '1', '2015-07-18', '<p>你好，这里是第一条测试消息</p>', '1', '1', null, '0');
INSERT INTO `nkbh_article` VALUES ('2', '这是第2条消息', null, '2015-07-18', '<p><span style=\"text-decoration: underline;\"><em><strong>1231243</strong></em></span><br/></p>', '2', '1', null, null);
INSERT INTO `nkbh_article` VALUES ('25', '看这里', 'admin', '2015-07-18', '<span style=\"font-family: 微软雅黑, &#39;Microsoft YaHei&#39;; font-size: 16px;\">让我们来看看</span>', '1', '1', null, null);
INSERT INTO `nkbh_article` VALUES ('27', '周五下午进行测试第二条', 'admin', '2022-07-24', '<p>测试文章</p>', '12', '1', null, null);
INSERT INTO `nkbh_article` VALUES ('28', '', 'admin', '', '', '0', '0', null, null);
INSERT INTO `nkbh_article` VALUES ('14', '这是测试文章', null, '2015-07-18', '<p><video class=\"edui-upload-video  vjs-default-skin video-js\" controls=\"\" preload=\"none\" width=\"420\" height=\"280\" src=\"/ueditor/php/upload/video/20150623/1435023027352387.mp4\" data-setup=\"{}\"><source src=\"/ueditor/php/upload/video/20150623/1435023027352387.flv\" type=\"video/mov\"/></video></p><p>这是测试的视频，MOV格式</p>', '1', '1', null, null);
INSERT INTO `nkbh_article` VALUES ('15', '这是测试文章2', null, '2015-07-18', '<p><video class=\"edui-upload-video  vjs-default-skin video-js\" controls=\"\" preload=\"none\" width=\"420\" height=\"280\" src=\"/ueditor/php/upload/video/20150623/1435024964125050.flv\" data-setup=\"{}\"><source src=\"/ueditor/php/upload/video/20150623/1435024964125050.flv\" type=\"video/flv\"/></video></p>', '1', '1', null, null);
INSERT INTO `nkbh_article` VALUES ('16', '这是测试文章3', null, '2015-07-18', '<p><video class=\"edui-upload-video  vjs-default-skin video-js\" controls=\"\" preload=\"none\" width=\"420\" height=\"280\" src=\"/ueditor/php/upload/video/20150623/1435032692116237.flv\" data-setup=\"{}\"><source src=\"/ueditor/php/upload/video/20150623/1435032692116237.flv\" type=\"video/flv\"/></video></p><p><br/></p><p><br/></p><p>这是第三次</p>', '3', '1', null, null);
INSERT INTO `nkbh_article` VALUES ('17', '这是测试文章', null, '2015-07-18', '<p><video class=\"edui-upload-video  vjs-default-skin video-js\" controls=\"\" preload=\"none\" width=\"420\" height=\"280\" src=\"/ueditor/php/upload/video/20150623/1435032936664023.mp4\" data-setup=\"{}\"><source src=\"/ueditor/php/upload/video/20150623/1435032936664023.mp4\" type=\"video/mp4\"/></video></p>', '2', '1', null, null);
INSERT INTO `nkbh_article` VALUES ('19', '这是测试文章5', null, '2015-07-18', '<p><img src=\"/ueditor/php/upload/image/20150623/1435061778682096.jpg\" title=\"1435061778682096.jpg\" alt=\"faf2b2119313b07e4b1487b00fd7912396dd8cd9.jpg\"/></p>', '19', '1', null, null);
INSERT INTO `nkbh_article` VALUES ('26', '这是测试下载', 'admin', '2015-07-03', '<p style=\"line-height: 16px;\"><img style=\"vertical-align: middle; margin-right: 2px;\" src=\"/dgds_6.18/2/dgds/Data/Ueditor/dialogs/attachment/fileTypeImages/icon_mv.gif\"/><a style=\"font-size:12px; color:#0066cc;\" href=\"/ueditor/php/upload/file/20150703/1435853494161885.flv\" title=\"10.flv\">10.flv</a></p><p><br/></p>', '31', '1', null, null);
INSERT INTO `nkbh_article` VALUES ('29', 'aaaaa', 'admin', '2012-11-13', '<p style=\"text-align: justify;\">【环球网综合报道】据日本《产经新闻》7月2日报道，朝鲜平壤国际机场的新机场大楼1号竣工，同时开始营业。新机场大楼在设计上使用通透玻璃，现代感十足。新的机场大楼作为朝鲜首都的大门，让我们看到了朝鲜崭新的一面。</p><p><br/></p><p style=\"text-align: justify;\">据报道，自机场大楼的施工阶段开始，朝鲜劳动党第一书记金正恩多次到场视察，对该工程相当重视。朝鲜着力振兴旅游产业以期获得更多外汇，可以看出此次建设新机场大楼也是为了吸引更多外国人前来观光。</p><p><img src=\"/ueditor/php/upload/image/20150703/1435910646121827.png\" title=\"1435910646121827.png\" alt=\"最新公告.png\"/></p><p style=\"text-align: justify;\">新机场大楼的前厅摆放有一座地球仪形状的纪念碑，天花板上装饰着飞机模型。大楼内设有咖啡专卖店，商店里陈列着朝鲜的民族服装契玛(传统裙子)，则羔利(朝鲜服短上衣)以及朝鲜生产的化妆品等等，在亚洲餐厅里还有寿司等日本料理。</p><p><br/></p><p style=\"text-align: justify;\">朝鲜第一书记金正恩2014年秋天到场视察时指出，“(这座大楼)看不出有一点朝鲜的民族特色”。为此，新机场大楼在墙体外壁上画上了朝鲜传说中被视作神圣的白虎。</p><p><br/></p>', '1', '1', null, null);

-- ----------------------------
-- Table structure for nkbh_aupdown
-- ----------------------------
DROP TABLE IF EXISTS `nkbh_aupdown`;
CREATE TABLE `nkbh_aupdown` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `aid` int(11) DEFAULT NULL,
  `up` int(255) DEFAULT NULL,
  `down` int(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of nkbh_aupdown
-- ----------------------------
INSERT INTO `nkbh_aupdown` VALUES ('1', '1', '3', '2');
INSERT INTO `nkbh_aupdown` VALUES ('2', null, '0', '0');
INSERT INTO `nkbh_aupdown` VALUES ('3', '12', '0', '0');
INSERT INTO `nkbh_aupdown` VALUES ('4', '13', '2', '1');
INSERT INTO `nkbh_aupdown` VALUES ('5', '14', '0', '0');
INSERT INTO `nkbh_aupdown` VALUES ('6', '15', '0', '0');
INSERT INTO `nkbh_aupdown` VALUES ('7', '16', '0', '0');
INSERT INTO `nkbh_aupdown` VALUES ('8', '17', '0', '0');
INSERT INTO `nkbh_aupdown` VALUES ('9', '18', '0', '0');
INSERT INTO `nkbh_aupdown` VALUES ('10', '19', '0', '0');
INSERT INTO `nkbh_aupdown` VALUES ('11', '20', '0', '0');
INSERT INTO `nkbh_aupdown` VALUES ('12', '21', '0', '0');
INSERT INTO `nkbh_aupdown` VALUES ('13', '22', '0', '0');
INSERT INTO `nkbh_aupdown` VALUES ('14', '22', '0', '0');
INSERT INTO `nkbh_aupdown` VALUES ('15', '23', '0', '1');
INSERT INTO `nkbh_aupdown` VALUES ('16', '23', '4', '1');
INSERT INTO `nkbh_aupdown` VALUES ('17', '24', '0', '0');
INSERT INTO `nkbh_aupdown` VALUES ('18', '25', '0', '0');
INSERT INTO `nkbh_aupdown` VALUES ('19', '24', '0', '0');
INSERT INTO `nkbh_aupdown` VALUES ('20', '25', '0', '0');
INSERT INTO `nkbh_aupdown` VALUES ('21', '26', '0', '0');
INSERT INTO `nkbh_aupdown` VALUES ('22', '27', '0', '0');
INSERT INTO `nkbh_aupdown` VALUES ('23', '28', '0', '0');
INSERT INTO `nkbh_aupdown` VALUES ('24', '29', '0', '0');
INSERT INTO `nkbh_aupdown` VALUES ('25', '30', '0', '0');
INSERT INTO `nkbh_aupdown` VALUES ('26', '31', '0', '0');
INSERT INTO `nkbh_aupdown` VALUES ('27', '32', '0', '0');
INSERT INTO `nkbh_aupdown` VALUES ('28', '33', '0', '0');
INSERT INTO `nkbh_aupdown` VALUES ('29', '26', '0', '0');
INSERT INTO `nkbh_aupdown` VALUES ('30', '27', '0', '0');
INSERT INTO `nkbh_aupdown` VALUES ('31', '27', '0', '0');
INSERT INTO `nkbh_aupdown` VALUES ('32', '29', '0', '0');
INSERT INTO `nkbh_aupdown` VALUES ('33', '34', '0', '0');

-- ----------------------------
-- Table structure for nkbh_auth_group
-- ----------------------------
DROP TABLE IF EXISTS `nkbh_auth_group`;
CREATE TABLE `nkbh_auth_group` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` char(100) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `rules` char(80) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of nkbh_auth_group
-- ----------------------------
INSERT INTO `nkbh_auth_group` VALUES ('1', '中级管理员', '1', '1,3,4,5,6');
INSERT INTO `nkbh_auth_group` VALUES ('2', '初级级管理员', '1', '1,2,5,6,7');

-- ----------------------------
-- Table structure for nkbh_auth_group_access
-- ----------------------------
DROP TABLE IF EXISTS `nkbh_auth_group_access`;
CREATE TABLE `nkbh_auth_group_access` (
  `uid` mediumint(8) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  UNIQUE KEY `uid_group_id` (`uid`,`group_id`),
  KEY `uid` (`uid`),
  KEY `group_id` (`group_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of nkbh_auth_group_access
-- ----------------------------
INSERT INTO `nkbh_auth_group_access` VALUES ('2', '1');
INSERT INTO `nkbh_auth_group_access` VALUES ('3', '2');

-- ----------------------------
-- Table structure for nkbh_auth_rule
-- ----------------------------
DROP TABLE IF EXISTS `nkbh_auth_rule`;
CREATE TABLE `nkbh_auth_rule` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(80) NOT NULL DEFAULT '',
  `title` char(20) NOT NULL DEFAULT '',
  `type` tinyint(1) NOT NULL DEFAULT '1',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `condition` char(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of nkbh_auth_rule
-- ----------------------------
INSERT INTO `nkbh_auth_rule` VALUES ('1', 'Admin/Admin/index', '后台首页', '1', '1', '');
INSERT INTO `nkbh_auth_rule` VALUES ('2', 'Admin/Article/index', '新增文章', '1', '1', '');
INSERT INTO `nkbh_auth_rule` VALUES ('3', 'Admin/Articlelist/index', '审核文章', '1', '1', '');
INSERT INTO `nkbh_auth_rule` VALUES ('4', 'Admin/Window/index', '飞窗信息', '1', '1', '');
INSERT INTO `nkbh_auth_rule` VALUES ('5', 'Admin/Admin/admin_info_update', '信息修改页面', '1', '1', '');
INSERT INTO `nkbh_auth_rule` VALUES ('6', 'Admin/Admin/admin_info', '管理员信息', '1', '1', '');
INSERT INTO `nkbh_auth_rule` VALUES ('7', 'Admin/Admin/adminInfoUpdate', '信息修改函数', '1', '1', '');

-- ----------------------------
-- Table structure for nkbh_carticle
-- ----------------------------
DROP TABLE IF EXISTS `nkbh_carticle`;
CREATE TABLE `nkbh_carticle` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lable` varchar(50) NOT NULL,
  `writer` varchar(20) DEFAULT NULL,
  `time` varchar(30) NOT NULL,
  `content` text NOT NULL,
  `ctype` int(11) NOT NULL,
  `state` int(2) DEFAULT NULL,
  `top` int(2) DEFAULT NULL,
  `column` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of nkbh_carticle
-- ----------------------------
INSERT INTO `nkbh_carticle` VALUES ('22', '这是测试文章专栏', 'admin', '2015-07-18', '<p><img src=\"http://img.baidu.com/hi/jx2/j_0005.gif\"/>这是测试，这是测试。<img src=\"http://img.baidu.com/hi/jx2/j_0002.gif\"/></p>', '0', '1', null, '0');
INSERT INTO `nkbh_carticle` VALUES ('24', '周五下午测试第二条这是专栏测试2015-07-16', 'admin', '2028-07-17', '<p>这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试这是测试</p>', '2', '1', null, '3');
INSERT INTO `nkbh_carticle` VALUES ('25', '我是第一', 'admin', '2015-07-18', '<p>我是第一个测试</p>', '2', '1', null, '1');
INSERT INTO `nkbh_carticle` VALUES ('26', '就是厉害', 'admin', '2015-07-18', '<p>哦哈哈哈哈</p>', '3', '1', null, '2');
INSERT INTO `nkbh_carticle` VALUES ('27', '还有谁', 'admin', '2015-07-18', '<p>我要打十个</p>', '4', '1', null, '4');
INSERT INTO `nkbh_carticle` VALUES ('28', '我是叶问', 'admin', '2015-07-18', '<p>佛山第一</p>', '4', '1', null, '4');
INSERT INTO `nkbh_carticle` VALUES ('29', '宿醉', 'admin', '2015-07-18', '<p>明天结婚</p>', '6', '1', null, '2');
INSERT INTO `nkbh_carticle` VALUES ('30', '致命ID', 'admin', '2015-07-18', '<p>小孩哈哈</p>', '5', '1', null, '2');
INSERT INTO `nkbh_carticle` VALUES ('31', '我是张帆', 'admin', '2015-07-18', '<p>我为自己代言</p>', '4', '1', null, '4');
INSERT INTO `nkbh_carticle` VALUES ('32', '我还是张帆', 'admin', '2015-07-18', '<p>一个能打都没有</p>', '3', '1', null, '2');
INSERT INTO `nkbh_carticle` VALUES ('33', '我是大张帆', 'admin', '2015-07-18', '<p>我要打十个<br/></p>', '2', '1', null, '2');
INSERT INTO `nkbh_carticle` VALUES ('34', '', 'admin', '', '', '0', '0', null, '0');

-- ----------------------------
-- Table structure for nkbh_column
-- ----------------------------
DROP TABLE IF EXISTS `nkbh_column`;
CREATE TABLE `nkbh_column` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `column` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of nkbh_column
-- ----------------------------
INSERT INTO `nkbh_column` VALUES ('1', '三严三实活动专栏');
INSERT INTO `nkbh_column` VALUES ('2', '绩效考核工作专栏');
INSERT INTO `nkbh_column` VALUES ('3', '廉政文化建设专栏');
INSERT INTO `nkbh_column` VALUES ('4', '网上调查评测专栏');
INSERT INTO `nkbh_column` VALUES ('5', 'asdf');

-- ----------------------------
-- Table structure for nkbh_ctype
-- ----------------------------
DROP TABLE IF EXISTS `nkbh_ctype`;
CREATE TABLE `nkbh_ctype` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tname` varchar(255) DEFAULT NULL,
  `cid` int(11) DEFAULT NULL,
  `state` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of nkbh_ctype
-- ----------------------------
INSERT INTO `nkbh_ctype` VALUES ('1', '领导讲话', '1', null);
INSERT INTO `nkbh_ctype` VALUES ('2', '活动安排', '1', null);
INSERT INTO `nkbh_ctype` VALUES ('3', '重要文件', '1', null);
INSERT INTO `nkbh_ctype` VALUES ('4', '经验交流', '1', null);
INSERT INTO `nkbh_ctype` VALUES ('5', '绩效考核规定', '2', null);
INSERT INTO `nkbh_ctype` VALUES ('6', '绩效考核安排', '2', null);
INSERT INTO `nkbh_ctype` VALUES ('7', '经验交流', '2', null);
INSERT INTO `nkbh_ctype` VALUES ('8', '结果', '2', null);
INSERT INTO `nkbh_ctype` VALUES ('9', '预留', '3', null);
INSERT INTO `nkbh_ctype` VALUES ('10', '预留', '3', null);
INSERT INTO `nkbh_ctype` VALUES ('11', '预留', '3', null);
INSERT INTO `nkbh_ctype` VALUES ('12', '预留', '3', null);
INSERT INTO `nkbh_ctype` VALUES ('13', '预留', '4', null);
INSERT INTO `nkbh_ctype` VALUES ('14', '预留', '4', null);
INSERT INTO `nkbh_ctype` VALUES ('15', '预留', '4', null);
INSERT INTO `nkbh_ctype` VALUES ('16', '预留', '4', null);

-- ----------------------------
-- Table structure for nkbh_pic
-- ----------------------------
DROP TABLE IF EXISTS `nkbh_pic`;
CREATE TABLE `nkbh_pic` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) DEFAULT NULL,
  `create_time` int(11) NOT NULL,
  `path` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of nkbh_pic
-- ----------------------------
INSERT INTO `nkbh_pic` VALUES ('1', '5593ec56e0bbd.jpg', '1435757654', '2015-07-01/');
INSERT INTO `nkbh_pic` VALUES ('2', '558957ce6bb76.jpg', '1435064270', '2015-06-23/');
INSERT INTO `nkbh_pic` VALUES ('3', '558957d65e023.jpg', '1435064278', '2015-06-23/');
INSERT INTO `nkbh_pic` VALUES ('4', '558957dd85dee.jpg', '1435064285', '2015-06-23/');
INSERT INTO `nkbh_pic` VALUES ('5', '558957e469b69.jpg', '1435064292', '2015-06-23/');
INSERT INTO `nkbh_pic` VALUES ('6', '5594aea3d38ca.jpg', '1435807395', '2015-07-02/');

-- ----------------------------
-- Table structure for nkbh_picnews
-- ----------------------------
DROP TABLE IF EXISTS `nkbh_picnews`;
CREATE TABLE `nkbh_picnews` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `create_time` int(11) NOT NULL,
  `path` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `lable` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of nkbh_picnews
-- ----------------------------
INSERT INTO `nkbh_picnews` VALUES ('1', '5589581e66312.jpg', '1435064350', '2015-06-23/', 'baidu.com', '图片1');
INSERT INTO `nkbh_picnews` VALUES ('2', '5589582deef02.jpg', '1435064365', '2015-06-23/', 'baidu.com', '图片2');
INSERT INTO `nkbh_picnews` VALUES ('3', '5589584023585.jpg', '1435064384', '2015-06-23/', 'baidu.com', '图片3');
INSERT INTO `nkbh_picnews` VALUES ('4', '5593e955726de.jpg', '1435756885', '2015-07-01/', 'baidu.com', 'come');

-- ----------------------------
-- Table structure for nkbh_rolewin
-- ----------------------------
DROP TABLE IF EXISTS `nkbh_rolewin`;
CREATE TABLE `nkbh_rolewin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lable` varchar(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of nkbh_rolewin
-- ----------------------------
INSERT INTO `nkbh_rolewin` VALUES ('1', '友情链接至百度', '百度搜索', 'http://www.baidu.com');
INSERT INTO `nkbh_rolewin` VALUES ('2', '友情链接至新浪', '新浪新闻', 'http://www.sina.com');
INSERT INTO `nkbh_rolewin` VALUES ('5', '链接', '好123', 'http://www.hao123.com');

-- ----------------------------
-- Table structure for nkbh_type
-- ----------------------------
DROP TABLE IF EXISTS `nkbh_type`;
CREATE TABLE `nkbh_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tname` varchar(255) DEFAULT NULL,
  `tid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of nkbh_type
-- ----------------------------
INSERT INTO `nkbh_type` VALUES ('1', '分局简介', '1');
INSERT INTO `nkbh_type` VALUES ('2', '科所设置', '2');
INSERT INTO `nkbh_type` VALUES ('3', '联系方式', '3');
INSERT INTO `nkbh_type` VALUES ('4', '办公室', '4');
INSERT INTO `nkbh_type` VALUES ('5', '人事科', '5');
INSERT INTO `nkbh_type` VALUES ('6', '监察科', '6');
INSERT INTO `nkbh_type` VALUES ('7', '税管科', '7');
INSERT INTO `nkbh_type` VALUES ('8', '稽查科', '8');
INSERT INTO `nkbh_type` VALUES ('9', '计会科', '9');
INSERT INTO `nkbh_type` VALUES ('10', '评估科', '10');
INSERT INTO `nkbh_type` VALUES ('11', '信息科', '11');
INSERT INTO `nkbh_type` VALUES ('12', '征收一所', '12');
INSERT INTO `nkbh_type` VALUES ('13', '征收二所', '13');
INSERT INTO `nkbh_type` VALUES ('14', '管理一所', '14');
INSERT INTO `nkbh_type` VALUES ('15', '管理二所', '15');
INSERT INTO `nkbh_type` VALUES ('16', '管理三所', '16');
INSERT INTO `nkbh_type` VALUES ('17', '管理四所', '17');
INSERT INTO `nkbh_type` VALUES ('18', '管理五所', '18');
INSERT INTO `nkbh_type` VALUES ('19', '临港所', '19');
INSERT INTO `nkbh_type` VALUES ('20', '学习资料', '20');
INSERT INTO `nkbh_type` VALUES ('21', '学习视频', '21');
INSERT INTO `nkbh_type` VALUES ('22', '廉政建设', '22');
INSERT INTO `nkbh_type` VALUES ('23', '规章制度', '23');
INSERT INTO `nkbh_type` VALUES ('24', '党团工会', '24');
INSERT INTO `nkbh_type` VALUES ('25', '党建工作', '25');
INSERT INTO `nkbh_type` VALUES ('26', '共青团建设', '26');
INSERT INTO `nkbh_type` VALUES ('27', '工会活动', '27');
INSERT INTO `nkbh_type` VALUES ('28', '生活常识', '28');
INSERT INTO `nkbh_type` VALUES ('29', '心灵鸡汤', '29');
INSERT INTO `nkbh_type` VALUES ('30', '电子书库', '30');
INSERT INTO `nkbh_type` VALUES ('31', '下载空间', '31');

-- ----------------------------
-- Table structure for nkbh_user
-- ----------------------------
DROP TABLE IF EXISTS `nkbh_user`;
CREATE TABLE `nkbh_user` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `realname` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `ip` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of nkbh_user
-- ----------------------------
INSERT INTO `nkbh_user` VALUES ('5', '1111', '934b535800b1cba8f96a5d72f72f1611', 'onea', 'on', 'a', 'a', 'a@a.', '0.0.0.0', '1435911243');
INSERT INTO `nkbh_user` VALUES ('6', '2222', '934b535800b1cba8f96a5d72f72f1611', 'two2', 'b', 'b', 'b', 'b@b.', '127.0.0.1', '1434592516');

-- ----------------------------
-- Table structure for nkbh_videonews
-- ----------------------------
DROP TABLE IF EXISTS `nkbh_videonews`;
CREATE TABLE `nkbh_videonews` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `create_time` int(11) NOT NULL,
  `path` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `lable` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of nkbh_videonews
-- ----------------------------
INSERT INTO `nkbh_videonews` VALUES ('1', '55895ac9c7522.jpg', '1435065033', '2015-06-23/', 'baidu.com', '这是第2条消息');
INSERT INTO `nkbh_videonews` VALUES ('2', '55895ad856a07.jpg', '1435065048', '2015-06-23/', 'baidu.com', '这是第1条消息');
INSERT INTO `nkbh_videonews` VALUES ('3', '55895ae94e755.jpg', '1435065065', '2015-06-23/', 'baidu.com', '这是第3条消息');
INSERT INTO `nkbh_videonews` VALUES ('4', '55895affd06a9.jpg', '1435065087', '2015-06-23/', 'baidu.com', '这是第4条消息');

-- ----------------------------
-- Table structure for nkbh_window
-- ----------------------------
DROP TABLE IF EXISTS `nkbh_window`;
CREATE TABLE `nkbh_window` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lable` varchar(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of nkbh_window
-- ----------------------------
INSERT INTO `nkbh_window` VALUES ('1', '这是第一条窗口', '连接至百度', 'www.baidu.com');
INSERT INTO `nkbh_window` VALUES ('2', '这是第二条', '连接至新浪', 'www.sina.com');
INSERT INTO `nkbh_window` VALUES ('3', '测试飞窗', '链接好123', 'www.hao123.com');
INSERT INTO `nkbh_window` VALUES ('4', '', '', '');
