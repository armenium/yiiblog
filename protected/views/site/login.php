<?php

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>

<h1>Авторизируйся</h1>



<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	

	<div class="row">
		<?php echo $form->labelEx($model,'Логин'); ?>
		<?php echo $form->textField($model,'username'); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Пароль'); ?>
		<?php echo $form->passwordField($model,'password'); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	
	<div class="row">
        <div class="input-field col s12">
            <button class="btn waves-effect waves-light blue-grey darken-1" <?php echo CHtml::submitButton('Login'); ?>Авторизоваться</button>
        </div>
    </div>


<?php $this->endWidget(); ?>
</div><!-- form -->
