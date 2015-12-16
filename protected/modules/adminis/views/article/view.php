<!-- BEGIN PAGE HEADER-->   


<div class="row">
    <div class="col-md-12">
        <!-- BEGIN PAGE TITLE & BREADCRUMB-->
        <h3 class="page-title">
            文章管理 <small>文章详细</small>
        </h3>
        <ul class="page-breadcrumb breadcrumb">

            <li>
                <i class="fa fa-home"></i>
                <a href="index.html">首页</a> 
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <a href="#">文章</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li><a href="#">文章详细</a></li>
        </ul>
        <!-- END PAGE TITLE & BREADCRUMB-->
    </div>
</div>
<!-- END PAGE HEADER-->
<!-- BEGIN PAGE CONTENT-->

<div class="row">
    <div class="col-md-12">
        <!-- BEGIN VALIDATION STATES-->
        <div class="portlet box purple">
            <div class="portlet-title">
                <div class="caption"><i class="fa fa-reorder"></i>文章</div>
                <div class="tools">

                </div>
            </div>
            <div class="portlet-body form">
                <div class="form-body form-horizontal">

                    <?php
                    $lab = $model->attributeLabels();
                    ?>

                    <div class="form-group">
                        <label class="control-label col-md-3"><?php echo CHtml::encode($lab['atitle']) ?></label>
                        <div class="col-md-4">
                            <?php echo CHtml::textField('atitle', $model['atitle'], array('size' => 60, 'maxlength' => 60, 'class' => 'form-control ', 'disabled' => true)); ?>

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3"><?php echo CHtml::encode($lab['pub_time']) ?></label>
                        <div class="col-md-4">
                            <?php echo CHtml::textField('pub_time', date("Y-m-d H:i:s", $model['pub_time']), array('size' => 60, 'maxlength' => 60, 'class' => 'form-control ', 'disabled' => true)); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3"><?php echo CHtml::encode($lab['edit_time']) ?></label>
                        <div class="col-md-4">
                            <?php echo CHtml::textField('edit_time', date("Y-m-d H:i:s", $model['edit_time']), array('size' => 60, 'maxlength' => 60, 'class' => 'form-control ', 'disabled' => true)); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3"><?php echo CHtml::encode($lab['aauthor']) ?></label>
                        <div class="col-md-4">
                            <?php echo CHtml::textField('aauthor', $model['aauthor'], array('size' => 60, 'maxlength' => 60, 'class' => 'form-control ', 'disabled' => true)); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3"><?php echo CHtml::encode($lab['atext']) ?></label>
                        <div class="col-md-4">
                            <?php echo $model['atext']; ?>
                        </div>
                    </div>         
                    <div class="form-group">
                        <label class="control-label col-md-3"><?php echo CHtml::encode($lab['sort']) ?></label>
                        <div class="col-md-4">
                            <?php echo CHtml::textField('sort', $model['sort'], array('size' => 60, 'maxlength' => 60, 'class' => 'form-control ', 'disabled' => true)); ?>
                        </div>
                    </div>

                </div>
                <div class="form-actions fluid">
                    <div class="col-md-offset-3 col-md-9">
                        <?php echo CHtml::link('修改', Yii::app()->createUrl("adminis/article/update", array('id' => $model['id'])), array('class' => "btn green")); ?>&nbsp;
                        <?php echo CHtml::link('返回列表', Yii::app()->createUrl("adminis/article/index"), array('class' => "btn default")); ?>

                    </div>
                </div>
            </div>
        </div>
        <!-- END VALIDATION STATES-->
    </div>
</div>


<!-- END PAGE CONTENT--> 
</div>
<!-- END PAGE -->  
</div>
<!-- END CONTAINER -->


<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->   
<!--[if lt IE 9]>
<script src="<?php echo Yii::app()->baseUrl ?>/assets/plugins/respond.min.js"></script>
<script src="<?php echo Yii::app()->baseUrl ?>/assets/plugins/excanvas.min.js"></script> 
<![endif]-->   
<script src="<?php echo Yii::app()->baseUrl ?>/assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->baseUrl ?>/assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->baseUrl ?>/assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->baseUrl ?>/assets/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js" type="text/javascript" ></script>
<script src="<?php echo Yii::app()->baseUrl ?>/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->baseUrl ?>/assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>  
<script src="<?php echo Yii::app()->baseUrl ?>/assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->baseUrl ?>/assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="<?php echo Yii::app()->baseUrl ?>/assets/plugins/jquery-validation/dist/jquery.validate.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->baseUrl ?>/assets/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo Yii::app()->baseUrl ?>/assets/plugins/select2/select2.min.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo Yii::app()->baseUrl ?>/assets/scripts/app.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->baseUrl ?>/assets/scripts/form-validation.js"></script> 
<!-- END PAGE LEVEL STYLES -->    
<script>
    jQuery(document).ready(function() {
        // initiate layout and plugins
        App.init();
        FormValidation.init();
    });
</script>
<!-- END JAVASCRIPTS -->