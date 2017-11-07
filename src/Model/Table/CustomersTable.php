<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Customers Model
 *
 * @property \App\Model\Table\JobTable|\Cake\ORM\Association\HasMany $Job
 * @property \App\Model\Table\OrderTable|\Cake\ORM\Association\HasMany $Order
 *
 * @method \App\Model\Entity\Customer get($primaryKey, $options = [])
 * @method \App\Model\Entity\Customer newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Customer[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Customer|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Customer patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Customer[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Customer findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CustomersTable extends Table
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

        $this->setTable('customers');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Jobs', [
            'foreignKey' => 'customer_id'
        ]);
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('name')
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->scalar('location')
            ->requirePresence('location', 'create')
            ->notEmpty('location');

        $validator
            ->scalar('contact')
            ->requirePresence('contact', 'create')
            ->notEmpty('contact');

        $validator
            ->scalar('address')
            ->requirePresence('address', 'create')
            ->notEmpty('address');

        $validator
            ->scalar('city')
            ->requirePresence('city', 'create')
            ->notEmpty('city');

        $validator
            ->scalar('state')
            ->requirePresence('state', 'create')
            ->notEmpty('state');

        $validator
            ->integer('zip')
            ->requirePresence('zip', 'create')
            ->notEmpty('zip');
        $validator
            ->scalar('phone')
            ->requirePresence('phone', 'create')
            ->notEmpty('phone');

        $validator
            ->scalar('fax')
            ->requirePresence('fax', 'create')
            ->allowEmpty('fax');

        $validator
            ->scalar('contact_billing')
            ->requirePresence('contact_billing', 'create')
            ->notEmpty('contact_billing');

        $validator
            ->scalar('address_billing')
            ->requirePresence('address_billing', 'create')
            ->notEmpty('address_billing');

        $validator
            ->allowEmpty('address2_billing');

        $validator
            ->scalar('city_billing')
            ->requirePresence('city_billing', 'create')
            ->notEmpty('city_billing');

        $validator
            ->scalar('state_billing')
            ->requirePresence('state_billing', 'create')
            ->notEmpty('state_billing');

        $validator
            ->integer('zip_billing')
            ->requirePresence('zip_billing', 'create')
            ->notEmpty('zip_billing');

        $validator
            ->scalar('phone_billing')
            ->requirePresence('phone_billing', 'create')
            ->notEmpty('phone_billing');

        $validator
            ->scalar('fax_billing')
            ->allowEmpty('fax_billing');

        $validator
            ->scalar('optained_by')
            ->requirePresence('optained_by', 'create')
            ->notEmpty('optained_by');

        $validator
            ->date('obtained_date')
            ->requirePresence('obtained_date', 'create')
            ->notEmpty('obtained_date');

        $validator
            ->integer('active')
            ->requirePresence('active', 'create')
            ->notEmpty('active');

        $validator
            ->date('inactive_date')
            ->requirePresence('inactive_date', 'create')
            ->notEmpty('inactive_date');

        return $validator;
    }
}
