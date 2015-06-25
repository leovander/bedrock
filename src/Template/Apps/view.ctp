<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit App'), ['action' => 'edit', $app->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete App'), ['action' => 'delete', $app->id], ['confirm' => __('Are you sure you want to delete # {0}?', $app->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Apps'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New App'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Authors'), ['controller' => 'Authors', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Author'), ['controller' => 'Authors', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="apps view large-10 medium-9 columns">
    <h2><?= h($app->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('App Id') ?></h6>
            <p><?= h($app->app_id) ?></p>
            <h6 class="subheader"><?= __('Author') ?></h6>
            <p><?= $app->has('author') ? $this->Html->link($app->author->name, ['controller' => 'Authors', 'action' => 'view', $app->author->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Category') ?></h6>
            <p><?= $app->has('category') ? $this->Html->link($app->category->name, ['controller' => 'Categories', 'action' => 'view', $app->category->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($app->name) ?></p>
            <h6 class="subheader"><?= __('Url') ?></h6>
            <p><?= h($app->url) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($app->id) ?></p>
            <h6 class="subheader"><?= __('Hearts') ?></h6>
            <p><?= $this->Number->format($app->hearts) ?></p>
            <h6 class="subheader"><?= __('Type') ?></h6>
            <p><?= $this->Number->format($app->type) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Published Date') ?></h6>
            <p><?= h($app->published_date) ?></p>
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($app->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($app->modified) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Description') ?></h6>
            <?= $this->Text->autoParagraph(h($app->description)) ?>
        </div>
    </div>
</div>
