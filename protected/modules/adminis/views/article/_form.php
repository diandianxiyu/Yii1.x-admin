<?php
/* @var $this ArticleController */
/* @var $model Article */
/* @var $form CActiveForm */
?>

<?php
/**
$this->widget('ext.ueditor.Ueditor', array(
    'getId' => 'Article_atext',
    'UEDITOR_HOME_URL' => "/",
    'options' => 'toolbars:[["fontfamily","fontsize","forecolor","bold","italic","strikethrough","|","insertunorderedlist","insertorderedlist","blockquote","|","link","unlink","highlightcode","|","undo","redo","source", "|", "insertimage"]],
                 	wordCount:false,
                 	elementPathEnabled:false,
                 	imagePath:"/upload/ueditor/",
                       imageUrl:"/ueditor1_2_2_0/php/imageUp.php",
                 	initialContent:"",
                        imageManagerUrl:"/ueditor1_2_2_0/php/imageManager.php",
                        imageManagerPath:"/upload/ueditor/",
                 	',
));
 * 
 */

?>
<link type="text/css" href="http://code.jquery.com/ui/1.9.1/themes/smoothness/jquery-ui.css" rel="stylesheet" />
<script type="text/javascript" src="http://code.jquery.com/ui/1.9.1/jquery-ui.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl ?>/assets/plugins/jQuery-Timepicker-Addon/jQuery-Timepicker-Addon/demos.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl ?>/assets/plugins/jQuery-Timepicker-Addon/jQuery-Timepicker-Addon/jquery-ui-timepicker-addon.css" />
<script src="<?php echo Yii::app()->baseUrl ?>/assets/plugins/jQuery-Timepicker-Addon/jQuery-Timepicker-Addon/jquery-ui-timepicker-addon.js" type="text/javascript" ></script>
<script src="<?php echo Yii::app()->baseUrl ?>/assets/plugins/jQuery-Timepicker-Addon/js/jquery.ui.datepicker-zh-CN.js.js" type="text/javascript" ></script>
<script src="<?php echo Yii::app()->baseUrl ?>/assets/plugins/jQuery-Timepicker-Addon/js/jquery-ui-timepicker-zh-CN.js" type="text/javascript" ></script>
<?php
if (!$model->isNewRecord) {
    //$model->pub_time = date('Y-m-d H:i:s', time());
    //$model->pub_time = time();
}
?>


<!-- BEGIN PAGE CONTENT-->
<div class="row">

    <div class="col-md-12 ">
        <!-- BEGIN SAMPLE FORM PORTLET-->   
        <div class="portlet box green ">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-reorder"></i> <?php echo $model->isNewRecord ? '发表' : '修改'; ?>文章
                </div>
                <div class="tools">
                    <a href="" class="collapse"></a>
                    <a href="#portlet-config" data-toggle="modal" class="config"></a>
                    <a href="" class="reload"></a>
                    <a href="" class="remove"></a>
                </div>
            </div>
            <div class="portlet-body form form-horizontal">
                <div class="form-body ">
<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'reply-form',
    // Please note: When you enable ajax validation, make sure the corresponding
    // controller action is handling ajax validation correctly.
    // There is a call to performAjaxValidation() commented in generated controller code.
    // See class documentation of CActiveForm for details on this.
    'enableAjaxValidation' => false,
    'htmlOptions' => array('enctype' => 'multipart/form-data'),
        ));
?>
                    <div class="form-group">
                        <label class="control-label col-md-3"><?php echo $form->labelEx($model, 'atitle'); ?></label>
                        <div class="col-md-4">
<?php echo $form->textField($model, 'atitle', array('size' => 60, 'maxlength' => 60, 'class' => 'form-control')); ?>

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3"><?php echo $form->labelEx($model, 'aauthor'); ?></label>
                        <div class="col-md-4">
