<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Service Entity
 *
 * @property int $id
 * @property int $job_id
 * @property int $techician_id
 * @property \Cake\I18n\FrozenDate $service_date
 *
 * @property \App\Model\Entity\Job $job
 * @property \App\Model\Entity\Techician $techician
 */
class Service extends Entity
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
        'job_id' => true,
        'techician_id' => true,
        'service_date' => true,
        'job' => true,
        'techician' => true
    ];
}
