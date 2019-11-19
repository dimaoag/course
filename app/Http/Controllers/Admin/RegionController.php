<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\RegionFormRequest;
use App\Model\Region\Entity\Region;
use Illuminate\Support\Str;

class RegionController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('can:manage-adverts-categories');
//    }

    public function index()
    {
        $regions = Region::orderByDesc('name_ru')->get();

        return view('admin.regions.index', compact('regions'));
    }

    public function create()
    {
        return view('admin.regions.create');
    }


    public function store(RegionFormRequest $request)
    {
        $slug = Str::slug($request['name_ru'], '_');

        if (Region::where('slug', $slug)->exists()) {
            $slug = $slug . time();
        }

        $region = Region::create([
            'name_ru' => $request['name_ru'],
            'name_uk' => $request['name_uk'],
            'slug' => $slug,
        ]);

        return redirect()->route('admin.regions.show', $region);
    }

    public function show(Region $region)
    {
        return view('admin.regions.show', compact('region'));
    }

    public function edit(Region $region)
    {
        return view('admin.regions.edit', compact('region'));
    }

    public function update(RegionFormRequest $request, Region $region)
    {
        $slug = Str::slug($request['name_ru'], '_');

        if ($request['name_ru'] != $region->name_ru){
            $slug = Str::slug($request['name_ru'], '_');
            if (Region::where('slug', $slug)->exists()) {
                $slug = $slug . time();
            }
        }

        $region->update([
            'name_ru' => $request['name_ru'],
            'name_uk' => $request['name_uk'],
            'slug' => $slug,
        ]);

        return redirect()->route('admin.regions.show', $region);
    }

    public function destroy(Region $region)
    {
        $region->delete();

        return redirect()->route('admin.regions.index');
    }
}