<?php echo $form->textField($model, 'aauthor', array('size' => 60, 'maxlength' => 60, 'class' => 'form-control')); ?>

                        </div>
                    </div>


                    <div class="form-group">
<?php echo $form->labelEx($model, 'atext', array('class' => 'col-md-3 control-label')); ?>
                        <div class="col-md-9">
                            
                            
                            <?php 
                              $this->widget('ext.KEditor.KEditor',array(
                            
			'model'=>$model,  //传入form model
			'name'=>'atext', //设置name
			'properties'=>array(
				//设置接收文件上传的action
				'uploadJson'=>'/adminis/article/upload',
				//设置浏览服务器文件的action，这两个就是上面配置在/admin/default的
				'fileManagerJson'=>'/adminis/article/manageJson',
                                'items'=>array('source', '|', 'fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold', 'italic', 'underline',
						'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
						'insertunorderedlist', '|',  'image', 'link','unlink'),	 
				'newlineTag'=>'br',
				'allowFileManager'=>true,
				//传值前加js:来标记这些是js代码
				'afterCreate'=>"js:function() {
						K('#ChapterForm_all_len').val(this.count());
						K('#ChapterForm_word_len').val(this.count('text'));
					}",
				'afterChange'=>"js:function() {
						K('#ChapterForm_all_len').val(this.count());
						K('#ChapterForm_word_len').val(this.count('text'));
					}",
			), 
			'textareaOptions'=>array(
				'style'=>'width:98%;height:400px;',
			)
		)); 
                          
?>
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
 <?php 
 /**
 $this->widget('application.widget.kindeditor.KindEditor',array(
	  'target'=>array(
	  	'#Article_atext'=>array('uploadJson'=>$this->createUrl('upload'),'extraFileUploadParams'=>array(array('sessionId'=>session_id()))))));
  * 
  */
 ?>
                            <span class="help-block"><?php echo $form->error($model, 'atext') ? $form->error($model, 'atext') : 请输入文章内容; ?></span>
                        </div>
                    </div>
                    <div class="form-group">

<?php echo $form->labelEx($model, 'pub_time', array('class' => 'col-md-3 control-label')); ?>
                        <div class="col-md-4">
                           <?php 
                           
                           if (!$model->isNewRecord) {
                           echo $form->textField($model, 'pub_time', array('size' => 60, 'maxlength' => 60, 'class' => 'form-control','value'=>  date("Y-m-d H:i",$model->pub_time))); 
                           }else{
                            echo $form->textField($model, 'pub_time', array('size' => 60, 'maxlength' => 60, 'class' => 'form-control','value'=>  date("Y-m-d H:i",  time())));    
                               
                           }
                           
                           
                           ?>


                            <span class="help-block"><?php echo $form->error($model, 'pub_time') ? $form->error($model, 'pub_time') : "发布时间"; ?></span>
                        </div>
                    </div>



                    <div class="form-group">
                        <label class="control-label col-md-3"><?php echo $form->labelEx($model, 'sort'); ?></label>
                        <div class="col-md-4">
<?php echo $form->textField($model, 'sort', array('size' => 60, 'maxlength' => 60, 'class' => 'form-control')); ?>

                        </div>
                    </div>
                    <div class="form-actions fluid">
                        <div class="col-md-offset-3 col-md-9">
<?php echo CHtml::submitButton($model->isNewRecord ? '创建' : '修改', array('class' => 'btn green')); ?>
                            <?php echo CHtml::link('取消', Yii::app()->createUrl("adminis/article/index"), array('class' => "btn default")); ?>                           
                        </div>
                    </div>
<?php $this->endWidget(); ?>
                </div>
            </div>
            <!-- END SAMPLE FORM PORTLET-->

        </div>
    </div>
<script type="text/javascript">
        jQuery(function () {
            // 时间设置
            jQuery('#Article_pub_time').datetimepicker({
                timeFormat: "HH:mm",
                dateFormat: "yy-mm-dd"
            });

        });
    </script>