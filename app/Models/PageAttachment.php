<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $page_id
 * @property string $name
 * @property string $name_en
 * @property string $attachment
 * @property boolean $is_active
 * @property int $user_create
 * @property int $user_update
 * @property string $created_at
 * @property string $updated_at
 * @property Page $page
 */
class PageAttachment extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'page_attachment';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['page_id', 'name', 'name_en', 'attachment', 'is_active', 'user_create', 'user_update', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function page()
    {
        return $this->belongsTo('App\Models\Page');
    }
}
