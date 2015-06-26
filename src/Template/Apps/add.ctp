<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Apps'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="apps form large-10 medium-9 columns">
    <p>New Apps: <?php print($app_count); ?></p>
    <p>Modified Apps: <?php print($modified_count); ?></p>
</div>
