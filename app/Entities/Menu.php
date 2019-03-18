<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Menu.
 *
 * @package namespace App\Entities;
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Menu newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Menu newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Menu query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Menu whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Menu whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Menu whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Menu extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];

}
