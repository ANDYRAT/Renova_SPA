<div class="page-header"><br>
<?php echo $this->Form->create('Paise'); ?>
</div>
<div class="col-md-6">
	<fieldset>
		<legend><?php echo __('Agregar Pais'); ?></legend>
	<?php
		echo $this->Form->input('nombre', array('class' => 'form-control'));
	?><br>
	</fieldset>
<?php echo $this->Form->end(__('Agregar')); ?>
</div>
