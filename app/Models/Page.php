<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $name
 * @property string $title
 * @property string $title_en
 * @property string $content
 * @property string $content_en
 * @property string $type
 * @property string $group
 * @property int $order_id
 * @property int $user_create
 * @property int $user_update
 * @property string $created_at
 * @property string $updated_at
 * @property PageAttachment[] $pageAttachments
 */
class Page extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'page';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['name', 'title', 'title_en', 'content', 'content_en', 'type', 'group', 'order_id', 'user_create', 'user_update', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pageAttachments()
    {
        return $this->hasMany('App\Models\PageAttachment');
    }

    public function getNameStrAttribute(){
        return ucwords(str_replace('-','/',str_replace('_',' ',$this->name)));
    }
}
