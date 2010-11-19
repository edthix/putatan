
<div class="section">
    <h2>Questions Details</h2>
        
    <table>
        <tr><td>ID</td><td><?php echo $question['Question']['id']; ?></td></tr>
        <tr><td>Title</td><td><?php echo $question['Question']['title']; ?></td></tr>
        <tr><td>Body</td><td><?php echo $question['Question']['body']; ?></td></tr>
        <tr><td>Created</td><td><?php echo $this->Time->niceShort($question['Question']['created']); ?></td></tr>
        <tr><td>Modified</td><td><?php echo $this->Time->niceShort($question['Question']['modified']); ?></td></tr>
    </table>
    
</div>


<!--
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Question', true), array('action' => 'edit', $question['Question']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Question', true), array('action' => 'delete', $question['Question']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $question['Question']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Questions', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Question', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Answers', true), array('controller' => 'answers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Answer', true), array('controller' => 'answers', 'action' => 'add')); ?> </li>
	</ul>
</div>
-->

<div class="section">
<?php if (!empty($question['Answer'])) { ?>
 
	<h2><?php __('Questions Submitted'); ?></h2>
        <?php foreach ($question['Answer'] as $answer): ?>
        <div class="answer">
            <p class="date"><?php echo $this->Time->niceShort($answer['created']); ?></p>
            <p class="body"><?php echo $answer['body']; ?>      
        </div>
        <?php endforeach;
} else { ?>
      	<h2><?php __('No Answers Yet!'); ?></h2>

<?php } ?>
</div>







