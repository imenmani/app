<?php
namespace App\Model\Table;

use App\Model\Entity\Experienceprof;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Experienceprof Model
 *
 */
class ExperienceprofTable extends Table
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

        $this->table('experienceprof');
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
            ->requirePresence('fonction', 'create')
            ->notEmpty('fonction');

        $validator
            ->add('datedeb', 'valid', ['rule' => 'date'])
            ->requirePresence('datedeb', 'create')
            ->notEmpty('datedeb');

        $validator
            ->add('datefin', 'valid', ['rule' => 'date'])
            ->requirePresence('datefin', 'create')
            ->notEmpty('datefin');

        return $validator;
    }
}
