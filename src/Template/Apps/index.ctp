<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New App'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Authors'), ['controller' => 'Authors', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Author'), ['controller' => 'Authors', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="apps index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('app_id') ?></th>
            <th><?= $this->Paginator->sort('author_id') ?></th>
            <th><?= $this->Paginator->sort('category_id') ?></th>
            <th><?= $this->Paginator->sort('published_date') ?></th>
            <th><?= $this->Paginator->sort('hearts') ?></th>
            <th><?= $this->Paginator->sort('name') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($apps as $app): ?>
        <tr>
            <td><?= $this->Number->format($app->id) ?></td>
            <td><?= h($app->app_id) ?></td>
            <td>
                <?= $app->has('author') ? $this->Html->link($app->author->name, ['controller' => 'Authors', 'action' => 'view', $app->author->id]) : '' ?>
            </td>
            <td>
                <?= $app->has('category') ? $this->Html->link($app->category->name, ['controller' => 'Categories', 'action' => 'view', $app->category->id]) : '' ?>
            </td>
            <td><?= h($app->published_date) ?></td>
            <td><?= $this->Number->format($app->hearts) ?></td>
            <td><?= h($app->name) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $app->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $app->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $app->id], ['confirm' => __('Are you sure you want to delete # {0}?', $app->id)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
