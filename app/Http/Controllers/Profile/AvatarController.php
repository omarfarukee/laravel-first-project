<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateAvatarRequest;
use Illuminate\Http\Request;

class AvatarController extends Controller
{
    public function update(UpdateAvatarRequest $request){
        // $path = $request-> file('avatar')->store('avatar');
        // auth()->user()->update(['avatar' => storage_path()."/$path"]);
        // dd($request->file('avatar'));
        dd($request->all());
        // return back()-> with(["message"=> 'avatar added successfully']);
        // return redirect(route('profile.edit'))-> with('message', 'avatar is updated');
        // return redirect(route('profile.edit'));
    }
}
