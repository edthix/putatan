
<div class="section">
    <h2>Ask a Question</h2>
    <br />
    <?php echo $this->Form->create('Question');?>
    <fieldset>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('body');
                echo $this->Form->end(__('Save', true));
        ?>
        <br /><br />
        <?php echo $this->Html->link(__('<< Back to List of Questions', true), array('action' => 'index')); ?>
    </fieldset>

        <p></p>
        
</div>
