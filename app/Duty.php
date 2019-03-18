<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Duty
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Duty newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Duty newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Duty query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Duty whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Duty whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Duty whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Duty extends Model
{
    //
    protected $fillable = ['name', 'color'];
}
