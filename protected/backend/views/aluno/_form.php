<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'aluno-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos com <span class="required">*</span> são requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ra_aluno'); ?>
		<?php echo $form->textField($model,'ra_aluno',array('size'=>14,'maxlength'=>14)); ?>
		<?php echo $form->error($model,'ra_aluno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nome_aluno'); ?>
		<?php echo $form->textField($model,'nome_aluno',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'nome_aluno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sexo_aluno'); ?>
		<?php echo $form->textField($model,'sexo_aluno'); ?>
		<?php echo $form->error($model,'sexo_aluno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'local_nasc_aluno'); ?>
		<?php echo $form->textField($model,'local_nasc_aluno'); ?>
		<?php echo $form->error($model,'local_nasc_aluno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'data_nasc'); ?>
		<?php echo $form->textField($model,'data_nasc'); ?>
		<?php echo $form->error($model,'data_nasc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nome_mae'); ?>
		<?php echo $form->textField($model,'nome_mae',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'nome_mae'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nome_pai'); ?>
		<?php echo $form->textField($model,'nome_pai',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'nome_pai'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email_resp'); ?>
		<?php echo $form->textField($model,'email_resp',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'email_resp'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email_aluno'); ?>
		<?php echo $form->textField($model,'email_aluno',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'email_aluno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cep'); ?>
		<?php echo $form->textField($model,'cep'); ?>
		<?php echo $form->error($model,'cep'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'num_end'); ?>
		<?php echo $form->textField($model,'num_end'); ?>
		<?php echo $form->error($model,'num_end'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cod_etnia'); ?>
		<?php echo $form->textField($model,'cod_etnia'); ?>
		<?php echo $form->error($model,'cod_etnia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Etnia_cod_etnia'); ?>
		<?php echo $form->textField($model,'Etnia_cod_etnia'); ?>
		<?php echo $form->error($model,'Etnia_cod_etnia'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Criar' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->