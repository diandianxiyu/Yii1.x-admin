-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2015-12-16 02:10:11
-- 服务器版本： 5.6.26
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yii_admin`
--

-- --------------------------------------------------------

--
-- 表的结构 `authassignment`
--

CREATE TABLE `authassignment` (
  `itemname` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `userid` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `bizrule` text COLLATE utf8_unicode_ci,
  `data` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `authassignment`
--

INSERT INTO `authassignment` (`itemname`, `userid`, `bizrule`, `data`) VALUES
('admin', 'admins', '', 's:0:"";');

-- --------------------------------------------------------

--
-- 表的结构 `authitem`
--

CREATE TABLE `authitem` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `bizrule` text COLLATE utf8_unicode_ci,
  `data` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `authitem`
--

INSERT INTO `authitem` (`name`, `type`, `description`, `bizrule`, `data`) VALUES
('admin', 2, '超级管理员', '', 's:0:"";'),
('adminis@AdminUserAdministrating', 1, NULL, NULL, 'N;'),
('adminis@AdminUserCreate', 0, NULL, NULL, 'N;'),
('adminis@AdminUserDelete', 0, NULL, NULL, 'N;'),
('adminis@AdminUserDisable', 0, NULL, NULL, 'N;'),
('adminis@AdminUserIndex', 0, NULL, NULL, 'N;'),
('adminis@AdminUserUpdate', 0, NULL, NULL, 'N;'),
('adminis@AdminUserView', 0, NULL, NULL, 'N;'),
('adminis@AdminUserViewing', 1, NULL, NULL, 'N;'),
('adminis@ArticleAdmin', 0, NULL, NULL, 'N;'),
('adminis@ArticleAdministrating', 1, NULL, NULL, 'N;'),
('adminis@ArticleCreate', 0, NULL, NULL, 'N;'),
('adminis@ArticleDelete', 0, NULL, NULL, 'N;'),
('adminis@ArticleIndex', 0, NULL, NULL, 'N;'),
('adminis@ArticleUpdate', 0, NULL, NULL, 'N;'),
('adminis@ArticleView', 0, NULL, NULL, 'N;'),
('adminis@ArticleViewing', 1, NULL, NULL, 'N;'),
('adminis@DefaultAdministrating', 1, NULL, NULL, 'N;'),
('adminis@DefaultViewing', 1, NULL, NULL, 'N;'),
('adminis@DepartmentAdmin', 0, NULL, NULL, 'N;'),
('adminis@DepartmentAdministrating', 1, NULL, NULL, 'N;'),
('adminis@DepartmentCreate', 0, NULL, NULL, 'N;'),
('adminis@DepartmentDelete', 0, NULL, NULL, 'N;'),
('adminis@DepartmentIndex', 0, NULL, NULL, 'N;'),
('adminis@DepartmentUpdate', 0, NULL, NULL, 'N;'),
('adminis@DepartmentView', 0, NULL, NULL, 'N;'),
('adminis@DepartmentViewing', 1, NULL, NULL, 'N;'),
('adminis@MenuAdmin', 0, NULL, NULL, 'N;'),
('adminis@MenuAdministrating', 1, NULL, NULL, 'N;'),
('adminis@MenuCreate', 0, NULL, NULL, 'N;'),
('adminis@MenuDelete', 0, NULL, NULL, 'N;'),
('adminis@MenuIndex', 0, NULL, NULL, 'N;'),
('adminis@MenuUpdate', 0, NULL, NULL, 'N;'),
('adminis@MenuView', 0, NULL, NULL, 'N;'),
('adminis@MenuViewing', 1, NULL, NULL, 'N;'),
('adminis@ProfileAdministrating', 1, NULL, NULL, 'N;'),
('adminis@ProfileViewing', 1, NULL, NULL, 'N;'),
('adminis@SlideAdmin', 0, NULL, NULL, 'N;'),
('adminis@SlideAdministrating', 1, NULL, NULL, 'N;'),
('adminis@SlideCreate', 0, NULL, NULL, 'N;'),
('adminis@SlideDelete', 0, NULL, NULL, 'N;'),
('adminis@SlideIndex', 0, NULL, NULL, 'N;'),
('adminis@SlideUpdate', 0, NULL, NULL, 'N;'),
('adminis@SlideView', 0, NULL, NULL, 'N;'),
('adminis@SlideViewing', 1, NULL, NULL, 'N;'),
('adminis@ValuesAdmin', 0, NULL, NULL, 'N;'),
('adminis@ValuesAdministrating', 1, NULL, NULL, 'N;'),
('adminis@ValuesCreate', 0, NULL, NULL, 'N;'),
('adminis@ValuesDelete', 0, NULL, NULL, 'N;'),
('adminis@ValuesIndex', 0, NULL, NULL, 'N;'),
('adminis@ValuesUpdate', 0, NULL, NULL, 'N;'),
('adminis@ValuesView', 0, NULL, NULL, 'N;'),
('adminis@ValuesViewing', 1, NULL, NULL, 'N;'),
('adminUserMenu', 0, '用户菜单', '', 's:0:"";'),
('article', 0, '', '', 's:0:"";'),
('department', 0, '', '', 's:0:"";'),
('menu', 0, '进入菜单', '', 's:0:"";'),
('slide', 0, '', '', 's:0:"";'),
('srbac@SBaseAdministrating', 1, NULL, NULL, 'N;'),
('srbac@SBaseViewing', 1, NULL, NULL, 'N;'),
('userprofilemenu', 0, '个人资料管理', '', 's:0:"";'),
('values', 0, '', '', 's:0:"";');

-- --------------------------------------------------------

--
-- 表的结构 `authitemchild`
--

CREATE TABLE `authitemchild` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `authitemchild`
--

INSERT INTO `authitemchild` (`parent`, `child`) VALUES
('admin', 'adminis@AdminUserAdministrating'),
('adminis@AdminUserAdministrating', 'adminis@AdminUserCreate'),
('adminis@AdminUserAdministrating', 'adminis@AdminUserDelete'),
('adminis@AdminUserAdministrating', 'adminis@AdminUserDisable'),
('adminis@AdminUserAdministrating', 'adminis@AdminUserIndex'),
('adminis@AdminUserAdministrating', 'adminis@AdminUserUpdate'),
('adminis@AdminUserAdministrating', 'adminis@AdminUserView'),
('admin', 'adminis@AdminUserViewing'),
('adminis@ArticleAdministrating', 'adminis@ArticleAdmin'),
('admin', 'adminis@ArticleAdministrating'),
('adminis@ArticleAdministrating', 'adminis@ArticleCreate'),
('adminis@ArticleAdministrating', 'adminis@ArticleDelete'),
('adminis@ArticleAdministrating', 'adminis@ArticleIndex'),
('adminis@ArticleAdministrating', 'adminis@ArticleUpdate'),
('adminis@ArticleAdministrating', 'adminis@ArticleView'),
('admin', 'adminis@ArticleViewing'),
('admin', 'adminis@DefaultAdministrating'),
('admin', 'adminis@DefaultViewing'),
('adminis@DepartmentAdministrating', 'adminis@DepartmentAdmin'),
('admin', 'adminis@DepartmentAdministrating'),
('adminis@DepartmentAdministrating', 'adminis@DepartmentCreate'),
('adminis@DepartmentAdministrating', 'adminis@DepartmentDelete'),
('adminis@DepartmentAdministrating', 'adminis@DepartmentIndex'),
('adminis@DepartmentAdministrating', 'adminis@DepartmentUpdate'),
('adminis@DepartmentAdministrating', 'adminis@DepartmentView'),
('admin', 'adminis@DepartmentViewing'),
('adminis@MenuAdministrating', 'adminis@MenuAdmin'),
('admin', 'adminis@MenuAdministrating'),
('adminis@MenuAdministrating', 'adminis@MenuCreate'),
('adminis@MenuAdministrating', 'adminis@MenuDelete'),
('adminis@MenuAdministrating', 'adminis@MenuIndex'),
('adminis@MenuAdministrating', 'adminis@MenuUpdate'),
('adminis@MenuAdministrating', 'adminis@MenuView'),
('admin', 'adminis@MenuViewing'),
('admin', 'adminis@ProfileAdministrating'),
('admin', 'adminis@ProfileViewing'),
('adminis@SlideAdministrating', 'adminis@SlideAdmin'),
('admin', 'adminis@SlideAdministrating'),
('adminis@SlideAdministrating', 'adminis@SlideCreate'),
('adminis@SlideAdministrating', 'adminis@SlideDelete'),
('adminis@SlideAdministrating', 'adminis@SlideIndex'),
('adminis@SlideAdministrating', 'adminis@SlideUpdate'),
('adminis@SlideAdministrating', 'adminis@SlideView'),
('admin', 'adminis@SlideViewing'),
('adminis@ValuesAdministrating', 'adminis@ValuesAdmin'),
('admin', 'adminis@ValuesAdministrating'),
('adminis@ValuesAdministrating', 'adminis@ValuesCreate'),
('adminis@ValuesAdministrating', 'adminis@ValuesDelete'),
('adminis@ValuesAdministrating', 'adminis@ValuesIndex'),
('adminis@ValuesAdministrating', 'adminis@ValuesUpdate'),
('adminis@ValuesAdministrating', 'adminis@ValuesView'),
('admin', 'adminis@ValuesViewing'),
('adminis@AdminUserAdministrating', 'adminUserMenu'),
('adminis@ArticleAdministrating', 'article'),
('adminis@DepartmentAdministrating', 'department'),
('adminis@DefaultAdministrating', 'menu'),
('adminis@SlideAdministrating', 'slide'),
('admin', 'srbac@SBaseAdministrating'),
('admin', 'srbac@SBaseViewing'),
('adminis@AdminUserAdministrating', 'userprofilemenu'),
('adminis@ProfileAdministrating', 'userprofilemenu'),
('adminis@ValuesAdministrating', 'values');

-- --------------------------------------------------------

--
-- 表的结构 `tisu_admin_user`
--

CREATE TABLE `tisu_admin_user` (
  `id` int(11) NOT NULL COMMENT '主键',
  `username` varchar(48) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '名称',
  `password` varchar(64) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '密码',
  `realname` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '真实姓名',
  `avatar` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '头像',
  `regtime` int(10) NOT NULL COMMENT '注册时间',
  `department` int(11) DEFAULT NULL COMMENT '所属部门',
  `email` varchar(600) DEFAULT NULL COMMENT '邮箱',
  `mobile` varchar(18) DEFAULT NULL COMMENT '手机号',
  `disable` int(11) NOT NULL DEFAULT '0' COMMENT '是否被禁用'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='后台管理员表';

--
-- 转存表中的数据 `tisu_admin_user`
--

INSERT INTO `tisu_admin_user` (`id`, `username`, `password`, `realname`, `avatar`, `regtime`, `department`, `email`, `mobile`, `disable`) VALUES
(1, 'admins', 'e10adc3949ba59abbe56e057f20f883e', 'admin', '2014/07/03/f03cfabf8c46f2dff21094d4595efc10.jpg', 0, 1, '316708138@qq.com', '15611111111', 0),
(2, 'user1', 'e10adc3949ba59abbe56e057f20f883e', NULL, '', 0, NULL, NULL, NULL, 0),
(4, 'sdfsdf', 'd58e3582afa99040e27b92b13c8f2280', 'sds', ' 85463704.jpg''', 1394772897, 3, 'sdfsf@qq.xx', 'sdfsd', 0),
(5, 'adminsaaa', 'cc2bd8f09bb88b5dd20f9b432631b8ca', 'sdsssd', '2014/03/17/53ddb03d0e70514c899d8372196ad11f.png', 1394773139, 6, '', 'sdfsdsdds', 0),
(6, 'sdsdasf', '513ccd983bb4cd653f0322b06b43e9ab', 'sadasdsa', '2014/03/14/7d2b850341fceee0fe7895273ed1082e.jpeg', 1394776244, 2, 'asdasdsa', 'sdsdfsf', 1),
(7, 'sssdsfsd', '47bebc38df393ca3e94b27a1d5c029a6', 'zsdzczxdfs', '2014/03/14/c7e88ce26e8a9cd4f4c8546e3e4c214c.jpeg', 1394776453, 4, 'sadzxczx', 'zsdsdzxczx', 0),
(9, '1swdfssdsadds', '8c71fb3f7593543f2ad180d31148a7cf', 'dfsdfasdasd', '2014/03/14/d577c024ac67b3b0d7d5465005e28c9e.png', 1394777907, 5, 'sadasdasd@qq.com', 'sdfassssssdas', 0),
(11, 'sasds', 'a8f5f167f44f4964e6c998dee827110c', 'asdasd', '2014/03/14/696b6ad0d23c103022cb5159b02cfe2a.png', 1394782223, 5, 'sddds@qq.com', 'asdasdsa', 0),
(12, 'sss', '49f0bad299687c62334182178bfd75d8', 'asdsa', '2014/03/14/3578973f0e17868b722cbd06fbec2027.jpg', 1394783185, 2, '', '', 0);

-- --------------------------------------------------------

--
-- 表的结构 `tisu_article`
--

CREATE TABLE `tisu_article` (
  `id` int(11) NOT NULL,
  `atitle` varchar(255) NOT NULL DEFAULT '' COMMENT '标题',
  `pub_time` int(11) NOT NULL DEFAULT '0' COMMENT '发布时间',
  `edit_time` int(11) NOT NULL DEFAULT '0' COMMENT '修改时间',
  `atext` text COMMENT '文章内容',
  `aauthor` varchar(200) DEFAULT '' COMMENT '作者',
  `sort` int(11) NOT NULL DEFAULT '0' COMMENT '排序'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='文章表';

-- --------------------------------------------------------

--
-- 表的结构 `tisu_department`
--

CREATE TABLE `tisu_department` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL DEFAULT '',
  `pid` int(11) NOT NULL,
  `sort` int(11) NOT NULL DEFAULT '0' COMMENT '排序'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tisu_department`
