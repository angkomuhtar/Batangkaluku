<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $human_resource_id
 * @property string $award
 * @property string $created_at
 * @property string $updated_at
 * @property HumanResource $humanResource
 */
class Award extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'award';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['human_resource_id', 'award', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function humanResource()
    {
        return $this->belongsTo('App\Models\HumanResources','human_resource_id');
    }
}
