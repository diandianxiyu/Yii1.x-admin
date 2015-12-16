<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');
// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'name' => '后台管理系统',
    // preloading 'log' component
    'preload' => array('log'),
    // autoloading model and component classes
    'import' => array(
        'application.models.*',
        'application.extensions.*',
        'application.components.*',
        'ext.mueditor.*', 
        'application.modules.srbac.controllers.SBaseController'
    ),
    'language' => 'zh_CN',
    'modules' => array(
        // uncomment the following to enable the Gii tool
        'adminis' => array(),
        'gii' => array(
            'class' => 'system.gii.GiiModule',
            'password' => 'xiaoyu',
            // If removed, Gii defaults to localhost only. Edit carefully to taste.
            'ipFilters' => array('127.0.0.1', '::1'),
        ),
        'srbac' => array(
            'userclass' => 'AdminUser', //default: User      对应用户的model
            'userid' => 'username', //default: userid     用户表标识位对应字段
            'username' => 'username', //default:username  用户表中用户名对应字段
            'delimeter' => '@', //default:-                 item分隔符
            'debug' => false, //default :false           调试模式，true则所有用户均开放，可以随意修改权限控制
            'pageSize' => 10, // default : 15
            'superUser' => 'root', //default: Authorizer    超级管理员，这个账号可以不受权限控制的管理，对所有页面均有访问权限
            'css' => 'srbac.css', //default: srbac.css        样式文件
            'layout' =>
            'application.views.layouts.main', //default: application.views.layouts.main,must be an existing alias
            'notAuthorizedView' => 'srbac.views.authitem.unauthorized', // default:srbac.views.authitem.unauthorized, must be an existing alias
            'alwaysAllowed' => array(//default: array()  总是允许访问的动作
                'SiteLogin', 'SiteLogout', 'SiteIndex', 'SiteAdmin',
                'SiteError', 'SiteContact',
            ),
            //'userActions' => array('Show', 'View', 'List'), //default: array()
            'listBoxNumberOfLines' => 15, //default : 10 
            'imagesPath' => 'srbac.images', // default: srbac.images 
            'imagesPack' => 'noia', //default: noia 
            'iconText' => true, // default : false 
            //'header' => 'srbac.views.authitem.header', //default : srbac.views.authitem.header,must be an existing alias 
            // 'footer' => 'srbac.views.authitem.footer', //default: srbac.views.authitem.footer,must be an existing alias 
            'showHeader' => true, // default: false 
            'showFooter' => true, // default: false
            'alwaysAllowedPath' => 'srbac.components', // default: srbac.components,must be an existing alias 
        ),
    ),
    // application components
    'components' => array(
        //这里我们可以初始化下面的组件，将 公共属性 作为参数进行赋值初始化，很显然在加载组件的时候，会获取这些值
        'user' => array(
            // enable cookie-based authentication
            'allowAutoLogin' => true,
            'guestName' => "guest",
            'loginUrl' => array('adminis/public/index'),
            'returnUrl' => array('adminis/default/index'),
            'stateKeyPrefix' => md5('xiaoyu'),
            'authTimeout' => 3600,
        ),
        // uncomment the following to enable URLs in path-format
        'urlManager' => array(
            'urlFormat' => 'path',
            'showScriptName' => false, //隐藏index.php
            'urlSuffix' => '.html',
            'rules' => array(
                'sites' => 'site/index',
                '<controller:\w+>/<id:\d+>' => '<controller>/view',
                '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
            ),
        ),
        'authManager' => array(
            'class' => 'application.modules.srbac.components.SDbAuthManager',
            //  'class'=>'CDbAuthManager',//认证类名称
            'connectionID' => 'db',
            // 'defaultRoles'=>array('guest'),//默认角色
            'itemTable' => 'AuthItem', //认证项表名称
            'itemChildTable' => 'AuthItemChild', //认证项父子关系
            'assignmentTable' => 'AuthAssignment', //认证项赋权关系
        ),
        // uncomment the following to use a MySQL database
        'db' => array(
            'connectionString' => 'mysql:host=localhost;dbname=yii_admin',
            'emulatePrepare' => true,
            'username' => 'root',
            'password' => 'lixiaoyu',
            'charset' => 'utf8',
            'tablePrefix' => 'tisu_', // 表前缀
            'schemaCachingDuration'=>3600,
        ),
        'errorHandler' => array(
            // use 'site/error' action to display errors
            'errorAction' => 'site/error',
        ),
        'log' => array(
            'class' => 'CLogRouter',
            'routes' => array(
                array(
                    'class' => 'CFileLogRoute',
                    'levels' => 'error, warning',
                ),
            // uncomment the following to show log messages on web pages
            /*
              array(
              'class'=>'CWebLogRoute',
              ),
             */
            ),
        ),
        'cache'=>array(
            'class'=>'CDbCache',
        ),
       
    ),
    // application-level parameters that can be accessed
    // using Yii::app()->params['paramName']
    'params' => array(
        // this is used in contact page
        'adminEmail' => 'webmaster@example.com',
        'uploadPath'=>'/upload',  //添加这句，upload为存放文件文件夹的名字，自己定义，这里是放在根目录的upload文件夹  
    ),
);
