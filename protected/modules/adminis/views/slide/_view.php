<?php
/* @var $this MenuController */
/* @var $data Menu */
?>

<tr>
	
	<td><?php echo CHtml::link(CHtml::encode($data['pic_path']), array('view', 'id'=>$data['id'])); ?></td>
        <td><?php echo CHtml::encode($data['text']); ?></td>
         <td><?php echo CHtml::encode($data['sort']); ?></td>
        <td><a href="<?php echo Yii::app()->urlManager->createUrl("adminis/slide/update", array('id'=>$data['id']));?>" class="btn default btn-xs purple"><i class="fa fa-edit"></i>修改</a>  
            <a  href="<?php echo Yii::app()->urlManager->createUrl("adminis/slide/delete", array('id'=>$data['id'],'returnUrl'=>  base64_encode(Yii::app()->request->pathInfo) ));?>" class="btn default btn-xs black deletes  " onclick="if(!confirm('您想要删除这个图片吗?')) return false;"><i class="fa fa-trash-o"></i> 删除</a></td>
	</tr>
