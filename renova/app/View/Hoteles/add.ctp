<div class="page-header"><br>
<?php echo $this->Form->create('Hotele'); ?>
</div>
<div class="col-md-6">
	<fieldset>
		<legend><?php echo __('Agregar Hotel'); ?></legend>
	<?php
		echo $this->Form->input('nombre', array('class' => 'form-control'));
		echo $this->Form->input('ubicacion', array('class' => 'form-control'));
	?><br>
	</fieldset>
<?php echo $this->Form->end(__('Agregar')); ?>
</div>
