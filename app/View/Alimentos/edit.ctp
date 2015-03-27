<div class="alimentos form">
<?php echo $this->Form->create('Alimento'); ?>
	<fieldset>
		<legend><?php echo __('Edit Alimento'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('codigo');
		echo $this->Form->input('descripcion');
		echo $this->Form->input('Pedido');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Alimento.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Alimento.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Alimentos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Pedidos'), array('controller' => 'pedidos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pedido'), array('controller' => 'pedidos', 'action' => 'add')); ?> </li>
	</ul>
</div>
