<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Customer Entity
 *
 * @property int $id
 * @property string $name
 * @property string $location
 * @property string $contact
 * @property string $address
 * @property string $city
 * @property string $state
 * @property int $zip
 * @property string $phone
 * @property string $fax
 * @property string $contact_billing
 * @property string $address_billing
 * @property string $address2_billing
 * @property string $city_billing
 * @property string $state_billing
 * @property int $zip_billing
 * @property string $phone_billing
 * @property string $fax_billing
 * @property string $optained_by
 * @property \Cake\I18n\FrozenDate $obtained_date
 * @property int $active
 * @property \Cake\I18n\FrozenDate $inactive_date
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Job[] $job
 * @property \App\Model\Entity\Order[] $order
 */
class Customer extends Entity
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
        'name' => true,
        'location' => true,
        'contact' => true,
        'address' => true,
        'city' => true,
        'state' => true,
        'zip' => true,
        'phone' => true,
        'fax' => true,
        'contact_billing' => true,
        'address_billing' => true,
        'address2_billing' => true,
        'city_billing' => true,
        'state_billing' => true,
        'zip_billing' => true,
        'phone_billing' => true,
        'fax_billing' => true,
        'optained_by' => true,
        'obtained_date' => true,
        'active' => true,
        'inactive_date' => true,
        'created' => true,
        'modified' => true,
        'job' => true,
        'order' => true
    ];
}
