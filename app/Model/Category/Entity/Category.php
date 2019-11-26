<?php

namespace App\Model\Category\Entity;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Storage;
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
 * @property int $_lft
 * @property int $_rgh
 *
 * @property int $depth
 * @property Category $parent
 * @property Category[] $children
 * @property Attribute[] $attributes
 *
 */
class Category extends Model
{
    use NodeTrait;

    const ONLINE = 1;
    const OFFLINE = 2;
    const MASTER = 3;

    const IMAGE_PATH = 'categories';

    protected $table = 'course_categories';

    public $timestamps = false;

    protected $fillable = ['name_uk', 'name_ru', 'slug', 'description_uk', 'description_ru', 'image', 'parent_id', 'meta_title_ru', 'meta_title_uk', 'meta_description_ru', 'meta_description_uk', 'meta_keywords_ru', 'meta_keywords_uk'];



    public static function getOnlineCategory(): self
    {
        return self::findOrFail(self::ONLINE);
    }

    public static function getOfflineCategory(): self
    {
        return self::findOrFail(self::OFFLINE);
    }

    public static function getMasterCategory(): self
    {
        return self::findOrFail(self::MASTER);
    }



    // Attributes

    public function parentAttributes(): array
    {
        return $this->parent ? $this->parent->allAttributes() : [];
    }

    /**
     * @return Attribute[]
     */
    public function allAttributes(): array
    {
        return array_merge($this->parentAttributes(), $this->attributes()->orderBy('sort')->getModels());
    }

    public function attributes()
    {
        return $this->hasMany(Attribute::class, 'category_id', 'id');
    }



    public function getAllChildren(): Collection
    {
        return $this->descendants()->withDepth()->orderBy('_lft')->get();
    }


    public function getAllChildrenWithSelf(): ?Collection
    {
        $categories = $this->descendants()->withDepth()->orderBy('_lft')->get();
        return $categories ? $categories->prepend($this) : null;
    }


    public function getRoot(): ?self
    {
        $categories = $this->getAncestors();
        /** @var self $category */
        foreach ($categories as $category){
            if ($category->getDepth() === 0){
                return $category;
            }
        }
        return null;
    }


    public function getCategoriesForEdit(): ?Collection
    {
        $rootCategory = $this->getRoot();

        if (!$rootCategory){
            return null;
        }

        $children = $rootCategory->getAllChildren();
        $filtered = $children->filter(function (Category $item) {
            return $item->id !== $this->id;
        });

        return $filtered->prepend($rootCategory);
    }


    public static function getRootCategories(): Collection
    {
        return self::find([self::ONLINE, self::OFFLINE, self::MASTER]);
    }



    public function getDepth(): int
    {
        $result = Category::withDepth()->find($this->id);
        return $depth = $result->depth;
    }


    public function isCanDeleted(): bool
    {
        return !$this->isRoot();
    }


    public function getImageUrl(): ?string
    {
        if ($this->image){
            return Storage::disk('public')->url($this->image);
        }
        return  null;
    }


    public function getName(): string
    {
        $name = 'name_' . app()->getLocale();
        return  $this->$name;
    }


    public function getDescription(): string
    {
        $description = 'description_' . app()->getLocale();
        return  $this->$description;
    }
}
