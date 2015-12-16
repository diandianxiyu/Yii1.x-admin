<!-- BEGIN PAGE HEADER-->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN PAGE TITLE & BREADCRUMB-->
					<h3 class="page-title">
						菜单管理 <small></small>
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
							<a href="#">菜单</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li><a href="#">菜单列表</a></li>
					</ul>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
			<!-- END PAGE HEADER-->


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'menu-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
		'pid',
		'reamrk',
		'sort',
		'url',
		
		'auth_item',
		'icon',
		'other',
		
		array(
			'class'=>'CButtonColumn',
                                            'footer'=>'',
                                               'header'=>''
		),
	),
                'pager'=>array(
                    'class'=>'CLinkPager',//定义要调用的分页器类，默认是CLinkPager，需要完全自定义，还可以重写一个，参考我的另一篇博文：http://blog.sina.com.cn/s/blog_71d4414d0100yu6k.html
        'cssFile'=>false,//定义分页器的要调用的css文件，false为不调用，不调用则需要亲自己css文件里写这些样式
        'header'=>'转往分页：',//定义的文字将显示在pager的最前面
        'footer'=>'',//定义的文字将显示在pager的最后面
        'firstPageLabel'=>'首页',//定义首页按钮的显示文字
        'lastPageLabel'=>'尾页',//定义末页按钮的显示文字
        'nextPageLabel'=>'下一页',//定义下一页按钮的显示文字
        'prevPageLabel'=>'前一页',//定义上一页按钮的显示文字
        //关于分页器这个array，具体还有很多属性，可参考CLinkPager的API
                ),
)); ?>




<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
	<!-- BEGIN CORE PLUGINS -->   
	<!--[if lt IE 9]>
	<script src="<?php echo Yii::app()->baseUrl?>/assets/plugins/excanvas.min.js"></script>
	<script src="<?php echo Yii::app()->baseUrl?>/assets/plugins/respond.min.js"></script>  
	<![endif]--> 
	<script src="<?php echo Yii::app()->baseUrl?>/assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
	<script src="<?php echo Yii::app()->baseUrl?>/assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>  
	<script src="<?php echo Yii::app()->baseUrl?>/assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="<?php echo Yii::app()->baseUrl?>/assets/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js" type="text/javascript" ></script>
	<script src="<?php echo Yii::app()->baseUrl?>/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
	<script src="<?php echo Yii::app()->baseUrl?>/assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>  
	<script src="<?php echo Yii::app()->baseUrl?>/assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
	<script src="<?php echo Yii::app()->baseUrl?>/assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
	<!-- END CORE PLUGINS -->
	<script src="<?php echo Yii::app()->baseUrl?>/assets/scripts/app.js"></script>      
	<script>
		jQuery(document).ready(function() {    
		   App.init();
		});
	</script>
	<!-- END JAVASCRIPTS -->