<?php

/**
 * PublicController.php
 * -------------------------------------
 * 
 * 用户登录
 * 作为单独的控制器，避免不停的重定向
 * 
 * 作者：李小雨
 * 创建时间：2014-03-06
 * 更新时间：2014-03-10
 * 更新历史：修改了判断是否为游客的函数
 *              将所有用户信息存放在用户的session中，不单独存储session,安全
 * 
 */
class PublicController extends Controller {

    /**
     * 显示登录界面
     */
    public function actionIndex() {
        $user = Yii::app()->user;
        if (!$user->getIsGuest()) {
            $this->redirect('admins/default/index');
        }
        $model = new LoginForm;
        if (isset($_POST['LoginForm'])) {
            $model->attributes = $_POST['LoginForm'];
            // validate user input and redirect to the previous page if valid
            if ($model->validate() && $model->login()){
               
                //将用户的个人信息存到用户的session中
                $username=$user->getId();
                $userInfo=  AdminUser::model()->find('username = :name',array(':name'=>$username))->attributes;
                $user->setState('userInfo',$userInfo);
                $this->redirect(Yii::app()->user->returnUrl);
                 }
            
        }
        // display the login form
        $this->renderPartial('login', array('model' => $model));
    }

    /**
     * 登出
     */
    public function actionLogout() {
        Yii::app()->user->clearStates();
        Yii::app()->user->logout();
        $this->redirect(Yii::app()->user->loginUrl);
    }

    /**
     * 锁屏
     */
    public function actionLock() {
        
        $user = Yii::app()->user;
        $userInfo=$user->getState('userInfo');
        if ($_POST) {
            
            $inputpwd = $_POST['passwd'];
            $n=$user->getState("userInfo");
            if (AdminUser::model()->encrypt($inputpwd) == $n['password']) {
                  $user->setState('lock',false);
                $this->redirect(Yii::app()->createUrl('adminis/default/index'));
            }
        }
        $user->setState('lock',true);
     //   var_dump($_SESSION);
        $this->renderpartial("lock",array(
            'userInfo'=>$userInfo
        ));
       
    }
    /**
     * cdn
     */
    public function actionCdn(){
        echo "yuchats CDN service.";
    }
    
   

}
