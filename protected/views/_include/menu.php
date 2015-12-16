<!-- BEGIN SIDEBAR -->

		<div class="page-sidebar navbar-collapse collapse">
			<!-- BEGIN SIDEBAR MENU -->        
			<ul class="page-sidebar-menu">
				<li>
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
					<div class="sidebar-toggler hidden-phone"></div>
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
				</li>
				<li>
					<!-- BEGIN RESPONSIVE QUICK SEARCH FORM 
					<form class="sidebar-search" action="extra_search.html" method="POST">
						<div class="form-container">
							<div class="input-box">
								<a href="javascript:;" class="remove"></a>
								<input type="text" placeholder="搜索..."/>
								<input type="button" class="submit" value=" "/>
							</div>
						</div>
					</form>
					<!-- END RESPONSIVE QUICK SEARCH FORM -->
				</li>
				
                                                            <?php 
                                                            
                                                            //var_dump($_SESSION);
                                                                $n=new AdminRBAC();
                                                                //var_dump($n->chkAccess("menu"));
                                                                echo($n->getMenu());
                                                               
                                                               
                                                              // var_dump(Menu::data());
                                                                    ?>
				
			</ul>
			<!-- END SIDEBAR MENU -->
		</div>
		<!-- END SIDEBAR -->
               
              <?php
              
              //在菜单进行控制，将srbac的都放到这边
              
              
              ?>  
                <input id="srbacurl" type="hidden" value="<?php echo Yii::app()->createUrl("srbac") ?>">
                <script src="<?php echo Yii::app()->baseUrl?>/assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>  
        <script type="text/javascript">
      

 var hrefq3=$("#srbacurl").val();
$("#srbac").eq(0).click(function(){
   window.open(hrefq3,"rbac","height=800, width=1000, toolbar=no, menubar=no, scrollbars=no, resizable=no, location=no, status=no");
})
           
</script>