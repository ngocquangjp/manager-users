<?php
$this->pageTitle=Yii::app()->name ;
$this->breadcrumbs=array(
    'Users',
);
?>
    <table>
        <tr>
            <th style="color: blue">STT</th>
            <th style="color: blue">Username</th>
            <th style="color: blue">first_name</th>
            <th style="color: blue">last_name</th>
            <th style="color: blue">phone</th>
            <th style="color: blue">birthay</th>
        </tr>
        <?php foreach ($listUser as $key=>$user): ?>
        <tr>
            <td><?php echo ++$key; ?></td>
            <td><?php echo $user->username; ?></td>
            <td><?php echo $user->first_name; ?></td>
            <td><?php echo $user->last_name; ?></td>
            <td><?php echo $user->phone; ?></td>
            <td><?php echo $user->birthday; ?></td>
            <td><?php echo CHtml::link('edit', $this->createAbsoluteUrl('user/edit',array('user_id'=>$user->id))); ?></td>
            <td><?php echo CHtml::link('remove', $this->createAbsoluteUrl('user/remove',array('user_id'=>$user->id))); ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

