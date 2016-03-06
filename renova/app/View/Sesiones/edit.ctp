<div class="page-header"><br>
<?php echo $this->Form->create('Sesione'); ?>
</div>
<div class="col-md-6">
	<fieldset>
		<legend><?php echo __('Editar Sesion'); ?></legend>
	<?php
		echo $this->Form->input('id', array('class' => 'form-control'));
		echo $this->Form->input('opinion_id', array('class' => 'form-control'));
		echo $this->Form->input('cliente_id', array('class' => 'form-control'));
		echo $this->Form->input('terapeuta_id', array('class' => 'form-control'));
		echo $this->Form->input('tratamiento_id', array('class' => 'form-control'));
	?><br>
	</fieldset>
<?php echo $this->Form->end(__('Aceptar')); ?>
</div>
