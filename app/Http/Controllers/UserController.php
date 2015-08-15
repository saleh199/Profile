<?php

namespace Profile\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
use Profile\User;
use Profile\Http\Requests;
use Profile\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class UserController extends Controller
{

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function getShow($id)
    {
        $user = User::find($id);

        return response()->json($user);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function putUpdate(Request $request, $id)
    {
        $user = User::find($id);

        if($user === null){
            return response()->json(['error' => 'Not Found User'])->setStatusCode(400);
        }

        $this->validate($request, [
            'name'  => 'required',
            'email' => 'required|email',
        ]);

        $user->update($request->all());

        return response()->json(['result' => 'ok']);

    }

    public function postUploadPersonalImage(Request $request, $id){
        $user = User::find($id);

        if($user === null){
            return response()->json(['error' => 'Not Found User'])->setStatusCode(400);
        }

        if(!$request->hasFile('image')){
            return response()->json(['error' => 'No File'])->setStatusCode(400);
        }

        $file = $request->file('image');
        $input = array('image' => $file);
        $rules = [
            'image' => 'image|max:1024'
        ];

        $validator = Validator::make($input, $rules);

        if($validator->fails()){
            return response()->json(['errors' => $validator->getMessageBag()->toArray()]);
        }

        $image = $this->uploadImage('image', 188, 188, $request);

        $user->image = $image;

        $user->save();

        return response()->json(['result' => 'ok']);
    }

    public function postUploadCoverImage(Request $request, $id){
        $user = User::find($id);

        if($user === null){
            return response()->json(['error' => 'Not Found User'])->setStatusCode(400);
        }

        if(!$request->hasFile('cover_image')){
            return response()->json(['error' => 'No File'])->setStatusCode(400);
        }

        $file = $request->file('cover_image');
        $input = array('cover_image' => $file);
        $rules = [
            'cover_image' => 'image|max:1024'
        ];

        $validator = Validator::make($input, $rules);

        if($validator->fails()){
            return response()->json(['errors' => $validator->getMessageBag()->toArray()]);
        }

        $image = $this->uploadImage('cover_image', 817, 240, $request);

        $user->cover_image = $image;

        $user->save();

        return response()->json(['result' => 'ok']);
    }

    private function uploadImage($handler, $width, $height, Request $request){
        $file = $request->file($handler);

        $filename = md5(time()) . '.' . $file->getClientOriginalExtension();
        $path = public_path('uploads/' . $filename);
        $s = Image::make($file->getRealPath())->resize($width, $height)->save($path);

        return 'uploads/' . $filename;
    }
}