--

INSERT INTO `tisu_department` (`id`, `name`, `pid`, `sort`) VALUES
(1, '根目录', 0, 0),
(2, '技术部', 1, 0),
(3, '食堂', 1, 0),
(4, '吃饭部', 1, 99),
(6, '吃饭2组', 4, 0),
(7, '吃饭3组', 4, 0);

-- --------------------------------------------------------

--
-- 表的结构 `tisu_menu`
--

CREATE TABLE `tisu_menu` (
  `id` int(11) NOT NULL COMMENT '主键',
  `name` varchar(60) COLLATE utf8_unicode_ci NOT NULL COMMENT '名称',
  `pid` int(11) NOT NULL DEFAULT '0' COMMENT '父id',
  `reamrk` varchar(420) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '备注',
  `sort` int(11) NOT NULL DEFAULT '0' COMMENT '排序',
  `url` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '地址',
  `auth_item` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '权限名称',
  `icon` varchar(60) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'fa fa-wrench' COMMENT '图标样式',
  `other` text COLLATE utf8_unicode_ci COMMENT '加载其他样式'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='菜单表';

--
-- 转存表中的数据 `tisu_menu`
--

INSERT INTO `tisu_menu` (`id`, `name`, `pid`, `reamrk`, `sort`, `url`, `auth_item`, `icon`, `other`) VALUES
(1, '菜单根目录', 0, NULL, 0, 'Site/index', NULL, 'fa fa-wrench', NULL),
(3, '菜单管理', 1, '菜单的入口', 9, 'menu', 'menu', 'fa fa-puzzle-piece', ''),
(4, '添加菜单', 3, '', 0, 'adminis/menu/create', 'Adminis@MenuCreate', 'fa fa-plus-square', ''),
(5, '菜单列表', 3, '', 0, 'adminis/menu/index', 'adminis@MenuIndex', 'fa fa-wrench', NULL),
(7, '权限管理', 1, 'srbac权限管理页面', 3, 'srbac', 'srbac@AuthitemAdministrating', 'fa fa-key', ' id=''srbac'''),
(18, '后台用户管理', 1, '', 0, 'adminUser', 'adminUserMenu', 'fa fa-group', ''),
(19, '添加后台用户', 18, '', 0, 'adminis/adminUser/create', 'adminis@AdminUserCreate', 'fa fa-plus-square', ''),
(20, '后台用户列表', 18, '', 50, 'adminis/adminUser/index', 'adminis@AdminUserIndex', 'fa fa-list', ''),
(21, '主面板', 1, '', 99, 'adminis/default/index', 'index', 'fa fa-linux', ''),
(23, '个人资料管理', 1, '', 80, 'adminis/profile/index', 'userprofilemenu', 'fa fa-user', ''),
(41, '反馈信息列表', 41, '', 0, 'adminis/feedback/index', 'adminis@FeedbackIndex', 'fa fa-wrench', ''),
(49, '部门管理', 1, '', 0, 'admins/department', 'department', 'fa fa-book', ''),
(50, '添加部门', 49, '', 0, 'adminis/department/create', 'adminis@DepartmentCreate', 'fa fa-wrench', ''),
(51, '部门列表', 49, '', 0, 'adminis/department/index', 'adminis@DepartmentIndex', 'fa fa-wrench', ''),
(52, '文章管理', 1, '', 0, 'article', 'article', 'fa fa-pencil-square', ''),
(53, '添加文章', 52, '', 0, 'adminis/article/create', 'adminis@ArticleCreate', 'fa  fa-inbox', ''),
(54, '管理文章', 52, '', 0, 'adminis/article/index', 'adminis@ArticleIndex', 'fa fa-wrench', ''),
(55, '图片轮播管理', 1, '', 0, 'slide', 'slide', 'fa fa-wrench', ''),
(56, '添加图片', 55, '', 0, 'adminis/slide/create', 'adminis@SlideCreate', 'fa fa-wrench', ''),
(57, '图片列表', 55, '', 0, 'adminis/slide/index', 'adminis@SlideIndex', 'fa fa-wrench', ''),
(58, '网站属性管理', 1, '', 0, 'values', 'values', 'fa fa-wrench', ''),
(59, '添加属性', 58, '', 0, 'adminis/values/create', 'adminis@ValuesCreate', 'fa fa-wrench', ''),
(60, '属性列表', 58, '', 0, 'adminis/values/index', 'adminis@ValuesIndex', 'fa fa-wrench', '');

-- --------------------------------------------------------

--
-- 表的结构 `tisu_slide`
--

CREATE TABLE `tisu_slide` (
  `id` int(11) NOT NULL,
  `pic_path` varchar(255) DEFAULT '' COMMENT '图片路径',
  `text` varchar(255) DEFAULT NULL COMMENT '文字说明',
  `sort` int(11) NOT NULL DEFAULT '0' COMMENT '排序'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='首页的滚屏';

--
-- 转存表中的数据 `tisu_slide`
--

INSERT INTO `tisu_slide` (`id`, `pic_path`, `text`, `sort`) VALUES
(2, '/upload/slide/2014/07/02/ed84bf6d36bedb25f3d622c38a8320fe.jpg', '测试版文字233', 3);

-- --------------------------------------------------------

--
-- 表的结构 `tisu_values`
--

CREATE TABLE `tisu_values` (
  `id` int(11) NOT NULL,
  `akey` varchar(255) NOT NULL DEFAULT '' COMMENT '键',
  `avalues` varchar(255) DEFAULT NULL COMMENT '对应的内容'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='网站变量，数量单一，可以直接获取赋值';

--
-- 转存表中的数据 `tisu_values`
--

INSERT INTO `tisu_values` (`id`, `akey`, `avalues`) VALUES
(1, 'websitename', '网站名称1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authassignment`
--
ALTER TABLE `authassignment`
  ADD PRIMARY KEY (`itemname`,`userid`);

--
-- Indexes for table `authitem`
--
ALTER TABLE `authitem`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `authitemchild`
--
ALTER TABLE `authitemchild`
  ADD PRIMARY KEY (`parent`,`child`),
  ADD KEY `child` (`child`);

--
-- Indexes for table `tisu_admin_user`
--
ALTER TABLE `tisu_admin_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tisu_article`
--
ALTER TABLE `tisu_article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tisu_department`
--
ALTER TABLE `tisu_department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tisu_menu`
--
ALTER TABLE `tisu_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tisu_slide`
--
ALTER TABLE `tisu_slide`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tisu_values`
--
ALTER TABLE `tisu_values`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `tisu_admin_user`
--
ALTER TABLE `tisu_admin_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键', AUTO_INCREMENT=16;
--
-- 使用表AUTO_INCREMENT `tisu_article`
--
ALTER TABLE `tisu_article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- 使用表AUTO_INCREMENT `tisu_department`
--
ALTER TABLE `tisu_department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- 使用表AUTO_INCREMENT `tisu_menu`
--
ALTER TABLE `tisu_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键', AUTO_INCREMENT=61;
--
-- 使用表AUTO_INCREMENT `tisu_slide`
--
ALTER TABLE `tisu_slide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- 使用表AUTO_INCREMENT `tisu_values`
--
ALTER TABLE `tisu_values`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- 限制导出的表
--

--
-- 限制表 `authassignment`
--
ALTER TABLE `authassignment`
  ADD CONSTRAINT `AuthAssignment_ibfk_1` FOREIGN KEY (`itemname`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 限制表 `authitemchild`
--
ALTER TABLE `authitemchild`
  ADD CONSTRAINT `AuthItemChild_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `AuthItemChild_ibfk_2` FOREIGN KEY (`child`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
