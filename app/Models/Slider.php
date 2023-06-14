<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $image
 * @property string $text_header
 * @property string $text_content
 * @property string $text_header_en
 * @property string $text_content_en
 * @property string $url
 * @property int $order_id
 * @property boolean $is_active
 * @property int $user_create
 * @property int $user_update
 * @property string $created_at
 * @property string $updated_at
 */
class Slider extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'slider';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['image', 'text_header', 'text_content', 'text_header_en', 'text_content_en',
        'url',
        'order_id', 'is_active', 'user_create', 'user_update', 'created_at', 'updated_at'];

}
