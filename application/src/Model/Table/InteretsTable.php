<?php
namespace App\Model\Table;

use App\Model\Entity\Interet;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Interets Model
 *
 */
class InteretsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('interets');
        $this->displayField('id');
        $this->primaryKey('id');

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
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('passion', 'create')
            ->notEmpty('passion');

        $validator
            ->requirePresence('musique', 'create')
            ->notEmpty('musique');

        $validator
            ->requirePresence('sport', 'create')
            ->notEmpty('sport');

        return $validator;
    }
}
