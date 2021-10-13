<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $route
 * @property int $unique_id
 * @property string $created_at
 * @property string $updated_at
 */
class RouteVisitor extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'route_visitor';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['route', 'unique_id', 'created_at', 'updated_at'];

}
