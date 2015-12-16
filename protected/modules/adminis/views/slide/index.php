

<!-- BEGIN PAGE HEADER-->
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN PAGE TITLE & BREADCRUMB-->
        <h3 class="page-title">
            图片管理 <small></small>
        </h3>
        <ul class="page-breadcrumb breadcrumb">
            <li class="btn-group">

            </li>
            <li>
                <i class="fa fa-home"></i>
                <a href="index.html">首页</a> 
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <a href="#">图片</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li><a href="#">图片列表</a></li>
        </ul>
        <!-- END PAGE TITLE & BREADCRUMB-->
    </div>
</div>
<!-- END PAGE HEADER-->

<!-- BEGIN SAMPLE TABLE PORTLET-->
<div class="portlet box red">
    <div class="portlet-title">
        <div class="caption"><i class="fa fa-cogs"></i>图片列表</div>
        <div class="tools">

        </div>
    </div>
    <div class="portlet-body">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>

                        <th>图片地址</th>
                        <th>文字说明</th>
                        <th>排序</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $model=new Slide();
                    $de=new CDbCriteria();
                    $de->order="sort DESC";
                    $all=$model->findAll($de);
                    foreach ($all as $key => $value) {
                        $this->renderPartial("_view", array("data" => $value->attributes));
                    }
                    ?>


                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- END SAMPLE TABLE PORTLET-->
<link href="<?php echo Yii::app()->baseUrl ?>/assets/css/pages/profile.css" rel="stylesheet" type="text/css" />
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->   
<!--[if lt IE 9]>
<script src="<?php echo Yii::app()->baseUrl ?>/assets/plugins/excanvas.min.js"></script>
<script src="<?php echo Yii::app()->baseUrl ?>/assets/plugins/respond.min.js"></script>  
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
<script src="<?php echo Yii::app()->baseUrl ?>/assets/scripts/app.js"></script>      
<script>
    jQuery(document).ready(function() {
        App.init();
    });


</script>
<!-- END JAVASCRIPTS -->
