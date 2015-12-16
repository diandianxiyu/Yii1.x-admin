<?php
/**
 * 
 * 本文件用于显示ajax修改
 * 颜色
 * alert-success 成功
 * alert-danger 失败
 * alert-warning 警告 
 * alert-info 信息
 * 
 * 
 */



?>
<br>
<div class="alert <?php echo $msg['class']; ?> alert-dismissable">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
<strong><?php echo $msg['title']; ?></strong> <?php echo $msg['msg']; ?>
</div>
