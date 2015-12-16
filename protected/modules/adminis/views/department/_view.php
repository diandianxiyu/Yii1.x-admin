<?php
/* @var $this MenuController */
/* @var $data Menu */
?>

<tr>
	
	<td><?php echo CHtml::link(CHtml::encode($data['name']), array('view', 'id'=>$data['id'])); ?></td>        
	<td><?php echo CHtml::encode($data['sort']); ?></td>
        <td><a href="<?php echo Yii::app()->urlManager->createUrl("adminis/department/update", array('id'=>$data['id']));?>" class="btn default btn-xs purple"><i class="fa fa-edit"></i>修改</a>  
            <a  href="<?php echo Yii::app()->urlManager->createUrl("adminis/department/delete", array('id'=>$data['id'],'returnUrl'=>  base64_encode(Yii::app()->request->pathInfo) ));?>" class="btn default btn-xs black deletes  <?php if(Department::model()->find('pid = :pid',array(':pid'=>$data['id']))){ echo 'disabled';}?>" onclick="if(!confirm('您想要删除 <?php echo $data['name']; ?> 吗?')) return false;"><i class="fa fa-trash-o"></i> 删除</a></td>
	</tr>
