<div class="page-header"><br>
<h2><?php echo __('Cliente'); ?></h2>
</div>
<div class="col-md-6">
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['id']); ?><br>
			&nbsp;
		</dd>
</div>
<div class="col-md-6">
		<dt><?php echo __('Pais'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cliente['Pais']['nombre'], array('controller' => 'paises', 'action' => 'view', $cliente['Pais']['id'])); ?><br>
			&nbsp;
		</dd>
</div>
<div class="col-md-6">
		<dt><?php echo __('Idioma'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cliente['Idioma']['nombre'], array('controller' => 'idiomas', 'action' => 'view', $cliente['Idioma']['id'])); ?><br>
			&nbsp;
		</dd>
</div>
<div class="col-md-6">
		<dt><?php echo __('Hotel'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cliente['Hotel']['nombre'], array('controller' => 'hoteles', 'action' => 'view', $cliente['Hotel']['id'])); ?><br>
			&nbsp;
		</dd>
</div>
<div class="col-md-6">
		<dt><?php echo __('Agencia'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cliente['Agencia']['nombre_comercial'], array('controller' => 'agencias', 'action' => 'view', $cliente['Agencia']['id'])); ?><br>
			&nbsp;
		</dd>
</div>
<div class="col-md-6">
		<dt><?php echo __('Circustancias Medica'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cliente['CircustanciasMedica']['nombre'], array('controller' => 'circustancias_medicas', 'action' => 'view', $cliente['CircustanciasMedica']['id'])); ?><br>
			&nbsp;
		</dd>
</div>
<div class="col-md-6">
		<dt><?php echo __('Fecha Alta'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['fecha_alta']); ?><br>
			&nbsp;
		</dd>
</div>
<div class="col-md-6">
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['nombre']); ?><br>
			&nbsp;
		</dd>
</div>
<div class="col-md-6">
		<dt><?php echo __('Apellidos'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['apellidos']); ?><br>
			&nbsp;
		</dd>
</div>
<div class="col-md-6">
		<dt><?php echo __('Edad'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['edad']); ?><br>
			&nbsp;
		</dd>
</div>
<div class="col-md-6">
		<dt><?php echo __('Correo Electronico'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['correo_electronico']); ?><br>
			&nbsp;
		</dd>
</div>
<div class="col-md-6">
		<dt><?php echo __('Habitacion'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['habitacion']); ?><br>
			&nbsp;
		</dd>
</div>
<div class="col-md-6">
		<dt><?php echo __('Firma'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['firma']); ?>
			&nbsp;
		</dd>
</div>
