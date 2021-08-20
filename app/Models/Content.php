<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $name
 * @property string $content
 * @property string $content_en
 * @property int $user_create
 * @property int $user_update
 * @property string $created_at
 * @property string $updated_at
 */
class Content extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'content';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['name', 'content', 'content_en', 'user_create', 'user_update', 'created_at', 'updated_at'];

    public function getNameStrAttribute(){
        return ucwords(str_replace('_',' ',$this->name));
    }
}
