<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    
    public function edit(Profile $profile)
    {
        return view('profiles.edit', compact('profile'));
    }


    public function update(Request $request, Profile $profile)
    {
        $request->validate([
            'phone_number' => 'nullable|string',
            'bio' => 'nullable|string',
        ]);

        $profile->update($request->only('phone_number', 'bio'));

        return redirect()->route('users.index', $profile->id)
            ->with('success', 'Profile updated successfully!');
    }
}
