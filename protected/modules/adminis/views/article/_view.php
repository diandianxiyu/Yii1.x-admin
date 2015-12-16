<?php
/* @var $this MenuController */
/* @var $data Menu */
?>

<tr>
	
	<td><?php echo CHtml::link(CHtml::encode($data['atitle']), array('view', 'id'=>$data['id'])); ?></td>
        <td><?php echo CHtml::encode($data['aauthor']); ?></td>
        <td><?php echo CHtml::encode(date("Y-m-d H:i:s",$data['pub_time'])); ?></td>
         <td><?php echo CHtml::encode(date("Y-m-d H:i:s",$data['edit_time'])); ?></td>
         <td><?php echo CHtml::encode($data['sort']); ?></td>
        <td><a href="<?php echo Yii::app()->urlManager->createUrl("adminis/article/update", array('id'=>$data['id']));?>" class="btn default btn-xs purple"><i class="fa fa-edit"></i>修改</a>  
            <a  href="<?php echo Yii::app()->urlManager->createUrl("adminis/article/delete", array('id'=>$data['id'],'returnUrl'=>  base64_encode(Yii::app()->request->pathInfo) ));?>" class="btn default btn-xs black deletes  " onclick="if(!confirm('您想要删除这个文章吗?')) return false;"><i class="fa fa-trash-o"></i> 删除</a></td>
	</tr>
