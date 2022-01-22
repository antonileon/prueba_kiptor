<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Mascota Entity
 *
 * @property int $id
 * @property int $personas_id
 * @property int $tipo_mascota_id
 * @property string|null $raza
 * @property string|null $nombre
 * @property string $sexo
 * @property int $edad
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Persona $persona
 * @property \App\Model\Entity\TipoMascotum $tipo_mascotum
 */
class Mascota extends Entity
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
        'personas_id' => true,
        'tipo_mascota_id' => true,
        'raza' => true,
        'nombre' => true,
        'sexo' => true,
        'edad' => true,
        'created' => true,
        'modified' => true,
        'persona' => true,
        'tipo_mascotum' => true,
    ];
}
