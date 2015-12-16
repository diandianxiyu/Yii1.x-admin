
<div class="row">
				<div class="col-md-12">
					<!-- BEGIN PAGE TITLE & BREADCRUMB-->
					<h3 class="page-title">
						管理员管理 <small>管理后台用户</small>
					</h3>
					<ul class="page-breadcrumb breadcrumb">
						<li class="btn-group">
							<button type="button" class="btn blue dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true">
							<span>Actions</span> <i class="fa fa-angle-down"></i>
							</button>
							<ul class="dropdown-menu pull-right" role="menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li class="divider"></li>
								<li><a href="#">Separated link</a></li>
							</ul>
						</li>
						<li>
							<i class="fa fa-home"></i>
							<a href="index.html">首页</a> 
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="#">管理员管理</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li><a href="#">管理员管理</a></li>
					</ul>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>

<div class="portlet box red">
						<div class="portlet-title">
							<div class="caption"><i class="fa fa-cogs"></i>管理员列表</div>
							<div class="tools">
								<a href="javascript:;" class="collapse"></a>
								<a href="#portlet-config" data-toggle="modal" class="config"></a>
								<a href="javascript:;" class="reload"></a>
								<a href="javascript:;" class="remove"></a>
							</div>
						</div>
<div class="portlet-body">
							<div class="table-responsive">
								<table class="table">
									<thead>
										<tr>
											
											<th>用户名</th>
											
											
                                                                                                                                                                    <th>部门</th>
                                                                                                                                                                    <th>电子邮箱</th>
											<th>手机号</th>
											<th>注册时间</th>
											<th>禁用</th>
                                                                                                                                                                  
                                                                                                                                                                <th>操作</th>
										</tr>
									</thead>
<tbody>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
    'pager'=>array(
                 
        'class'=>'CLinkPager',//定义要调用的分页器类，默认是CLinkPager，需要完全自定义，还可以重写一个，参考我的另一篇博文：http://blog.sina.com.cn/s/blog_71d4414d0100yu6k.html
        'cssFile'=>false,//定义分页器的要调用的css文件，false为不调用，不调用则需要亲自己css文件里写这些样式
        'header'=>'',//定义的文字将显示在pager的最前面
        'footer'=>'',//定义的文字将显示在pager的最后面
        'firstPageLabel'=>'首页',//定义首页按钮的显示文字
        'lastPageLabel'=>'尾页',//定义末页按钮的显示文字
        'nextPageLabel'=>'下一页',//定义下一页按钮的显示文字
        'prevPageLabel'=>'前一页',//定义上一页按钮的显示文字
        //关于分页器这个array，具体还有很多属性，可参考CLinkPager的API
        )
)); ?>
</tbody>
                                                                </table>
                                                        </div>
    </div>
</div>

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