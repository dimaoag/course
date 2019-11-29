<?php

namespace App\UseCases\User\Profile;

use App\Http\Requests\User\Profile\ChangePasswordRequest;
use App\Model\User\Entity\User;
use App\Http\Requests\User\Profile\ProfileEditRequest;
use Illuminate\Support\Facades\Hash;

class ProfileService
{
    public function edit($id, ProfileEditRequest $request): void
    {
        /** @var User $user */
        $user = User::findOrFail($id);
        $image = $request->image;

        if ($image){
            $user->deletePhoto();
        }

        $data = array_filter([
            'name' => $request['name'],
            'phone' => $request['phone'],
            'image' => $image ? $image->store(User::IMAGE_PATH, 'public') : null,
        ]);

        $user->update($data);
    }



    public function changePassword(User $user, ChangePasswordRequest $request): void
    {
        $user->update(['password'=> Hash::make($request->password)]);
    }

}
