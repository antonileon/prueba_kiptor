<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Mascotas Model
 *
 * @property \App\Model\Table\PersonasTable&\Cake\ORM\Association\BelongsTo $Personas
 * @property \App\Model\Table\TipoMascotaTable&\Cake\ORM\Association\BelongsTo $TipoMascota
 *
 * @method \App\Model\Entity\Mascota get($primaryKey, $options = [])
 * @method \App\Model\Entity\Mascota newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Mascota[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Mascota|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Mascota saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Mascota patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Mascota[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Mascota findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class MascotasTable extends Table
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

        $this->setTable('mascotas');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Personas', [
            'foreignKey' => 'personas_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('TipoMascota', [
            'foreignKey' => 'tipo_mascota_id',
            'joinType' => 'INNER',
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
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('raza')
            ->maxLength('raza', 255)
            ->allowEmptyString('raza');

        $validator
            ->scalar('nombre')
            ->maxLength('nombre', 255)
            ->allowEmptyString('nombre');

        $validator
            ->scalar('sexo')
            ->requirePresence('sexo', 'create')
            ->notEmptyString('sexo');

        $validator
            ->integer('edad')
            ->requirePresence('edad', 'create')
            ->notEmptyString('edad');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['personas_id'], 'Personas'));
        $rules->add($rules->existsIn(['tipo_mascota_id'], 'TipoMascota'));

        return $rules;
    }
}
