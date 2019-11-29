<?php

namespace App\Http\Controllers\Cabinet\Person;

use App\Http\Controllers\AppController;
use App\Http\Requests\User\Profile\ProfileEditRequest;
use App\UseCases\User\Profile\ProfileService;
use Illuminate\Support\Facades\Auth;

class ProfileController extends AppController
{
    private $service;

    public function __construct(ProfileService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $user = Auth::user();
        return view('cabinet.person.profile.home', compact('user'));
    }

    public function edit()
    {
        $user = Auth::user();
        return view('cabinet.profile.edit', compact('user'));
    }

    public function update(ProfileEditRequest $request)
    {
        try {
            $this->service->edit(Auth::id(), $request);
        } catch (\DomainException $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
        return redirect()->route('cabinet.person.profile.home', app()->getLocale())
            ->with('success', trans('cabinet/person/profile/home.Success edit profile'));
    }



    public function deleteImage()
    {
        $user = Auth::user();

        $user->deletePhoto();
        $user->update(['image' => null]);

        return redirect()->route('cabinet.person.profile.home', app()->getLocale())
            ->with('success', trans('cabinet/person/profile/home.Delete image success message'));
    }
}
