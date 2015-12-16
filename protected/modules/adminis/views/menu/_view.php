<?php
/* @var $this MenuController */
/* @var $data Menu */
?>

<tr>
	
	<td><?php echo CHtml::link(CHtml::encode($data['name']), array('view', 'id'=>$data['id'])); ?></td>
 
	
                <td><i class='<?php echo CHtml::encode($data['icon']); ?>'></i></td>
	<td><?php echo CHtml::encode($data['sort']); ?></td>
	<td><?php echo CHtml::encode($data['url']); ?></td>
	<td><?php echo CHtml::encode($data['auth_item']); ?></td>
        <td><?php echo CHtml::encode($data['reamrk']); ?></td>
        <td><a href="<?php echo Yii::app()->urlManager->createUrl("adminis/menu/update", array('id'=>$data['id']));?>" class="btn default btn-xs purple"><i class="fa fa-edit"></i>修改</a>  
            <a  href="<?php echo Yii::app()->urlManager->createUrl("adminis/menu/delete", array('id'=>$data['id'],'returnUrl'=>  base64_encode(Yii::app()->request->pathInfo) ));?>" class="btn default btn-xs black deletes  <?php if(Menu::model()->find('pid = :pid',array(':pid'=>$data['id']))){ echo 'disabled';}?>" onclick="if(!confirm('您想要删除菜单项 <?php echo $data['username']; ?> 吗?')) return false;"><i class="fa fa-trash-o"></i> 删除</a></td>
	</tr>
