<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $department_id
 * @property string $name
 * @property string $nip
 * @property string $image
 * @property string $position
 * @property string $position_en
 * @property int $level_id
 * @property int $order_id
 * @property boolean $is_active
 * @property int $user_create
 * @property int $user_update
 * @property string $created_at
 * @property string $updated_at
 * @property Department $department
 */
class HumanResources extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['department_id', 'image', 'name', 'nip', 'position', 'position_en', 'level_id', 'order_id', 'is_active', 'user_create', 'user_update', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function department()
    {
        return $this->belongsTo('App\Models\Department');
    }
}
