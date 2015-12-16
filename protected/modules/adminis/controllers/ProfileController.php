<?php

class ProfileController extends SBaseController {

    function filters() {
        return array(
          'accessControl',
        );
    }
    public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','ajaxUpdateProfile','passwd','ajaxUpdatePasswd','AjaxAvatar'),
				'users'=>array('@'),
			),
			
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
        }


    /**
     * 用户资料修改
     */
    public function actionIndex() {    
        $user = Yii::app()->user;
        $userInfo = $user->getState('userInfo');
        $usermodel = $this->loadModel();
        $this->render('index', array(
            'userInfo' => $userInfo,
            'model' => $usermodel,
        ));
    }
    /**
     * ajax修改用户信息
     */
    public function actionAjaxUpdateProfile() {
        
         $model = $this->loadModel();
         $model->attributes = $_POST['AdminUser'];
         if($model->validate() &&$model->save()){
             //更新用户信息
             $this->updateUserInfo();
             $result=array(
                 'class'=>'alert-success',
                 'title'=>'修改成功',
                 'msg'=>'您的资料修改完成',
             );
         }else{
             $error="";
             foreach ($model->errors as $key => $value) {
                 $error.= $value[0]."&nbsp;&nbsp;&nbsp;";
             }
             $result=array(
                 'class'=>'alert-danger',
                 'title'=>'修改失败',
                 'msg'=>$error,
             );
         }
        $this->renderPartial("message",array('msg'=>$result));
    }
    /**
     * ajax修改密码
     */
    public function actionAjaxUpdatePasswd(){ 
        $model = $this->loadModel();
         if(AdminUser::model()->encrypt($_POST['oldPasswd'])  != $model->attributes['password'] ){
             $result=array(
                 'class'=>'alert-warning',
                 'title'=>'失败',
                 'msg'=>'原密码不正确',
             );
         }elseif($_POST['newPasswd'] != $_POST['repPasswd']){
             $result=array(
                 'class'=>'alert-warning',
                 'title'=>'失败',
                 'msg'=>'两次输入密码不一致',
             );
         }else{
             $model->attributes=array('password'=>AdminUser::model()->encrypt($_POST['repPasswd']));
             
            if($model->save()){
                $this->updateUserInfo();
                $result=array(
                 'class'=>'alert-success',
                 'title'=>'成功',
                 'msg'=>"修改密码成功，请牢记新密码",
             );
            }else{
             $result=array(
                 'class'=>'alert-danger',
                 'title'=>'失败',
                 'msg'=>"修改密码失败",
             );
            }
         }
        $this->renderPartial("message",array('msg'=>$result));
    }

    public function actionPasswd() {
        $this->render('passwd');
    }
    
    
    /**
     * ajax修改用户头像
     */
    public function actionAjaxAvatar(){
       //获取当前用户的model
        $model=  $this->loadModel();
        $old=$model->attributes;
             $oldPath=$old['avatar'];
        if($_FILES['AdminUser']['error']['avatar'] == 0){
            //上传图片有效
            $model->avatar = CUploadedFile::getInstance($model, 'avatar');
                $filename = explode(".", $_FILES['AdminUser']['name']['avatar']);
                $data = date("Y", time()) . '/' . date("m", time()) . '/' . date("d", time()).'/';
                $save_path = "./upload/$data";

                //创建相应了、目录
                if (!file_exists($save_path)) {
                    $this->mkdirs($save_path);
                }
                $namef = md5(uniqid(rand(), true)) . '.' . $filename[1];
                $fullPath = $data  . $namef;
                $model->avatar->saveAs(Yii::app()->basePath . "/../upload/{$fullPath}");
                @unlink(Yii::app()->basePath . "/../upload/{$oldPath}");
                $model->avatar = $fullPath;
            }
            if ($model->save()){
                $this->updateUserInfo();
                $this->redirect(array('index'));
            }
    }
    
    private function loadModel(){
        $model=new AdminUser();
        $user = Yii::app()->user;
        $username = $user->getId();
        $usermodel = $model->find('username = :name', array(':name' => $username));
        if($usermodel == null){
             throw new CHttpException(404, '非正常用户');
        }else{
            return $usermodel;
        }
    }
    /**
     * 更新用户在session中的数据
     */
    private function updateUserInfo(){
        $model=new AdminUser();
        $user = Yii::app()->user;
        $username = $user->getId();
        $usermodel = $model->find('username = :name', array(':name' => $username));
        if($usermodel == null){
             throw new CHttpException(404, '非正常用户');
        }else{
             $user->setState('userInfo',$usermodel->attributes);
        }
    }

    // Uncomment the following methods and override them if needed
    /*
      public function filters()
      {
      // return the filter configuration for this controller, e.g.:
      return array(
      'inlineFilterName',
      array(
      'class'=>'path.to.FilterClass',
      'propertyName'=>'propertyValue',
      ),
      );
      }

      public function actions()
      {
      // return external action classes, e.g.:
      return array(
      'action1'=>'path.to.ActionClass',
      'action2'=>array(
      'class'=>'path.to.AnotherActionClass',
      'propertyName'=>'propertyValue',
      ),
      );
      }
     */

   
/**
     * 递归创建目录
     * @param type $path
     * @param type $mode
     */
    private function mkdirs($path, $mode = 0777) { //creates directory tree recursively 
        $dirs = explode('/', $path);
        $pos = strrpos($path, ".");
        if ($pos === false) { // note: three equal signs 
// not found, means path ends in a dir not file 
            $subamount = 0;
        } else {
            $subamount = 1;
        }

        for ($c = 0; $c < count($dirs) - $subamount; $c++) {
            $thispath = "";
            for ($cc = 0; $cc <= $c; $cc++) {
                $thispath.=$dirs[$cc] . '/';
            }
            if (!file_exists($thispath)) {
//print "$thispath<br>"; 
                mkdir($thispath, $mode);
            }
        }
    }
}
