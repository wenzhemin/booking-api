<?php

namespace App\Http\Controllers;

use App\Fotomodel;
use App\FotomodelImage;
use App\Http\Controllers\Controller;
use App\Image;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{

    public function add(Request $request)
    {
        // dd($request);
        $id = $request->get('id');
        $image_type = $request->get('type');

        // if (!$request->hasFile('foto') || !$request->hasFile('foto_org')) {
        if (!$request->hasFile('image')) {
            return back()->with('message', 'Something wrong happened while saving your model')->withInput();

        }

        // Watermark foto
        $file    = $request->file('image');
        $file_id = substr($file->getClientOriginalName(), 0, 18);


        $image               = new Image();
        $image->mime         = $file->getClientMimeType();
        $image->filename     = $file->getClientOriginalName();

        return redirect()->route('model.edit', $model_id);
    }

    public function getUserImage($user_id,$filename)
    {
        $path = storage_path('app/public/images/users') . '/' . $user_id . '/' . $filename;
        $type = File::mimeType($path);
        return response()->file($path, ["Content-Type" => $type]);
    }

    public function delete(Request $request, $id)
    {
        $image_type = $request->get('type');
        $image = Image::find($id);

        return redirect()->route($id);
    }
}
