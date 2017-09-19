<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Technician Entity
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $address
 * @property string $city
 * @property string $state
 * @property string $zip
 * @property string $phone
 * @property string $email
 * @property \Cake\I18n\FrozenDate $started
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class Technician extends Entity
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
        'first_name' => true,
        'last_name' => true,
        'address' => true,
        'city' => true,
        'state' => true,
        'zip' => true,
        'phone' => true,
        'email' => true,
        'started' => true,
        'created' => true,
        'modified' => true
    ];
}
