
<div class="section">
    <h2>Ask a Question</h2>
    <p><?php echo $this->Html->link(__('Back to List of Questions', true), array('action' => 'index')); ?></p>
    
    <?php echo $this->Form->create('Question');?>
    <fieldset>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('body');
	?>
    </fieldset>
    <?php echo $this->Form->end(__('Save', true));?>
</div>
