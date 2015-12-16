<?php

class ArticleController extends SBaseController {

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
                //'accessControl', // perform access control for CRUD operations
                //'postOnly + delete', // we only allow deletion via POST request
        );
    }

    

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new Article;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Article'])) {

           // $_POST['Article']['pub_time'] = strtotime(str_replace('-', '', $_POST['Article']['pub_time']));
            $_POST['Article']['pub_time'] = strtotime($_POST['Article']['pub_time']);
            $model->attributes = $_POST['Article'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
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
    public function actionUpdate($id) {
        $model = $this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Article'])) {
           //$_POST['Article']['pub_time'] = strtotime(str_replace('-', '', $_POST['Article']['pub_time']));
             $_POST['Article']['pub_time'] = strtotime($_POST['Article']['pub_time']);
            $model->attributes = $_POST['Article'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
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
    public function actionDelete($id) {
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
    public function actionIndex() {
        $dataProvider = new CActiveDataProvider('Article');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new Article('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Article']))
            $model->attributes = $_GET['Article'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return Article the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = Article::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param Article $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'article-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }
    
    
   
    public function actions()
{
	return array(
		//在actions下的return array添加下面两句，没有actions的话自己添加
		'upload'=>array('class'=>'application.extensions.KEditor.KEditorUpload'),
		'manageJson'=>array('class'=>'application.extensions.KEditor.KEditorManage'),
	);
}

}
