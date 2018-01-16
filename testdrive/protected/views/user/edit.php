<?php
$this->breadcrumbs=array(
    'Users',
    'Edit',
);
?>
<div class="form">
    <?php echo CHtml::beginForm(); ?>
    <table>
        <tr>
            <th><?php echo CHtml::activeLabelEx($user,'username'); ?></th>
            <th><?php echo CHtml::activeLabelEx($user,'first_name'); ?></th>
            <th><?php echo CHtml::activeLabelEx($user,'last_name'); ?></th>
            <th><?php echo CHtml::activeLabelEx($user,'phone'); ?></th>
            <th><?php echo CHtml::activeLabelEx($user,'birthday'); ?></th>
        </tr>
        <tr>
            <td><?php echo CHtml::activeTextField($user,'username'); ?></td>
            <td><?php echo CHtml::activeTextField($user,'first_name'); ?></td>
            <td><?php echo CHtml::activeTextField($user,'last_name'); ?></td>
            <td><?php echo CHtml::activeTextField($user,'phone'); ?></td>
            <td><?php echo CHtml::activeTextField($user,'birthday'); ?></td>
        </tr>
    </table>
    <?php echo CHtml::submitButton('Save'); ?>
    <?php echo CHtml::endForm(); ?>
</div><!-- form -->