<?php

class AdminUserController extends SBaseController {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';

    /**
     * @return array action filters
     */
    public function filters() {
        return array(
            'accessControl', // perform access control for CRUD operations
            //'postOnly + delete', // we only allow deletion via POST request
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        return array(
            array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array('index', 'view','disable'),
                'users' => array('@'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('create', 'update'),
                'users' => array('@'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('', 'delete'),
                'users' => array('@'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {
        $fkmodel=  Department::model();
        $this->render('view', array(
            'model' => $this->loadModel($id),
            'fkmodel'=>$fkmodel,
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new AdminUser;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['AdminUser'])) {

            //var_dump($_FILES);exit();
            $model->attributes = $_POST['AdminUser'];
            if ($_FILES['AdminUser']['error']['avatar']==0) {
                $model->avatar = CUploadedFile::getInstance($model, 'avatar');
                /**
                 * 按时间生成目录
                 * 获取文件后缀
                 * 生成文件
                 */
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
                $model->avatar = $fullPath;
                
            }
            //var_dump($model->attributes);exit();
            if ($model->save()) {

                $this->redirect(array('view', 'id' => $model->id));
            } 
        }

        //设置默认值
        $model->department = 2;

        $this->render('create', array(
            'model' => $model,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['AdminUser'])) {
            $old=$model->attributes;
             $oldPath=$old['avatar'];
        //   var_dump($oldPath);
            $model->attributes = $_POST['AdminUser'];
             if ($_FILES['AdminUser']['error']['avatar']==0) {
                $model->avatar = CUploadedFile::getInstance($model, 'avatar');
                /**
                 * 按时间生成目录
                 * 获取文件后缀
                 * 生成文件
                 */
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
           // var_dump($model->attributes);exit();
            if ($model->save()){
                $this->redirect(array('view', 'id' => $model->id));
            }
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete() {
        //获取返回的url
        $urlstr=base64_decode($_REQUEST['returnUrl']);
        $urlArr=  explode("/", $urlstr);
;
        $count=count($urlArr);
        if($count == 2){
            $rUrl=$urlstr.'/index';
        }elseif ($count ==5) {
            $rUrl=$urlArr[0].'/'.$urlArr[1].'/'.$urlArr[2];
            $numArr=explode(".",  $urlArr[4]);
            $param=array($urlArr[3]=>$numArr[0]);
        }elseif($count == 3){
            $rA=  explode('.', $urlArr[2]);
            $rUrl=$rUrl=$urlArr[0].'/'.$urlArr[1].'/'.$rA[0];
        }else{
            throw new CHttpException(404, 'H_H 你是哪儿来的。。。');
        }

             $id=$_GET['id'];
            $result=   $this->loadModel($id)->delete();
            if($result){
                $this->redirect(Yii::app()->createUrl($rUrl, $param));
            }else{
                 throw new CHttpException(404, 'TAT 删除失败。。。');
            }
            
       
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
       
        $dataProvider = new CActiveDataProvider('AdminUser');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }
    
    public function actionDisable(){
        
        //获取返回的url
        $urlstr=base64_decode($_REQUEST['returnUrl']);
        $urlArr=  explode("/", $urlstr);
;
        $count=count($urlArr);
        if($count == 2){
            $rUrl=$urlstr.'/index';
        }elseif ($count ==5) {
            $rUrl=$urlArr[0].'/'.$urlArr[1].'/'.$urlArr[2];
            $numArr=explode(".",  $urlArr[4]);
            $param=array($urlArr[3]=>$numArr[0]);
        }elseif($count == 3){
            $rA=  explode('.', $urlArr[2]);
            $rUrl=$rUrl=$urlArr[0].'/'.$urlArr[1].'/'.$rA[0];
        }else{
            throw new CHttpException(404, 'H_H 你是哪儿来的。。。');
        }

             $id=$_GET['id'];
            $result=   $this->loadModel($id)->updateByPk($id, array('disable'=>  abs($this->loadModel($id)->disable -1)));
            if($result){
                $this->redirect(Yii::app()->createUrl($rUrl, $param));
            }else{
                 throw new CHttpException(404, 'TAT 修改失败。。。');
            }
            
        
    }

    

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return AdminUser the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = AdminUser::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'QAQ 没有找到资源唉。。。');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param AdminUser $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'admin-user-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

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
