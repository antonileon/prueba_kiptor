<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Persona Entity
 *
 * @property int $id
 * @property int $user_id
 * @property string|null $nombres
 * @property string|null $apellidos
 * @property string|null $rut
 * @property string|null $email
 * @property string|null $telefono
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\User $user
 */
class Persona extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'user_id' => true,
        'nombres' => true,
        'apellidos' => true,
        'rut' => true,
        'email' => true,
        'telefono' => true,
        'created' => true,
        'modified' => true,
        'user' => true,
    ];
}
