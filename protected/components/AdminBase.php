<?php
/**
 * AdminBase.php
 * ------------------------------------
 * 
 * 后台基础类
 * 继承自控制器Contoller
 * 
 * 作者：李小雨
 * 开始时间：2014-03-06
 * 更新时间：2014-03-06
 * 更新记录：除去session中用户的相关，放到user控制器中
 * 
 */
class AdminBase extends Controller{
  
    protected $_catalog;
    public function init ()
    {
        parent::init();
        if (isset($_POST['sessionId'])) {
            $session = Yii::app()->getSession();
            $session->close();
            $session->sessionID = $_POST['sessionId'];
            $session->open();
        }
         //如果當前的網址不是我们的网址，就只能定向返回给一个控制器
        //if(Yii::app()->request->hostInfo != "http://4a8d403b8fead009.tisumoon.com" ){
        //     $this->redirect(Yii::app()->createUrl('adminis/public/cdn' ));
       // }
        //如果为没有登录，则跳转到登录页面
        $user=Yii::app()->user;
      //  var_dump($user->getIsGuest());
      if ($user->getIsGuest()){
         $this->redirect(Yii::app()->createUrl("adminis/public/index") );
      }
      
      //如果当前状态为锁屏，就跳转到锁屏页面
      if($user->getState('lock')){
            $this->redirect(Yii::app()->createUrl('adminis/public/lock' ));
        }
       
         
        
        //判断权限
        $controllers=  $this->id;
        $action=  $this->action->id;
        $module=  trim($this->module->id?$this->module->id.'@':"") ;
       $auth_item=$module.ucfirst($controllers).ucfirst($action);
    
    }

    function checkIsAccess() {
        $pathInfo = Yii::app()->request->pathInfo;
        $routeArr = explode('/', $pathInfo);
        
        $module = $routeArr[0]; 
        $action = isset($routeArr[2]) ? $routeArr[2] : 'Index';  
        $action = ucwords(strtolower($action)); 
        $action=  explode(".", $action);
        $action=$action[0];
        
        $controller = str_replace('Controller', '', get_class($this)); 
        if (strtolower($controller) == 'welcome') {
            return true;
        }
        
        $task = $module . "@" . $controller . $action;
        if (Yii::app()->user->checkAccess($task)) {
            return true;
        } else {
            return false;
        }
    }


}
