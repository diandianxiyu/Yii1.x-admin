<?php

class ValuesController extends SBaseController {

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
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        return array(
            array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array('index', 'view'),
                'users' => array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('create', 'update'),
                'users' => array('@'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('admin', 'delete'),
                'users' => array('admin'),
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
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new Values;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Values'])) {
            $model->attributes = $_POST['Values'];
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

        if (isset($_POST['Values'])) {
            $model->attributes = $_POST['Values'];
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
    public function actionDelete($id) {//获取返回的url
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

        $dataProvider = new CActiveDataProvider('Values');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new Values('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Values']))
            $model->attributes = $_GET['Values'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return Values the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = Values::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param Values $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'values-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
