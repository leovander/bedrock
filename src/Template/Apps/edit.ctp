<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $app->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $app->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Apps'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="apps form large-10 medium-9 columns">
    <?= $this->Form->create($app) ?>
    <fieldset>
        <legend><?= __('Edit App') ?></legend>
        <?php
            echo $this->Form->input('appId');
            echo $this->Form->input('author');
            echo $this->Form->input('category_color');
            echo $this->Form->input('categoryId');
            echo $this->Form->input('category_name');
            echo $this->Form->input('changelog');
            echo $this->Form->input('description');
            echo $this->Form->input('developerId');
            echo $this->Form->input('header');
            echo $this->Form->input('hearts');
            echo $this->Form->input('icon');
            echo $this->Form->input('latest_release_date');
            echo $this->Form->input('latest_release');
            echo $this->Form->input('list_image');
            echo $this->Form->input('name');
            echo $this->Form->input('published_date');
            echo $this->Form->input('screenshots');
            echo $this->Form->input('share_link');
            echo $this->Form->input('type');
            echo $this->Form->input('url');
            echo $this->Form->input('uuid');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
