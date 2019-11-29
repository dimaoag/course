<?php

namespace App\UseCases\User\Profile;

use App\Model\User\Entity\User;
use App\Http\Requests\User\Profile\ProfileEditRequest;

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
}
