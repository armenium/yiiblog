<?php

$this->pageTitle=Yii::app()->name . ' - Registration';
$this->breadcrumbs=array(
	'Registration',
);
?>

<h1>Зарегистрируйся</h1>



<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'Registration',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	

	<div class="row">
		<?php echo $form->labelEx($model,'Логин'); ?>
		<?php echo $form->textField($model,'login'); ?>
		<?php echo $form->error($model,'login'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Пароль'); ?>
		<?php echo $form->passwordField($model,'password'); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'имя'); ?>
		<?php echo $form->textField($model,'username'); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'Фамилия'); ?>
		<?php echo $form->textField($model,'usersurname'); ?>
		<?php echo $form->error($model,'usersurname'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email'); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	
	<div class="row">
        <div class="input-field col s12">
            <button class="btn waves-effect waves-light blue-grey darken-1" <?php echo CHtml::submitButton('Register'); ?>Зарегистрироваться</button>
        </div>
    </div>


<?php $this->endWidget(); ?>
</div><!-- form -->
