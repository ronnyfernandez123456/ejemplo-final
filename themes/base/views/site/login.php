<?php
$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>

<h1>Iniciar sesión</h1>

<p>Por favor, rellene el siguiente formulario con sus datos de acceso:</p>

<div class="well">
	<?php $form=$this->beginWidget('CActiveForm', array(
		'id'=>'login-form',
		'enableClientValidation'=>true,
		'errorMessageCssClass'=>'alert alert-error',
		'clientOptions'=>array(
			'validateOnSubmit'=>true,
		),
	)); ?>

	<p class="note">Los campos con  <span class="required">*</span> son requeridos</p>
	<?php echo $form->errorSummary($model,NULL,NULL,$htmlOptions=array('class'=>'alert alert-error')); ?>
	<fieldset>
		<?php echo $form->labelEx($model,'usuario'); ?>
		<?php echo $form->textField($model,'username'); ?>
		<?php echo $form->error($model,'username'); ?>

		<?php echo $form->labelEx($model,'contraseña'); ?>
		<?php echo $form->passwordField($model,'password'); ?>
		<?php echo $form->error($model,'password'); ?>
		<p class="alert alert-info">
			Sugerencia: Puede iniciar sesión con <tt>admin/admin</tt>.
		</p>
  
		<?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->label($model,'rememberMe'); ?>
		<?php echo $form->error($model,'rememberMe'); ?>

		<div class="form-actions">
			<?php echo CHtml::submitButton('Iniciar sesión', array('class'=>'btn btn-primary')); ?>
		</div>

	<?php $this->endWidget(); ?>
</div><!-- well -->