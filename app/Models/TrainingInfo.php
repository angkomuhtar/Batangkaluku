<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $title
 * @property string $image
 * @property string $title_en
 * @property string $attachment
 * @property string $description
 * @property string $description_en
 * @property string $date
 * @property string $time_start
 * @property string $time_end
 * @property string $location
 * @property string $embed
 * @property boolean $is_active
 * @property int $user_create
 * @property int $user_update
 * @property string $created_at
 * @property string $updated_at
 */
class TrainingInfo extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'training_info';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['image',
        'attachment',
        'title', 'title_en', 'description', 'description_en', 'date', 'time_start', 'time_end', 'location', 'embed', 'is_active', 'user_create', 'user_update', 'created_at', 'updated_at'];

}
