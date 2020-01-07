<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Requests\UpdatePasswordRequest;
use App\Http\Requests\UpdateProfileRequest;
use App\Http\Requests\CreateProfileRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;


class UserController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $data['users'] = $users;
        return view('admin.users.index')->with($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        $data['user'] = $user;
        return view('admin.users.show')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['user'] = User::find($id);
        return view('admin.users.edit')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProfileRequest $request, $id)
    {
        $user  = User::find($id);
        $input = $request->except(['csrf_token']);
        $user->image = '';
        $user->fill($input)->save();

        if (!$user->save()) {
            return back()->with('message', 'Something wrong happened while saving your model')->withInput();
        }

        if ($request->hasFile('image')) {
            // Watermark image
            $file    = $request->file('image');
            // Slet det gamle billede
            Storage::disk('users')->delete($user->id . '/' . $user->image);


            Storage::disk('users')->put($user->id . '/' . $file->getClientOriginalName(), File::get($file));
            $user->image = $file->getClientOriginalName();
            $user->save();
        }
        return \Redirect('users')->with('user_updated', 'Users info was changed');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        Storage::disk('users')->delete($user->id . '/' . $user->image);
        $user->delete();
        return \Redirect('users')->with('user_deleted', 'The user was deleted');
    }
}
