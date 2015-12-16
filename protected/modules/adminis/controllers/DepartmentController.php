<?php

class DepartmentController extends SBaseController {

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
         //   'postOnly + delete', // we only allow deletion via POST request
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
        $model = new Department;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Department'])) {
            $model->attributes = $_POST['Department'];
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

        if (isset($_POST['Department'])) {
            $model->attributes = $_POST['Department'];
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

        //自己写，编辑二维数组
        //获取全部的菜单
        $DepartmentAll = Department::model()->findAll();
        $deSort = array();
        foreach ($DepartmentAll as $key => $value) {
            $deSort[] = $value->attributes;
        }
        //        var_dump($deSort);


        $newDe = array();
        $deMenu = Department::model()->getAllDepart();
        foreach ($deMenu as $key => $value) {
            $newDe[] = array('id' => $key, 'name' => $value);
        }
        //     var_dump($newDeMenu);
        //重新对数组进行排序，同时不再使用listview
        $biuDe = array();
        foreach ($newDe as $key => $value) {
            foreach ($deSort as $k => $v) {
                if ($value['id'] == $v['id']) {//保证只有一轮循环 ,当外面的和里面的一致时
                    $v['name'] = $value['name'];
                    $biuDe[] = $v;
                }
            }
        }
        $dataProvider = new CActiveDataProvider('Department');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
            'desArr' => $biuDe,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new Department('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Department']))
            $model->attributes = $_GET['Department'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return Department the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = Department::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param Department $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'department-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
