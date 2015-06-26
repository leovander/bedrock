<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit App'), ['action' => 'edit', $app->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete App'), ['action' => 'delete', $app->id], ['confirm' => __('Are you sure you want to delete # {0}?', $app->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Apps'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New App'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="apps view large-10 medium-9 columns">
    <h2><?= h($app->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('AppId') ?></h6>
            <p><?= h($app->appId) ?></p>
            <h6 class="subheader"><?= __('Author') ?></h6>
            <p><?= h($app->author) ?></p>
            <h6 class="subheader"><?= __('Category Color') ?></h6>
            <p><?= h($app->category_color) ?></p>
            <h6 class="subheader"><?= __('CategoryId') ?></h6>
            <p><?= h($app->categoryId) ?></p>
            <h6 class="subheader"><?= __('Category Name') ?></h6>
            <p><?= h($app->category_name) ?></p>
            <h6 class="subheader"><?= __('DeveloperId') ?></h6>
            <p><?= h($app->developerId) ?></p>
            <h6 class="subheader"><?= __('Header') ?></h6>
            <p><?= h($app->header) ?></p>
            <h6 class="subheader"><?= __('Icon') ?></h6>
            <p><?= h($app->icon) ?></p>
            <h6 class="subheader"><?= __('List Image') ?></h6>
            <p><?= h($app->list_image) ?></p>
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($app->name) ?></p>
            <h6 class="subheader"><?= __('Share Link') ?></h6>
            <p><?= h($app->share_link) ?></p>
            <h6 class="subheader"><?= __('Type') ?></h6>
            <p><?= h($app->type) ?></p>
            <h6 class="subheader"><?= __('Url') ?></h6>
            <p><?= h($app->url) ?></p>
            <h6 class="subheader"><?= __('Uuid') ?></h6>
            <p><?= h($app->uuid) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($app->id) ?></p>
            <h6 class="subheader"><?= __('Hearts') ?></h6>
            <p><?= $this->Number->format($app->hearts) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($app->created) ?></p>
            <h6 class="subheader"><?= __('Latest Release Date') ?></h6>
            <p><?= h($app->latest_release_date) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($app->modified) ?></p>
            <h6 class="subheader"><?= __('Published Date') ?></h6>
            <p><?= h($app->published_date) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Changelog') ?></h6>
            <?= $this->Text->autoParagraph(h($app->changelog)) ?>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Description') ?></h6>
            <?= $this->Text->autoParagraph(h($app->description)) ?>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Latest Release') ?></h6>
            <?= $this->Text->autoParagraph(h($app->latest_release)) ?>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Screenshots') ?></h6>
            <?= $this->Text->autoParagraph(h($app->screenshots)) ?>
        </div>
    </div>
</div>
