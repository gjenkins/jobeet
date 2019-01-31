<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Job Entity
 *
 * @property int $id
 * @property int|null $category_id
 * @property string|null $type
 * @property string $company
 * @property string|null $logo
 * @property string|null $url
 * @property string $position
 * @property string $location
 * @property string $description
 * @property string $how_to_apply
 * @property string $token
 * @property bool|null $is_public
 * @property bool|null $is_activated
 * @property string $email
 * @property \Cake\I18n\FrozenTime $expires
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Category $category
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
        'category_id' => true,
        'type' => true,
        'company' => true,
        'logo' => true,
        'url' => true,
        'position' => true,
        'location' => true,
        'description' => true,
        'how_to_apply' => true,
        'token' => true,
        'is_public' => true,
        'is_activated' => true,
        'email' => true,
        'expires' => true,
        'created' => true,
        'modified' => true,
        'category' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'token'
    ];
}
