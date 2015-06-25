<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Apps'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Authors'), ['controller' => 'Authors', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Author'), ['controller' => 'Authors', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="apps form large-10 medium-9 columns">
    <?= $this->Form->create($app) ?>
    <fieldset>
        <legend><?= __('Add App') ?></legend>
        <?php
            echo $this->Form->input('app_id');
            echo $this->Form->input('author_id', ['options' => $authors]);
            echo $this->Form->input('category_id', ['options' => $categories]);
            echo $this->Form->input('description');
            echo $this->Form->input('published_date');
            echo $this->Form->input('hearts');
            echo $this->Form->input('name');
            echo $this->Form->input('url');
            echo $this->Form->input('type');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
