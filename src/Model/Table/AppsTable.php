<?php
namespace App\Model\Table;

use App\Model\Entity\App;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Apps Model
 *
 */
class AppsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('apps');
        $this->displayField('name');
        $this->primaryKey('appId');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->allowEmpty('appId', 'create');
            
        $validator
            ->requirePresence('author', 'create')
            ->notEmpty('author');
            
        $validator
            ->requirePresence('category_color', 'create')
            ->notEmpty('category_color');
            
        $validator
            ->requirePresence('categoryId', 'create')
            ->notEmpty('categoryId');
            
        $validator
            ->requirePresence('category_name', 'create')
            ->notEmpty('category_name');
            
        $validator
            ->requirePresence('changelog', 'create')
            ->notEmpty('changelog');
            
        $validator
            ->allowEmpty('description');
            
        $validator
            ->requirePresence('developerId', 'create')
            ->notEmpty('developerId');
            
        $validator
            ->requirePresence('header', 'create')
            ->notEmpty('header');
            
        $validator
            ->add('hearts', 'valid', ['rule' => 'numeric'])
            ->requirePresence('hearts', 'create')
            ->notEmpty('hearts');
            
        $validator
            ->requirePresence('icon', 'create')
            ->notEmpty('icon');
            
        $validator
            ->add('latest_release_date', 'valid', ['rule' => 'datetime'])
            ->requirePresence('latest_release_date', 'create')
            ->notEmpty('latest_release_date');
            
        $validator
            ->requirePresence('latest_release', 'create')
            ->notEmpty('latest_release');
            
        $validator
            ->requirePresence('list_image', 'create')
            ->notEmpty('list_image');
            
        $validator
            ->requirePresence('name', 'create')
            ->notEmpty('name');
            
        $validator
            ->add('published_date', 'valid', ['rule' => 'datetime'])
            ->requirePresence('published_date', 'create')
            ->notEmpty('published_date');
            
        $validator
            ->requirePresence('screenshots', 'create')
            ->notEmpty('screenshots');
            
        $validator
            ->requirePresence('share_link', 'create')
            ->notEmpty('share_link');
            
        $validator
            ->requirePresence('type', 'create')
            ->notEmpty('type');
            
        $validator
            ->allowEmpty('url');
            
        $validator
            ->requirePresence('uuid', 'create')
            ->notEmpty('uuid');

        return $validator;
    }
}
