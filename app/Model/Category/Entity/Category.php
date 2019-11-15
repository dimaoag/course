<?php

namespace App\Model\Category\Entity;

use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;

/**
 * @property int $id
 * @property string $name_uk
 * @property string $name_ru
 * @property string $slug
 * @property string $description_uk
 * @property string $description_ru
 * @property string $image
 * @property string $meta_title_ru
 * @property string $meta_title_uk
 * @property string $meta_description_ru
 * @property string $meta_description_uk
 * @property string $meta_keywords_ru
 * @property string $meta_keywords_uk
 * @property int|null $parent_id
 *
 * @property int $depth
 * @property Category $parent
 * @property Category[] $children
 */
class Category extends Model
{
    use NodeTrait;

    protected $table = 'course_categories';

    public $timestamps = false;

    protected $fillable = ['name_uk', 'name_ru', 'slug', 'description_uk', 'description_ru', 'image', 'parent_id', 'meta_title_ru', 'meta_title_uk', 'meta_description_ru', 'meta_description_uk', 'meta_keywords_ru', 'meta_keywords_uk'];


}
