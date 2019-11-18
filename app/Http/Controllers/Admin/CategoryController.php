<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\Category\CategoryFormRequest;
use App\Model\Category\Entity\Category;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('can:manage-adverts-categories');
//    }

    public function index()
    {
        $categories = Category::defaultOrder()->withDepth()->get();

        return view('admin.categories.index', compact('categories'))
            ->with('success', 'sdfsdfdsfs');
    }

    public function create()
    {
        $parents = Category::defaultOrder()->withDepth()->get();

        return view('admin.categories.create', compact('parents'));
    }

    public function store(CategoryFormRequest $request)
    {
        $image = $request['image'];

        $slug = Str::slug($request['name_ru'], '_');
        if (Category::where('slug', $slug)->exists()) {
            $slug = $slug . time();
        }

        $category = Category::create([
            'name_ru' => $request['name_ru'],
            'name_uk' => $request['name_uk'],
            'slug' => $slug,
            'description_ru' => $request['description_ru'],
            'description_uk' => $request['description_uk'],
            'parent_id' => $request['parent'],
            'image' => $image ? $image->store('categories', 'public') : null,
            'meta_title_ru' => $request['meta_title_ru'],
            'meta_title_uk' => $request['meta_title_uk'],
            'meta_description_ru' => $request['meta_description_ru'],
            'meta_description_uk' => $request['meta_description_uk'],
            'meta_keywords_ru' => $request['meta_keywords_ru'],
            'meta_keywords_uk' => $request['meta_keywords_uk'],
        ]);

        return redirect()->route('admin.categories.show', $category);
    }

    public function show(Category $category)
    {
        return view('admin.categories.show', compact('category'));
    }

    public function edit(Category $category)
    {
        $parents = Category::defaultOrder()->withDepth()->get();

        return view('admin.categories.edit', compact('category', 'parents'));
    }

    public function update(CategoryFormRequest $request, Category $category)
    {

        $image = $request['image'];

        $slug = Str::slug($request['name_ru'], '_');

        if ($request['name_ru'] != $category->name_ru){
            $slug = Str::slug($request['name_ru'], '_');
            if (Category::where('slug', $slug)->exists()) {
                $slug = $slug . time();
            }
        }


        $category->update([
            'name_ru' => $request['name_ru'],
            'name_uk' => $request['name_uk'],
            'slug' => $slug,
            'description_ru' => $request['description_ru'],
            'description_uk' => $request['description_uk'],
            'parent_id' => $request['parent'],
            'meta_title_ru' => $request['meta_title_ru'],
            'meta_title_uk' => $request['meta_title_uk'],
            'meta_description_ru' => $request['meta_description_ru'],
            'meta_description_uk' => $request['meta_description_uk'],
            'meta_keywords_ru' => $request['meta_keywords_ru'],
            'meta_keywords_uk' => $request['meta_keywords_uk'],
        ]);

        if ($image){
            $category->update(['image' => $image->store('categories', 'public')]);
        }

        return redirect()->route('admin.categories.show', $category);
    }

    public function first(Category $category)
    {
        if ($first = $category->siblings()->defaultOrder()->first()) {
            $category->insertBeforeNode($first);
        }

        return redirect()->route('admin.categories.index');
    }

    public function up(Category $category)
    {
        $category->up();

        return redirect()->route('admin.categories.index');
    }

    public function down(Category $category)
    {
        $category->down();

        return redirect()->route('admin.categories.index');
    }

    public function last(Category $category)
    {
        if ($last = $category->siblings()->defaultOrder('desc')->first()) {
            $category->insertAfterNode($last);
        }

        return redirect()->route('admin.categories.index');
    }

    public function deletePhoto(Category $category)
    {
        if(Storage::disk('public')->exists($category->image)) {
            Storage::disk('public')->delete($category->image);
            $category->update(['image' => null]);
        }
        return redirect()->route('admin.categories.edit', $category);
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('admin.categories.index');
    }
}
