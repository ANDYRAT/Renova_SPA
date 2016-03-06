<div class="page-header"><br>
<h2><?php echo __('Sesione'); ?></h2>
</div>
<div class="col-md-6">
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($sesione['Sesione']['id']); ?><br>
			&nbsp;
		</dd>
</div>
<div class="col-md-6">
		<dt><?php echo __('Opinion'); ?></dt>
		<dd>
			<?php echo $this->Html->link($sesione['Opinion']['id'], array('controller' => 'opiniones', 'action' => 'view', $sesione['Opinion']['id'])); ?><br>
			&nbsp;
		</dd>
</div>
<div class="col-md-6">
		<dt><?php echo __('Cliente'); ?></dt>
		<dd>
			<?php echo $this->Html->link($sesione['Cliente']['nombre'], array('controller' => 'clientes', 'action' => 'view', $sesione['Cliente']['id'])); ?><br>
			&nbsp;
		</dd>
</div>
<div class="col-md-6">
		<dt><?php echo __('Terapeuta'); ?></dt>
		<dd>
			<?php echo $this->Html->link($sesione['Terapeuta']['nombre'], array('controller' => 'terapeutas', 'action' => 'view', $sesione['Terapeuta']['id'])); ?><br>
			&nbsp;
		</dd>
</div>
<div class="col-md-6">
		<dt><?php echo __('Tratamiento'); ?></dt>
		<dd>
			<?php echo $this->Html->link($sesione['Tratamiento']['nombre'], array('controller' => 'tratamientos', 'action' => 'view', $sesione['Tratamiento']['id'])); ?>
			&nbsp;
		</dd>
</div>
