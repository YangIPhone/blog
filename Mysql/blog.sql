/*
Navicat MySQL Data Transfer

Source Server         : 腾讯云
Source Server Version : 50552
Source Host           : 139.199.158.30:3306
Source Database       : blog

Target Server Type    : MYSQL
Target Server Version : 50552
File Encoding         : 65001

Date: 2017-10-06 19:41:20
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tb_article
-- ----------------------------
DROP TABLE IF EXISTS `tb_article`;
CREATE TABLE `tb_article` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(255) DEFAULT NULL,
  `Content` text,
  `Time` datetime DEFAULT NULL,
  `Img` varchar(255) DEFAULT NULL,
  `Clicknum` int(11) DEFAULT NULL,
  `Url` char(255) DEFAULT NULL,
  `Writer` char(10) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_article
-- ----------------------------
INSERT INTO `tb_article` VALUES ('1', '住在手机里的朋友(摘抄)', '通信时代，无论是初次相见还是老友重逢，交换联系方式，常常是彼此交换名片，然后郑重或是出于礼貌用手机记下对方的电话号码。在快节奏的生活里，我们不知不觉中就成为住在别人手机里的朋友。又因某些意外，变成了别人手机里匆忙的过客，这种快餐式的友谊 ...', '2017-06-01 10:18:16', '01.jpg', '7', 'http://www.duwenzhang.com/wenzhang/shenghuosuibi/shenghuoganwu/20130301/249235.html', 'admin');
INSERT INTO `tb_article` VALUES ('2', '心情随笔(摘抄)', '初次相识的喜悦，让你觉得似乎找到了知音。于是，对于投缘的人，开始了较频繁的交往。渐渐地，初识的喜悦退尽，接下来就是仅仅保持着联系，平淡到偶尔在节假曰发短信互致问候...', '2017-06-03 00:22:04', '02.jpg', '5', 'http://club.qingdaonews.com/showAnnounce_84_3836065_1_0.htm', 'admin');
INSERT INTO `tb_article` VALUES ('3', '原来以为...(摘抄)', '原来以为，一个人的勇敢是，删掉他的手机号码、QQ号码等等一切，努力和他保持距离。等着有一天，习惯不想念他，习惯他不在身边,习惯时间把他在我记忆里的身影磨蚀干净...', '2017-06-05 11:27:05', '03.jpg', '2', 'http://neihanshequ.com/p2835463079/', 'admin');
INSERT INTO `tb_article` VALUES ('4', '手机的16个惊人小秘密，据说99.999%的人都不知(摘抄)', '引导语：知道么，手机有备用电池，手机拨号码12593+电话号码=陷阱……手机具有很多你不知道的小秘密，说出来一定很惊奇！不信的话就来看看吧！....', '2017-06-05 12:42:07', '04.jpg', '5', 'http://www.360doc.com/content/15/0404/14/5459259_460564439.shtml', 'admin');
INSERT INTO `tb_article` VALUES ('5', '你面对的是生活而不是手机(摘抄)', '每一次与别人吃饭，总会有人会拿出手机。以为他们在打电话或者有紧急的短信，但用余光瞟了一眼之后发现无非就两件事：1、看小说，2、上人人或者QQ...', '2017-06-06 11:43:03', '05.jpg', '14', 'http://www.timetimetime.net/yuedu/228.html', 'admin');
INSERT INTO `tb_article` VALUES ('6', '豪雅手机正式发布! 在法国全手工打造的奢侈品(摘抄)', '现在跨界联姻，时尚、汽车以及运动品牌联合手机制造商联合发布手机产品在行业里已经不再新鲜，上周我们给大家报道过著名手表制造商瑞士泰格·豪雅（Tag Heuer） 联合法国的手机制造商Modelabs发布的一款奢华手机的部分谍照，而近日该手机终于被正式发布了...', '2017-06-07 13:43:32', '06.jpg', '7', 'http://mobile.163.com/08/0418/13/49QKINRQ00112K8E.html', 'admin');
INSERT INTO `tb_article` VALUES ('7', '测试文章', '这是篇测试文章。。。恩。。。就是这样<img src=\"../layui/images/face/1.gif\" alt=\"[嘻嘻]\">', '2017-06-12 22:21:05', '06.jpg', '7', '/lookarticle?ID=7.html', 'admin');
INSERT INTO `tb_article` VALUES ('8', '瞎BB', 'balabalbalabalbalabalabala', '2017-06-12 22:44:34', '03.jpg', '4', '/lookarticle?ID=8.html', 'admin');
INSERT INTO `tb_article` VALUES ('9', '文章添加后URL测试', '<p><img src=\"../layui/images/face/24.gif\" alt=\"[哈欠]\">文章添加后URL测试。。。。</p>', '2017-06-12 22:45:56', '02.jpg', '6', '/lookarticle?ID=9.html', 'admin');
INSERT INTO `tb_article` VALUES ('10', 'WorkerMan 3.x 手册', '<p>版权信息\r\nCopyright © 2013 - 2015，workerman.net 所有。workerman开发者和使用者需要服从 workerman许可协议。，workerman.net 所有。workerman开发者和使用者需要服从 workerman许可协议。</p><p>附链接:<a target=\"_blank\" href=\"http://doc3.workerman.net/license/README.html\"><b><i>http://doc3.workerman.net/license/README.html</i></b></a></p>', '2017-06-16 10:50:59', '04.jpg', '15', '/lookarticle?ID=10.html', 'admin');
INSERT INTO `tb_article` VALUES ('11', '你面对的是生活而不是手机(摘抄)', '每一次与别人吃饭，总会有人会拿出手机。以为他们在打电话或者有紧急的短信，但用余光瞟了一眼之后发现无非就两件事：1、看小说，2、上人人或者QQ...(修改文章测试)', '2017-06-13 00:30:05', '05.jpg', '2', '/lookarticle?ID=11.html', 'admin');
INSERT INTO `tb_article` VALUES ('12', '好烦啊', '第一次修改失败了，偷偷的在数据库里改回来应该没人知道吧。。。。。。<img src=\"../layui/images/face/21.gif\" alt=\"[衰]\">', '2017-06-13 00:45:48', '01.jpg', '2', '/lookarticle?ID=12.html', 'admin');
INSERT INTO `tb_article` VALUES ('13', '第二次修改文章测试。。。。。', '居然是添加和修改的页面路由写反了，我去。。。。。。<img src=\"../layui/images/face/61.gif\" alt=\"[囧]\">，终于改好了<img src=\"../layui/images/face/12.gif\" alt=\"[泪]\">', '2017-06-13 00:47:13', '03.jpg', '20', '/lookarticle?ID=13.html', '莫忘');
INSERT INTO `tb_article` VALUES ('14', '预览图测试', '这是发表文章时的图片预览测试！！！<img src=\"http://blog.yang1996.com/layui/images/face/7.gif\" alt=\"[害羞]\">', '2017-08-08 16:17:45', '1497780044.png', '7', '/lookarticle?ID=14.html', 'admin');

-- ----------------------------
-- Table structure for tb_message
-- ----------------------------
DROP TABLE IF EXISTS `tb_message`;
CREATE TABLE `tb_message` (
  `Name` char(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Time` datetime DEFAULT NULL,
  `Message` varchar(255) DEFAULT NULL,
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_message
-- ----------------------------
INSERT INTO `tb_message` VALUES ('Yang', '8888@163.com', '2017-06-08 18:34:14', '这是条测试留言<img src=\"../layui/images/face/2.gif\" alt=\"[哈哈]\">', '1');
INSERT INTO `tb_message` VALUES ('杨昌权', '2222@qq.com', '2017-06-11 15:54:10', '哈哈哈哈<img src=\"../layui/images/face/2.gif\" alt=\"[哈哈]\">', '2');
INSERT INTO `tb_message` VALUES ('yang', '88888@168.com', '2017-06-11 23:55:07', '哈哈哈哈<img src=\"../layui/images/face/2.gif\" alt=\"[哈哈]\">', '3');
INSERT INTO `tb_message` VALUES ('222333', '64646@qq.com', '2017-06-19 22:01:32', '<img src=\"http://139.199.158.30/layui/images/face/1.gif\" alt=\"[嘻嘻]\"><img src=\"../layui/images/face/1.gif\" alt=\"[嘻嘻]\">', '4');

-- ----------------------------
-- Table structure for tb_photo
-- ----------------------------
DROP TABLE IF EXISTS `tb_photo`;
CREATE TABLE `tb_photo` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Photo` varchar(255) DEFAULT NULL,
  `Time` datetime DEFAULT NULL,
  `Type` varchar(255) DEFAULT NULL,
  `Intro` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_photo
-- ----------------------------
INSERT INTO `tb_photo` VALUES ('1', 'photo/family/01.jpg', '2017-06-01 12:30:26', 'family', 'This is my family');
INSERT INTO `tb_photo` VALUES ('2', 'photo/game/01.jpg', '2017-06-02 13:30:40', 'game', 'My game live');
INSERT INTO `tb_photo` VALUES ('3', 'photo/me/01.jpg', '2017-06-04 14:30:55', 'me', 'About me');
INSERT INTO `tb_photo` VALUES ('4', 'photo/family/02.jpg', '2017-06-06 13:30:46', 'family', 'This is my family');
INSERT INTO `tb_photo` VALUES ('5', 'photo/game/02.jpg', '2017-06-07 13:30:51', 'game', 'My game live');
INSERT INTO `tb_photo` VALUES ('6', 'photo/family/03.jpg', '2017-06-13 15:16:06', 'family', 'This is my family');
INSERT INTO `tb_photo` VALUES ('7', 'photo/family/04.jpg', '2017-06-08 15:16:32', 'family', 'This is my family');
INSERT INTO `tb_photo` VALUES ('8', 'photo/family/05.jpg', '2017-06-10 15:19:47', 'family', 'This is my family');
INSERT INTO `tb_photo` VALUES ('9', 'photo/family/06.png', '2017-06-12 17:14:23', 'family', 'This is my family');
INSERT INTO `tb_photo` VALUES ('10', 'photo/family/07.png', '2017-06-12 17:47:26', 'family', 'This is my family');
INSERT INTO `tb_photo` VALUES ('11', 'photo/me/06.png', '2017-06-12 17:49:31', 'me', 'About me');
INSERT INTO `tb_photo` VALUES ('12', 'photo/me/2017-06-14.png', '2017-06-16 13:08:07', 'me', 'About me');
INSERT INTO `tb_photo` VALUES ('13', 'photo/game/1497785666.png', '2017-06-18 19:34:18', 'game', 'My game live');
INSERT INTO `tb_photo` VALUES ('14', 'photo/family/1498059869.png', '2017-06-21 23:43:50', 'family', 'This is my family');

-- ----------------------------
-- Table structure for tb_user
-- ----------------------------
DROP TABLE IF EXISTS `tb_user`;
CREATE TABLE `tb_user` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_user
-- ----------------------------
INSERT INTO `tb_user` VALUES ('1', '张三', '222@qq.com');
INSERT INTO `tb_user` VALUES ('7', '张三', '8888@qq.com');

-- ----------------------------
-- Table structure for tb_users
-- ----------------------------
DROP TABLE IF EXISTS `tb_users`;
CREATE TABLE `tb_users` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Uname` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_users
-- ----------------------------
INSERT INTO `tb_users` VALUES ('1', '张三', 'zhangsan');
