<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class MenuRepository.
 *
 * @package namespace App\Entities;
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\MenuRepository newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\MenuRepository newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\MenuRepository query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\MenuRepository whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\MenuRepository whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\MenuRepository whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class MenuRepository extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];

}
