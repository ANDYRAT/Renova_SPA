<div class="page-header"><br>
<?php echo $this->Form->create('Cliente'); ?>
</div>
<div class="col-md-6">
	<fieldset>
		<legend><?php echo __('Agregar Cliente'); ?></legend>
	<?php
		echo $this->Form->input('pais_id', array('class' => 'form-control'));
		echo $this->Form->input('idioma_id', array('class' => 'form-control'));
		echo $this->Form->input('hotel_id', array('class' => 'form-control'));
		echo $this->Form->input('agencia_id', array('class' => 'form-control'));
		echo $this->Form->input('circustancias_medica_id', array('class' => 'form-control'));
		echo $this->Form->input('fecha_alta', array('class' => 'form-control'));
		echo $this->Form->input('nombre', array('class' => 'form-control'));
		echo $this->Form->input('apellidos', array('class' => 'form-control'));
		echo $this->Form->input('edad', array('class' => 'form-control'));
		echo $this->Form->input('correo_electronico', array('class' => 'form-control'));
		echo $this->Form->input('habitacion', array('class' => 'form-control'));
		echo $this->Form->input('firma', array('class' => 'form-control'));
	?><br>
	</fieldset>
<?php echo $this->Form->end(__('Agregar')); ?><br>
</div>
