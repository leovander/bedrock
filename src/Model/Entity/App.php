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
        'app_id' => true,
        'author_id' => true,
        'category_id' => true,
        'description' => true,
        'published_date' => true,
        'hearts' => true,
        'name' => true,
        'url' => true,
        'type' => true,
        'apps' => true,
        'author' => true,
        'category' => true,
    ];
}
