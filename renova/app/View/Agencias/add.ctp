<div class="page-header"><br>
<?php echo $this->Form->create('Agencia'); ?>
</div>
<div class="col-md-6">
	<fieldset>
		<legend><?php echo __('Agregar Agencia'); ?></legend>
	<?php
		echo $this->Form->input('razon_social', array('class' => 'form-control'));
		echo $this->Form->input('nombre_comercial', array('class' => 'form-control'));
		echo $this->Form->input('telefono', array('class' => 'form-control'));
		echo $this->Form->input('correo_electronico', array('class' => 'form-control'));
	?><br>
	</fieldset>
<?php echo $this->Form->end(__('Agregar')); ?>
</div>
