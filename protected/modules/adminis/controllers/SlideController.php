<?php

class SlideController extends SBaseController
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			//'accessControl', // perform access control for CRUD operations
			//'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
            
            
             // var_dump($_SERVER);
         $model = new Slide() ;
        if (isset($_POST['Slide'])) {
           
            //var_dump($_FILES);exit();
            $model->attributes = $_POST['Slide'];
            if ($_FILES['Slide']['error']['pic_path']==0) {
                $model->pic_path = CUploadedFile::getInstance($model, 'pic_path');
                /**
                 * 按时间生成目录
                 * 获取文件后缀
                 * 生成文件
                 */
                $filename = explode(".", $_FILES['Slide']['name']['pic_path']);
                $data = date("Y", time()) . '/' . date("m", time()) . '/' . date("d", time()).'/';
                $save_path = "./upload/slide/$data";
  
                //创建相应了、目录
                if (!file_exists($save_path)) {
                    $this->mkdirs($save_path);
                }
                $namef = md5(uniqid(rand(), true)) . '.' . $filename[1];
                $fullPath = $data  . $namef;
                $model->pic_path->saveAs(Yii::app()->basePath . "/../upload/slide/{$fullPath}");
                $model->pic_path = '/upload/slide/'.$fullPath;
                
            }
            //var_dump($model->attributes);exit();
            if ($model->save()) {
                $this->redirect(array('view', 'id' => $model->id));
            } 
        }
        $this->render('create', array(
            'model' => $model,
        ));
        
            
            
           
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
            
              $model = $this->loadModel($id);
        if (isset($_POST['Slide'])) {
           
            $old=$model->attributes;
             $oldPath=$old['pic_path'];
         // var_dump($oldPath);exit();
            $model->attributes = $_POST['Slide'];
             if ($_FILES['Slide']['error']['pic_path']==0) {
                $model->pic_path = CUploadedFile::getInstance($model, 'pic_path');
                /**
                 * 按时间生成目录
                 * 获取文件后缀
                 * 生成文件
                 */
                $filename = explode(".", $_FILES['Slide']['name']['pic_path']);
                $data = date("Y", time()) . '/' . date("m", time()) . '/' . date("d", time()).'/';
                $save_path = "./upload/slide/$data";
                //创建相应了、目录
                if (!file_exists($save_path)) {
                    $this->mkdirs($save_path);
                }
                $namef = md5(uniqid(rand(), true)) . '.' . $filename[1];
                $fullPath = $data  . $namef;
                $model->pic_path->saveAs(Yii::app()->basePath . "/../upload/slide/{$fullPath}");
                @unlink(Yii::app()->basePath . "/../upload/slide/{$oldPath}");
                $model->pic_path ="/upload/slide/". $fullPath;
            }else{
                 $model->pic_path = $oldPath;
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
	public function actionDelete($id)
	{
		$urlstr = base64_decode($_REQUEST['returnUrl']);
        $urlArr = explode("/", $urlstr);
        ;
        $count = count($urlArr);
        if ($count == 2) {
            $rUrl = $urlstr . '/index';
        } elseif ($count == 5) {
            $rUrl = $urlArr[0] . '/' . $urlArr[1] . '/' . $urlArr[2];
            $numArr = explode(".", $urlArr[4]);
            $param = array($urlArr[3] => $numArr[0]);
        } elseif ($count == 3) {
            $rA = explode('.', $urlArr[2]);
            $rUrl = $rUrl = $urlArr[0] . '/' . $urlArr[1] . '/' . $rA[0];
        } else {
            throw new CHttpException(404, 'H_H 你是哪儿来的。。。');
        }

        $id = $_GET['id'];
        $result = $this->loadModel($id)->delete();
        if ($result) {
            $this->redirect(Yii::app()->createUrl($rUrl, $param));
        } else {
            throw new CHttpException(404, 'TAT 删除失败。。。');
        }
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Slide');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Slide('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Slide']))
			$model->attributes=$_GET['Slide'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Slide the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Slide::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Slide $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='slide-form')
		{
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
