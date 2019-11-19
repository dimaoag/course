<?php

namespace App\Model\Region\Entity;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name_ru
 * @property string $name_uk
 * @property string $slug
 */
class Region extends Model
{

    protected $table = 'course_regions';

    public $timestamps = false;

    protected $fillable = ['name_ru', 'name_uk', 'slug'];


}
