<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * App Entity.
 */
class App extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'appId' => true,
        'author' => true,
        'category_color' => true,
        'categoryId' => true,
        'category_name' => true,
        'changelog' => true,
        'description' => true,
        'developerId' => true,
        'header' => true,
        'hearts' => true,
        'icon' => true,
        'latest_release_date' => true,
        'latest_release' => true,
        'list_image' => true,
        'name' => true,
        'published_date' => true,
        'screenshots' => true,
        'share_link' => true,
        'type' => true,
        'url' => true,
        'uuid' => true,
    ];
}
