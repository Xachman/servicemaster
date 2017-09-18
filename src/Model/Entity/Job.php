<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Job Entity
 *
 * @property int $id
 * @property int $customer_id
 * @property float $amount
 * @property float $amount_recived
 * @property string $description
 *
 * @property \App\Model\Entity\Customer $customer
 * @property \App\Model\Entity\Service[] $services
 */
class Job extends Entity
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
        'customer_id' => true,
        'amount' => true,
        'amount_recived' => true,
        'description' => true,
        'customer' => true,
        'services' => true
    ];
}
