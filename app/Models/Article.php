<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

/**
 * @property integer $id
 * @property string $image
 * @property string $title
 * @property string $description
 * @property string $content
 * @property string $title_en
 * @property string $description_en
 * @property string $content_en
 * @property string $type
 * @property string $source
 * @property string $creator
 * @property string $published_time
 * @property boolean $is_active
 * @property int $user_create
 * @property int $user_update
 * @property string $created_at
 * @property string $updated_at
 */
class Article extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'article';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['image', 'title', 'description', 'content', 'title_en', 'description_en', 'content_en', 'type', 'source', 'creator', 'published_time', 'is_active', 'user_create', 'user_update', 'created_at', 'updated_at'];
    protected $dates = [
        'published_time'
    ];

    public function getDescStrAttribute(){
        $lang = request()->query('lang','id');
        return substr(strip_tags($lang == 'en' ? ($this->description_en ?? $this->description) : $this->description),0,110);
    }

    public function getTitleStrAttribute(){
        $lang = request()->query('lang','id');
        return Str::slug($lang == 'en' ? ($this->title_en ?? $this->title) : $this->title);
    }
}
