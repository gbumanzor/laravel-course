<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static paginate()
 * @method static findOrFail(int $id)
 */
class Project extends Model
{
    protected $fillable = ['title', 'slug', 'description'];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
