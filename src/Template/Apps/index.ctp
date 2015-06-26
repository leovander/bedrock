<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New App'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="apps index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('name') ?></th>
            <th><?= $this->Paginator->sort('author') ?></th>
            <th><?= $this->Paginator->sort('category_name') ?></th>
            <th><?= $this->Paginator->sort('type') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($apps as $app): ?>
        <tr>
            <td><?= h($app->name) ?></td>
            <td><?= h($app->author) ?></td>
            <td><?= h($app->category_name) ?></td>
            <td><?= h($app->type) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $app->appId]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $app->appId]) ?>
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
