<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $department
 * @property string $department_en
 * @property int $order_id
 * @property boolean $is_active
 * @property int $user_create
 * @property int $user_update
 * @property string $created_at
 * @property string $updated_at
 * @property HumanResource[] $humanResources
 */
class Department extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'department';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['department', 'department_en', 'order_id', 'is_active', 'user_create', 'user_update', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function humanResources()
    {
        return $this->hasMany('App\Models\HumanResources');
    }
}
