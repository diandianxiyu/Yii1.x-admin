<tr>
	
	<td><?php echo CHtml::link(CHtml::encode($data->username), array('view', 'id'=>$data->id)); ?></td>

        <td><?php echo CHtml::encode(Department::model()->find('id = :id ',array(':id'=> $data->department))->attributes['name']); ?></td>
                
	<td><?php echo CHtml::encode($data->email); ?></td>
	<td><?php echo CHtml::encode($data->mobile); ?></td>
        <td><?php echo CHtml::encode(date("Y-m-d H:i:s",$data->regtime)); ?></td>
	<td><?php echo !$data->disable?"<i class='fa fa-circle-o'>":"<i class='fa fa-check-circle-o '></i>"; ?></td>
        
        <td id="admin-user-list-<?php echo $data->id;?>">
            <a   href="<?php echo Yii::app()->urlManager->createUrl("adminis/adminUser/update", array('id'=>$data->id));?>" class="btn default btn-xs purple updates"><i class="fa fa-edit"></i>修改</a> 
            <a  href="<?php echo Yii::app()->urlManager->createUrl("adminis/adminUser/delete", array('id'=>$data->id,'returnUrl'=>  base64_encode(Yii::app()->request->pathInfo) ));?>" class="btn default btn-xs black deletes" onclick="if(!confirm('您想要删除管理员 <?php echo $data->username ?> 吗?')) return false;"><i class="fa fa-trash-o"></i> 删除</a>
             <a  href="<?php echo Yii::app()->urlManager->createUrl("adminis/adminUser/disable", array('id'=>$data->id,'returnUrl'=>  base64_encode(Yii::app()->request->pathInfo) ));?>" class="btn default btn-xs blue " onclick="if(!confirm('您要 <?php echo !$data->disable?'禁用':'启用' ?>  用户  <?php echo $data->username ?>  吗?')) return false;"><i class="fa fa-group"></i> <?php echo !$data->disable?'禁用':'启用' ?></a>
        </td>
	</tr>
        
    