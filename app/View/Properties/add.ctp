<?php //Using CakePHP form helper 
echo $this->Form->create('Property'); ?>
<fieldset>
	<legend><?php echo __('Add Property'); ?></legend>
	<?php 
		echo $this->Form->input('address_street');
		echo $this->Form->input('address_city' );
		echo $this->Form->input('address_zip');
		echo $this->Form->input('type_id', array(
			'type' => 'select',
			'options' => $types,
			'empty' => 'Select Category'
		));
		echo $this->Form->input('num_bathrooms');
		echo $this->Form->input('num_bedrooms');
		echo $this->Form->input('description');
		echo $this->Form->input('listing_price');
		echo $this->Form->input('contact_email');
		echo $this->Form->end('Add Property');
	?>

</fieldset>