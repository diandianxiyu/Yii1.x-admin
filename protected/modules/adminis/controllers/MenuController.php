<?php

class MenuController extends SBaseController
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
			'accessControl', // perform access control for CRUD operations
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
				'actions'=>array('index','view','icons'),
				'users'=>array('@'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('@'),
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
            
            $model=$this->loadModel($id);
         
		$this->render('view',array(
			'model'=>$model,
		));
	}
         
        public function actionIcons(){
            
            $this->renderPartial("icons");
        }

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Menu;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Menu']))
		{
			$model->attributes=$_POST['Menu'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Menu']))
		{
			$model->attributes=$_POST['Menu'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
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
	public function actionIndex()
	{
            
                            /**
		$dataProvider=new CActiveDataProvider('Menu',array(
    'criteria'=>array(
        'condition'=>'',
        'order'=>'id DESC',
       
    ),
    'pagination'=>array(
        'pageSize'=>100,
    )));
               echo "<br>";
                echo "<br>";
                 echo "<br>";
                  echo "<br>";
                   echo "<br>";
                   
       echo "<pre>";
       print_r($dataProvider->criteria);
       echo "</pre>";
                             * 
                             */
            
            //自己写，编辑二维数组
            //获取全部的菜单
            $MenuAll=  Menu::model()->findAll();
            $deSort=array();
            foreach ($MenuAll as $key => $value) {
                $deSort[]=$value->attributes;
            }            
    //        var_dump($deSort);
            
            
            $newDeMenu=array();
            $deMenu=  Menu::model()->getAllAuthItem();
            foreach ($deMenu as $key => $value) {
                $newDeMenu[]=array('id'=>$key,'name'=>$value);
            }
       //     var_dump($newDeMenu);
            //重新对数组进行排序，同时不再使用listview
            $biuMenu=array();
            foreach ($newDeMenu as $key => $value) {
                foreach ($deSort as $k =>$v){
                    if($value['id'] == $v['id'] ){//保证只有一轮循环 ,当外面的和里面的一致时
                      $v['name']=$value['name'];
                      $biuMenu[]=$v;
                    }
                }
            }
	$this->render('index',array(
			'menuArr'=>$biuMenu,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Menu('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Menu']))
			$model->attributes=$_GET['Menu'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Menu the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Menu::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Menu $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='menu-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
        
       
}
