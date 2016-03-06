<div class="page-header"><br>
<?php echo $this->Form->create('Idioma'); ?>
</div>
<div class="col-md-6">
	<fieldset>
		<legend><?php echo __('Agregar Idioma'); ?></legend>
	<?php
		echo $this->Form->input('nombre', array('class' => 'form-control'));
	?><br>
	</fieldset>
<?php echo $this->Form->end(__('Agregar')); ?>
</div>
