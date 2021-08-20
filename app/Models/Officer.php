<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $name
 * @property string $nip
 * @property string $rank
 * @property string $rank_en
 * @property string $position
 * @property string $position_en
 * @property boolean $is_active
 * @property int $user_create
 * @property int $user_update
 * @property string $created_at
 * @property string $updated_at
 */
class Officer extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'officer';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['name', 'nip', 'rank','rank_en', 'position', 'position_en', 'is_active', 'user_create', 'user_update', 'created_at', 'updated_at'];

}
