<?php
/* @var $this EventoProgramadoController */
/* @var $model EventoProgramado */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'evento-programado-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_inicio'); ?>
		<!--?php echo $form->textField($model,'fecha_inicio'); ?-->
		  <?php 
  $this->widget('zii.widgets.jui.CJuiDatePicker',
  array(
        'attribute'=>'fecha_inicio',
        'model'=>$model,
        'options' => array(
                          'mode'=>'focus',
                          //'dateFormat'=>'d MM, yy',
                         // 'dateFormat'=>'dd-mm-yy',
                          'dateFormat'=>'yy-mm-dd',
                          'showAnim' => 'slideDown',
                          ),
  'htmlOptions'=>array('size'=>30,'class'=>'date'),
      )
  );
  ?>
		<?php echo $form->error($model,'fecha_inicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_fin'); ?>
		<!--?php echo $form->textField($model,'fecha_fin'); ?-->
		 <?php 
  $this->widget('zii.widgets.jui.CJuiDatePicker',
  array(
        'attribute'=>'fecha_fin',
        'model'=>$model,
        'options' => array(
                          'mode'=>'focus',
                          //'dateFormat'=>'d MM, yy',
                         // 'dateFormat'=>'dd-mm-yy',
                          'dateFormat'=>'yy-mm-dd',
                          'showAnim' => 'slideDown',
                          ),
  'htmlOptions'=>array('size'=>30,'class'=>'date'),
      )
  );
  ?>
		<?php echo $form->error($model,'fecha_fin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'modalidad'); ?>
		<?php echo $form->textField($model,'modalidad',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'modalidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cupo'); ?>
		<?php echo $form->textField($model,'cupo'); ?>
		<?php echo $form->error($model,'cupo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estado'); ?>
		<?php echo $form->textField($model,'estado',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'estado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'horas'); ?>
		<?php echo $form->textField($model,'horas',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'horas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_evento'); ?>
		<!--?php echo $form->textField($model,'id_evento'); ?-->
			<?php echo $form->dropDownList($model,'id_evento',CHtml::listData(Evento::model()->findAll(),'id','nombre')); ?>
		<?php echo $form->error($model,'id_evento'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->