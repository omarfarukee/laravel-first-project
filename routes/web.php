<?php

use App\Http\Controllers\Profile\AvatarController;
use App\Http\Controllers\ProfileController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('welcome');
    // get all users from the data base
    // $users = DB::table('users')->get();
    // get single user
    // $singleUser = DB::table('users')->where('id', 1)->get();
    // //add user 
    // $addUser= DB::table('users')-> insert([
    //     'name'=> "rakibs",
    //     'email'=>"rakib1@gmail.com",
    //     'password'=>"password",
    // ]);
    // $updateUser = DB::table('users')->where('id', 2)->update(['email'=> 'abc@gmail.com']);
    // $deleteUser= DB::table('users')->where('id', 2)->delete();


    // $user = User::create([
    //     'name' => "rakibs",
    //     'email' => "rakib4@gmail.com",
    //     'password' => "password",
    // ]);

    // dd($users);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');

    Route::patch('/profile/avatar',[AvatarController::class, 'update'])->name('profile.avatar');

    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
